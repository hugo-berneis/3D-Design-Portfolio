<?php

namespace App\Models;

use App\Models\Concerns\HasTemporaryS3Url;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasTemporaryS3Url;

    protected $fillable = ['title', 'image_path', 'description', 'order'];

    /**
     * Temporary signed S3 URL for the picture file.
     */
    protected function imageUrl(): Attribute
    {
        return Attribute::make(
            get: fn (): ?string => $this->image_path
                ? $this->temporaryS3Url($this->image_path)
                : null,
        );
    }
}
