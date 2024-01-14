<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

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

    public $incrementing = false;
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

    public function participants()
    {
        return $this->hasMany(
            Role::class,
            'sessionid',
            'id'
        );
    }

    // TODO: maybe it's possible to connect users directly via roles, but I need more time to figure that out

    // public function deployments(): HasManyThrough
    // {
    //     return $this->hasManyThrough(
    //         User::class,
    //         Role::class,
    //         'sessionid', // Foreign key on the roles table...
    //         'id', // Foreign key on the user table...
    //         'id', // Local key on the session table...
    //         'id' // Local key on the role table...
    //     );
    // }
}
