<?php

use App\Services\FileServices;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

beforeEach(function () {
    Storage::fake('public');
    $this->fileServices = new FileServices;
});

describe('storeFile', function () {
    it('stores a file with auto-generated name', function () {
        $file = UploadedFile::fake()->image('test-image.jpg');

        $path = $this->fileServices->storeFile('uploads', $file);

        expect($path)->toStartWith('uploads/');
        Storage::disk('public')->assertExists($path);
    });

    it('stores a file with custom filename', function () {
        $file = UploadedFile::fake()->image('original.jpg');
        $customName = 'custom-name.jpg';

        $path = $this->fileServices->storeFile('uploads', $file, $customName);

        expect($path)->toBe('uploads/custom-name.jpg');
        Storage::disk('public')->assertExists('uploads/custom-name.jpg');
    });

    it('stores files in specified directory', function () {
        $file = UploadedFile::fake()->image('product.jpg');

        $path = $this->fileServices->storeFile('products', $file, 'product.jpg');

        expect($path)->toBe('products/product.jpg');
        Storage::disk('public')->assertExists('products/product.jpg');
    });
});

describe('getFile', function () {
    it('retrieves file contents', function () {
        $content = 'test file content';
        Storage::disk('public')->put('test/file.txt', $content);

        $result = $this->fileServices->getFile('test/file.txt');

        expect($result)->toBe($content);
    });
});

describe('moveFile', function () {
    it('moves a file to new location', function () {
        Storage::disk('public')->put('uploads/temp.jpg', 'image content');

        $this->fileServices->moveFile('uploads/temp.jpg', 'temp.jpg', 'products');

        Storage::disk('public')->assertMissing('uploads/temp.jpg');
        Storage::disk('public')->assertExists('products/temp.jpg');
    });
});

describe('destroyFile', function () {
    it('deletes a file from storage', function () {
        Storage::disk('public')->put('uploads/to-delete.jpg', 'content');
        Log::shouldReceive('info')->once()->with('File deleted: uploads/to-delete.jpg');

        $this->fileServices->destroyFile('uploads/to-delete.jpg');

        Storage::disk('public')->assertMissing('uploads/to-delete.jpg');
    });

    it('logs the deletion', function () {
        Storage::disk('public')->put('test/file.jpg', 'content');

        Log::shouldReceive('info')
            ->once()
            ->with('File deleted: test/file.jpg');

        $this->fileServices->destroyFile('test/file.jpg');
    });
});

describe('storeMedia', function () {
    it('moves multiple files to destination folder', function () {
        Storage::disk('public')->put('uploads/image1.jpg', 'content1');
        Storage::disk('public')->put('uploads/image2.jpg', 'content2');

        $data = ['uploads/image1.jpg', 'uploads/image2.jpg'];

        $this->fileServices->storeMedia($data, 'products');

        Storage::disk('public')->assertExists('products/image1.jpg');
        Storage::disk('public')->assertExists('products/image2.jpg');
        Storage::disk('public')->assertMissing('uploads/image1.jpg');
        Storage::disk('public')->assertMissing('uploads/image2.jpg');
    });

    it('skips null or empty values in array', function () {
        Storage::disk('public')->put('uploads/valid.jpg', 'content');

        $data = ['uploads/valid.jpg', null, '', 'uploads/valid.jpg'];

        $this->fileServices->storeMedia($data, 'products');

        Storage::disk('public')->assertExists('products/valid.jpg');
    });
});
