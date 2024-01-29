<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Staff extends Model implements Authenticatable
{
    use HasFactory, Notifiable, AuthenticatableTrait;

    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'password',
    ];
}
