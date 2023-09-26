<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videopodcast extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'video'];
}
