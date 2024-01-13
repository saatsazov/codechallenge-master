<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @param string $id
 * @param string $name
 * 
 * @param string $session_key
 * 
 * @param DateTime $session_start
 * @param ?DateTime $session_end
 * 
 * @param ?string $session_type
 * @param ?string $session_subtype
 * 
 * @param string $description
 * 
 * @param bool $active
 */
class Session extends Model
{
    protected $table = 'session';

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
        'session_start' => 'datetime',
        'session_end' => 'datetime',
    ];

    protected function getActiveAttribute(string $value): bool
    {
        return $value === 'Y';
    }

    protected function setActiveAttribute(bool $value)
    {
        $this->attributes['active'] = $value ? 'Y' : 'N';
    }
}
