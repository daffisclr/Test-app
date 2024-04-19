<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Answer extends Model
{
    use HasFactory, Notifiable;

    protected $guard = "answer";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'question_id',
        'admin_id',
        'answer',
        'description',
        'valid_status'
    ];


    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
