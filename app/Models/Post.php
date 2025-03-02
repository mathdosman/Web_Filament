<?php

namespace App\Models;

use Filament\Forms\Components\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    protected $fillable =[
        'title',
        'slug',
        'description',
        'thumbnail',
        'body',
        'active',
        'category_id'
    ];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    //add observer
    protected static function booted()
    {
        static::deleted(function ($post) {
            if ($post->thumbnail) { // Corrected from 'image' to 'thumbnail'
                Storage::disk('public')->delete($post->thumbnail);
            }
        });
    } 
}
