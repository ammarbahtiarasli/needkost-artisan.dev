<?php

namespace App\Models;

use App\Models\Kost;
use App\Models\Kota;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kecamatan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function kota()
    {
        return $this->belongsTo(Kota::class);
    }

    function kost()
    {
        return $this->hasMany(Kost::class);
    }
}
