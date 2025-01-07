<?php

namespace App\Http\Controllers;

use App\Services\FileServices;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    protected FileServices $fileServices;

    public function __construct(FileServices $fileServices)
    {
        $this->fileServices = $fileServices;
    }

    public function store(Request $data): string
    {
        $fileTypes = [
            'category_image',
        ];
        foreach ($fileTypes as $fileType) {
            if ($data->hasFile($fileType)) {
                $files = $data->file($fileType);
                foreach ($files as $file) {
                    $fileName = $file->getClientOriginalName();

                    return $this->fileServices->storeFile('uploads', $file, $fileName);
                }
            }
        }

        return '';
    }

    public function destroy(Request $data): string
    {
        $this->fileServices->destroyFile($data->getContent());

        return '';
    }
}
