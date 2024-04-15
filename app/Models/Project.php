<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{

        protected $fillable = [
        'name',
        'description',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($project) {
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
