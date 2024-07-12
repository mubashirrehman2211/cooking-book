<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recipebytitles extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'categoryName', 'instruction', 'image' ];
}
