<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @param int $userid
 * @param int $sessionid
 * @param DateTime $updated
 * @param ?string $usertype
 */
class Role extends Model
{
    protected $table = 'role';

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
        'updated' => 'datetime',
    ];
}
