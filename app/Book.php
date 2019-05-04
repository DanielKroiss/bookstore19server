<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
//    protected $table = 'name_der_tagelle';
//    protected $primaryKey = 'name_der_PK_col';
    protected $fillable = ['isbn', 'title', 'subtitle', 'published', 'rating', 'description', 'user_id', 'price'];
    //QueryScopes
    public function scopeFavourite($query){
        return $query->where('rating', '>=', 8);
    }

    public function images() : HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function authors(): BelongsToMany
    {
        return $this->belongsToMany(Author::class)->withTimestamps();
    }

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class)->withTimestamps();
    }


}
