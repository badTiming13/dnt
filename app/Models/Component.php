<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'view_file', 'fields'];

    protected $casts = [
        'fields' => 'array',
    ];
}
