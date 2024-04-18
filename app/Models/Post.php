<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUIDs;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory, UUIDs;

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
