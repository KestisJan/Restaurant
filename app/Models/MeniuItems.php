<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeniuItems extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo('meniu', 'category_id');
    }
}
