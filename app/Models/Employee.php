<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get all of the comments for the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function overtimes()
    {
        return $this->hasMany(Overtimes::class);
    }
}
