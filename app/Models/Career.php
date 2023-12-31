<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'position', 'phone_number', 'cover_letter', 'cv', 'privacy_policy'];
            
}
