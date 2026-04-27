<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['name', 'expiry_date', 'reminder_days', 'user_id'];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
