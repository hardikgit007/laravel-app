<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custom extends Model
{
    use HasFactory;
    Protected $fillable = ['name','email', 'address'];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

}
