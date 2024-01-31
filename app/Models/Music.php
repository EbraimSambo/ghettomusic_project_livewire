<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Music extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'description',
        'tags',
        'cover_path',
        'music_path',
        'audio_path',
        'category',
        'artist',
        'user_id',
        'slug',
        'search'
    ];

    public function category(): HasMany
    {
        return $this->hasMany(Category::class);
    }

    
    public function artist(): HasMany
    {
        return $this->hasMany(Artist::class);
    }

    public static function boot()
    {
         parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::orderedUuid();//.'-' .now();
            $model->search = $model->title .' ' .$model->artist;
        });

    }
}
