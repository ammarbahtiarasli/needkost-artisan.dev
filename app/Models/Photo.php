<?php

namespace App\Models;

use App\Models\Kost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function kost()
    {
        return $this->belongsTo(Kost::class, 'kost_id');
    }
}
