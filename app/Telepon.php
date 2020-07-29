<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Anggota;

class Telepon extends Model
{
    protected $table = 'telepon';
    protected $primaryKey = 'id_anggota';
    protected $fillable = ['id_anggota', 'nomor_telepon'];

    public function anggota(){
    	return $this->belongsTo('App\Anggota', 'id_anggota');
    }
}
