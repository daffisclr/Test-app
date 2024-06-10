<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Broadcast_Company extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = "user";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'broadcast_id',
        'unique_code',
        'company_name',
        'name',
        'position',
        'email',
        'phone',
        'alumni_name',
        'alumni_program',
        'alumni_degree',
        'alumni_graduation',
        'ethics',
        'competency',
        'language',
        'tech',
        'communication',
        'teamwork',
        'development',
        'readiness',
        'remarks',
        'recommendation'
    ];


    public function broadcast()
    {
        return $this->belongsTo(Broadcast::class);
    }
}
