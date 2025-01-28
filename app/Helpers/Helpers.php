<?php

use Illuminate\Support\Facades\Storage;

function storage_url(?string $path): string
{
    if (empty($path)) {
        return '';
    }

    /** @var \Illuminate\Filesystem\FilesystemAdapter $disk */
    $disk = Storage::disk('public');

    return $disk->url($path);
}

function urlIsActive($url): string
{
    return request()->fullUrlIs($url) ? 'active' : '';
}
