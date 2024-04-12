<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Module extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = "admin";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'url',
        'icon',
        'description',
        'valid_status'
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps()->withPivot(['id', 'module_id', 'role_id', 'valid', 'C', 'R', 'U', 'D', 'description']);
    }
}
