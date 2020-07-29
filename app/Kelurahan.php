<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $table = 'kelurahan';

    protected $fillable = ['nama_kelurahan'];

    public function anggota() {
        return $this->hasMany('App\Anggota', 'id_kelurahan');
    }
}
