<?php

namespace App\Models;

use App\Models\Kost;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function user()
    {
        return $this->belongsToMany(User::class, 'user_id');
    }

    function kost()
    {
        return $this->belongsToMany(Kost::class, 'kost_id');
    }
}
