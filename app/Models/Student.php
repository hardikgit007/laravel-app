<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    Protected $fillable = ['name','email', 'address'];

    public function customs()
    {
        return $this->hasMany(customs::class);
    }
}
