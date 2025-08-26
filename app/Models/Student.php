<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students1';
//    protected $guarded = []; // means all fields are mass-assignable
 protected $fillable = ['name', 'email', 'age', 'city']; // allows mass assignment




}
