<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'detail',
        'image_path',
        'updated_at',
        'created_at'
    ];
}
