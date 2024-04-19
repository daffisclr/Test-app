<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Question extends Model
{
    use HasFactory, Notifiable;

    protected $guard = "question";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'question_label',
        'input_name',
        'type',
        'step',
        'description',
        'valid_status',
        'rules'
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
