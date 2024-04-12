<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Role extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = "role";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'rolename',
        'description',
        'valid_status',
    ];

    public function admins()
    {
        return $this->hasMany(Admin::class);
    }

    public function modules()
    {
        return $this->belongsToMany(Module::class)->withTimestamps()->withPivot(['id', 'module_id', 'role_id', 'valid', 'C', 'R', 'U', 'D', 'description']);
    }
}
