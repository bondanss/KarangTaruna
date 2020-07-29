<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    protected $table = 'hobi';

    protected $fillable = ['nama_hobi'];

    public function anggota() {
        return $this->belongsToMany('App\Anggota', 'hobi_anggota', 'id_hobi', 'id_anggota');
    }
}
