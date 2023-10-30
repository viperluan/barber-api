<?php

namespace App\Models;

use App\Casts\BirthdayCast;
use App\Casts\TimestampsCast;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, HasUuids, Notifiable;

    protected $casts = [
        'password' => 'hashed',
        'created_at' => TimestampsCast::class,
        'updated_at' => TimestampsCast::class,
        'birthday' => BirthdayCast::class
    ];

    protected $hidden = [
        'password'
    ];

    protected $guarded = [];
}
