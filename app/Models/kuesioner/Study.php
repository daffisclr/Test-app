<?php

namespace App\Models\kuesioner;

use App\Models\Kuesioner_Tracer_Study;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Study extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = "admin";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'tracer_study_id',
        'location',
        'payment_type',
        'start_date',
        'university_name',
        'major',
        'remarks',
    ];


    public function tracer_study()
    {
        return $this->belongsTo(Kuesioner_Tracer_Study::class);
    }
}
