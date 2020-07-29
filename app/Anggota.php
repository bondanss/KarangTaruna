<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';

    protected $fillable = [
        'nik',
        'nama_anggota',
        'tanggal_lahir',
        'alamat',
        'jenis_kelamin',
        'id_kelurahan',
        'nomor_telepon',
        'foto'
    ];

    protected $dates = ['tanggal_lahir'];

    // Relasi Anggota - Hobi
    public function hobi() {
        return $this->belongsToMany('App\Hobi', 'hobi_anggota', 'id_anggota', 'id_hobi')->withTimeStamps();
    }


    // Relasi Anggota - Kelurahan
    public function kelurahan() {
        return $this->belongsTo('App\Kelurahan', 'id_kelurahan');
    }


    // Relasi Anggota - Telepon
    public function telepon() {
        return $this->hasOne('App\Telepon', 'id_anggota');
    }


    // Accessor
    public function getNamaAnggotaAttribute($nama_anggota) {
        return ucwords($nama_anggota);
    }


    // Mutator
    public function setNamaAnggotaAttribute($nama_anggota) {
        $this->attributes['nama_anggota'] = strtolower($nama_anggota);
    }


    // Accessor
    public function getHobiAnggotaAttribute() {
        return $this->hobi->pluck('id')->toArray();
    }

    // Scope Kelurahan
    public function scopeKelurahan($query, $id_kelurahan) {
        return $query->where('id_kelurahan', $id_kelurahan);
    }

    // Scope Jenis Kelamin
    public function scopeJenisKelamin($query, $jenis_kelamin) {
        return $query->where('jenis_kelamin', $jenis_kelamin);
    }

}
