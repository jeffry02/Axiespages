<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Collection extends Model
{
    use HasFactory;

    protected  $fillable = [
        'name',
        'user_id',
    ];

    function items():hasMany {
        return  $this->hasMany(Item::class);
    }

    function user():BelongsTo {
        return $this->belongsTo(User::class);
    }

    function likes():MorphMany {
        return $this->morphMany(Like::class, 'likeable');
    }
}
