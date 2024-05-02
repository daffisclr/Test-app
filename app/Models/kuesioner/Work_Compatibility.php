<?php

namespace App\Models\kuesioner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Work_Compatibility extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = "admin";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'kuesioner_work_id',
        'compatibility_type',
        'remarks',
    ];


    public function work()
    {
        return $this->belongsTo(Work::class);
    }
}
