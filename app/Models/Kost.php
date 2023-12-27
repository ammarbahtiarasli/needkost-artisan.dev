<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Gender;
use App\Models\Photo;
use App\Models\KostFasilitas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kost extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_id');
    }

    public function kota()
    {
        return $this->belongsTo(Kota::class, 'kota_id');
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id');
    }

    public function photo()
    {
        return $this->hasMany(Photo::class, 'kost_id');
    }

    public function fasilitas()
    {
        return $this->belongsToMany(Fasilitas::class, KostFasilitas::class, 'kost_id');
    }

    public function riwayat()
    {
        return $this->hasMany(Riwayat::class, 'kost_id');
    }
}
