<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Village extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = "admin";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'id',
        'district_id',
        'village_name'
    ];

    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
