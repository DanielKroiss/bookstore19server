<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relation\BelongTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Order extends Model
{
    protected $fillable = [
        'totalprice', 'state', 'comment', 'user_id'
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function books() : BelongsToMany
    {
        return $this->belongsToMany(Book::class)->withTimestamps()->withPivot('curBookPrice');
    }
    public function orderlogs() : HasMany{
        return $this->hasMany(Orderlog::class);
    }
}
