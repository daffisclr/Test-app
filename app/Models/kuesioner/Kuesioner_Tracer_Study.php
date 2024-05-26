<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Kuesioner_Tracer_Study extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = "user";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'identity_id',
        'alumni_status',
        'university_payment_source',
        'lecture_method',
        'demo_method',
        'project_method',
        'internship_method',
        'practical_method',
        'field_method',
        'discussion_method',
    ];


    public function identity()
    {
        return $this->belongsTo(Kuesioner_Identitas::class);
    }
}
