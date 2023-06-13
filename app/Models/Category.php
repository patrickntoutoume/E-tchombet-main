<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function getCoverAttribute($value) {
        return  is_null($value) ? "https://ui-avatars.com/api/?name=" . $this->title : asset($value);
     }
}
