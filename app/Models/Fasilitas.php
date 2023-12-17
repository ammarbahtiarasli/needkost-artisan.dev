<?php

namespace App\Models;

use App\Models\KostFasilitas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fasilitas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function kost_fasilitas()
    {
        return $this->hasMany(KostFasilitas::class);
    }
}
