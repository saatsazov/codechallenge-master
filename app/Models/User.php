<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @param int $id
 * @param string $username
 * @param DateTime $joined
 * @param ?string $name
 * @param ?string $email
 * @param ?string $url
 * @param string $about
 * @param ?string $avatar
 */
class User extends Authenticatable
{
    // todo: why I can't use string here because of inheritance
    protected $table = 'user';

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'joined' => 'datetime',
    ];
}
