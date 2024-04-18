<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Traits\UUIDs;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, UUIDs;

    public function userlist()
    {
        return $this->belongsTo(UserList::class, 'list_id');
    }
}
