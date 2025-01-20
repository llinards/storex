<?php

namespace App\Http\Controllers;

use App\Services\FileServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FileUploadController extends Controller
{
    protected FileServices $fileServices;

    public function __construct(FileServices $fileServices)
    {
        $this->fileServices = $fileServices;
    }

    public function show(Request $files)
    {
        //        TODO: This is an array, should be handled differently
        foreach ($files->all() as $file) {
            return $this->fileServices->getFile($file);
        }
    }

    public function store(Request $data): string
    {
        $fileTypes = [
            'category_image',
            'product_images',
        ];
        foreach ($fileTypes as $fileType) {
            if ($data->hasFile($fileType)) {
                $files = $data->file($fileType);
                foreach ($files as $file) {
                    $fileName = $file->getClientOriginalName();

                    //        TODO: This is an array, should be handled differently
                    return $this->fileServices->storeFile('uploads', $file, $fileName);
                }
            }
        }

        return '';
    }

    public function destroy(Request $data): string
    {
        Log::info($data->getContent());
        $this->fileServices->destroyFile($data->getContent());

        return '';
    }
}
