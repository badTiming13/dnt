<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Page extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'content', 'template_id'];
    
    protected $attributes = [
        'content' => '{}',
    ];
    
    public function template(): BelongsTo
    {
        return $this->belongsTo(Template::class);
    }

}
