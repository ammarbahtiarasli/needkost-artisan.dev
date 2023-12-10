<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Gender;
use App\Models\Photo;
use App\Models\Kost_Fasilitas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kost extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    function kota()
    {
        return $this->belongsTo(Kota::class);
    }

    function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    function photo()
    {
        return $this->hasMany(Photo::class);
    }

    function kost_fasilitas()
    {
        return $this->hasMany(Kost_Fasilitas::class);
    }
}
