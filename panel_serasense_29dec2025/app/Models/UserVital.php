<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserVital extends Model
{
    protected $table = 'user_vitals';

    protected $fillable = [
        'user_id',
        'blood_pressure',
        'heart_rate',
        'sweat_rate',
        'sleep_rate'
    ];

    /**
     * Relationship: UserVital belongs to User
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
