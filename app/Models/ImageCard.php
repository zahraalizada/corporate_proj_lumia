<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ImageCard extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function social(): HasMany
    {
        return $this->hasMany(SocialLink::class, 'image_card_id', 'id');
    }

}
