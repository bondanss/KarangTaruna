<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Anggota;
use App\Kelurahan;
use App\Hobi;

class FormKelurahanServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('anggota.form', function($view) {
            $view->with('list_kelurahan', Kelurahan::pluck('nama_kelurahan', 'id'));
            $view->with('list_hobi', Hobi::pluck('nama_hobi', 'id'));
        });

        view()->composer('anggota.form_pencarian', function($view) {
             $view->with('list_kelurahan', Kelurahan::pluck('nama_kelurahan', 'id'));
        });
    }
}
