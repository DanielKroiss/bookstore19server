<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Author extends Model
{
    //properties können von außen gesetzt werden:
    protected $fillable =[
        'firstName', 'lastName'
    ];
    public function books() : BelongsToMany
    {
        return $this->belongsToMany(Book::class)->withTimestamps();
    }
}


