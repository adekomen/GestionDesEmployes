<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public function employers(){
        return $this->hasMany(Employer::class, 'department_id', 'id');
    }
}
