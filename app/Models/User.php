<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // Define fillable attributes
    protected $fillable = [
        'name', 'phone', 'email', 'gender', 'bday', 'address', 'password',
    ]; 
}
 