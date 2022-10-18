<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }
    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }
}
