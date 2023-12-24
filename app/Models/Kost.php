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
        return $this->belongsTo(User::class, 'id_user');
    }

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'id_provinsi');
    }

    public function kota()
    {
        return $this->belongsTo(Kota::class, 'id_kota');
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'id_gender');
    }

    public function photo()
    {
        return $this->hasMany(Photo::class);
    }

    public function kostFasilitas()
    {
        return $this->hasMany(KostFasilitas::class);
    }
}
