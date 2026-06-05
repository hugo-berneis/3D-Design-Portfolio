<?php

namespace App\Models;

use App\Models\Concerns\HasTemporaryS3Url;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;
    use HasTemporaryS3Url;

    protected $fillable = [
        'title',
        'description',
        'category',
        'image',
        'model_url',
        'model_file',
        'thumbnail',
        'order',
        'rotation_x',
        'rotation_y',
        'rotation_z',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Temporary signed S3 URL for the uploaded STL model file.
     */
    protected function modelFileUrl(): Attribute
    {
        return Attribute::make(
            get: fn (): ?string => $this->model_file
                ? $this->temporaryS3Url($this->model_file)
                : null,
        );
    }
}
