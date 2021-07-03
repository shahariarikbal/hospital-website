<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $guarded = [];

    public function department()
    {
        return $this->belongsTo(Department::class, 'dept_id', 'id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
