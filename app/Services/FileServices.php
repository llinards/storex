<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class FileServices
{
    protected string $disk = 'public';

    public function storeFile($location, $file, $fileName = ''): string
    {
        return $fileName === ''
            ? Storage::disk($this->disk)->putFile($location, $file)
            : Storage::disk($this->disk)->putFileAs($location, $file, $fileName);
    }

    public function moveFile($from, $file, $to): string
    {
        $to .= '/'.$file;

        return Storage::disk($this->disk)->move($from, $to);
    }

    public function destroyFile($location): void
    {
        Storage::disk($this->disk)->delete($location);

        Log::info('File deleted: '.$location);
    }
}
