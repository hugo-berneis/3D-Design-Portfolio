<?php

namespace App\Models\Concerns;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

trait HasTemporaryS3Url
{
    /**
     * Generate a long-lived, browser-cacheable signed S3 URL for the given path.
     *
     * The signed URL is memoized so an identical string is emitted across renders.
     * A stable URL plus a long `Cache-Control` header lets the browser cache the
     * asset on disk and reuse it (e.g. when switching tabs) instead of
     * re-downloading it on every page load.
     */
    protected function temporaryS3Url(string $path): string
    {
        return Cache::remember(
            'asset-url:'.md5($path),
            now()->addDays(6),
            fn (): string => Storage::disk('s3')->temporaryUrl(
                $path,
                now()->addDays(7),
                ['ResponseCacheControl' => 'public, max-age=604800, immutable'],
            ),
        );
    }
}
