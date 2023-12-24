<?php

namespace App\Models;

use App\Models\Kost;
use App\Models\Fasilitas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KostFasilitas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kost()
    {
        return $this->belongsTo(Kost::class, 'kost_id');
    }

    public function fasilitas()
    {
        return $this->belongsTo(Fasilitas::class, 'fasilitas_id');
    }
}
