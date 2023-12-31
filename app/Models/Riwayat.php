<?php

namespace App\Models;

use App\Models\Kost;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Riwayat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function kost()
    {
        return $this->belongsTo(Kost::class, 'kost_id');
    }
}
