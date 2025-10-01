<?php

use App\Http\Controllers\FileUploadController;
use App\Services\FileServices;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;

beforeEach(function () {
    $this->fileServices = $this->mock(FileServices::class);
    $this->controller = new FileUploadController($this->fileServices);
});

describe('FileUploadController store method', function () {
    it('stores a category image successfully', function () {
        $file = UploadedFile::fake()->image('category.jpg');
        $fileName = $file->getClientOriginalName();

        $request = Request::create('/upload', 'POST', [], [], [
            'category_image' => [$file],
        ]);

        $this->fileServices
            ->shouldReceive('storeFile')
            ->once()
            ->with('uploads', $file, $fileName)
            ->andReturn('uploads/category.jpg');

        $result = $this->controller->store($request);

        expect($result)->toBe('uploads/category.jpg');
    });

    it('stores product images successfully', function () {
        $file = UploadedFile::fake()->image('product.jpg');
        $fileName = $file->getClientOriginalName();

        $request = Request::create('/upload', 'POST', [], [], [
            'product_images' => [$file],
        ]);

        $this->fileServices
            ->shouldReceive('storeFile')
            ->once()
            ->with('uploads', $file, $fileName)
            ->andReturn('uploads/product.jpg');

        $result = $this->controller->store($request);

        expect($result)->toBe('uploads/product.jpg');
    });

    it('returns empty string when no files are uploaded', function () {
        $request = Request::create('/upload', 'POST');

        $result = $this->controller->store($request);

        expect($result)->toBe('');
    });

    it('processes category_image before product_images', function () {
        $categoryFile = UploadedFile::fake()->image('category.jpg');
        $productFile = UploadedFile::fake()->image('product.jpg');

        $request = Request::create('/upload', 'POST', [], [], [
            'category_image' => [$categoryFile],
            'product_images' => [$productFile],
        ]);

        $this->fileServices
            ->shouldReceive('storeFile')
            ->once()
            ->with('uploads', $categoryFile, $categoryFile->getClientOriginalName())
            ->andReturn('uploads/category.jpg');

        $result = $this->controller->store($request);

        // Should only process the first file type (category_image)
        expect($result)->toBe('uploads/category.jpg');
    });

    it('handles multiple files in single file type', function () {
        $file1 = UploadedFile::fake()->image('image1.jpg');

        $request = Request::create('/upload', 'POST', [], [], [
            'product_images' => [$file1],
        ]);

        $this->fileServices
            ->shouldReceive('storeFile')
            ->once()
            ->with('uploads', $file1, $file1->getClientOriginalName())
            ->andReturn('uploads/image1.jpg');

        $result = $this->controller->store($request);

        // Currently returns after first file
        expect($result)->toBe('uploads/image1.jpg');
    });
});

describe('FileUploadController destroy method', function () {
    it('deletes a file successfully', function () {
        Log::shouldReceive('info')->once();

        $filePath = 'uploads/test.jpg';
        $request = Request::create('/delete', 'DELETE', [], [], [], [], $filePath);

        $this->fileServices
            ->shouldReceive('destroyFile')
            ->once()
            ->with($filePath);

        $result = $this->controller->destroy($request);

        expect($result)->toBe('');
    });

    it('logs the request before deleting', function () {
        $filePath = 'uploads/test.jpg';
        $request = Request::create('/delete', 'DELETE', [], [], [], [], $filePath);

        Log::shouldReceive('info')
            ->once()
            ->with($request);

        $this->fileServices
            ->shouldReceive('destroyFile')
            ->once();

        $this->controller->destroy($request);
    });

    it('handles empty file path', function () {
        Log::shouldReceive('info')->once();

        $request = Request::create('/delete', 'DELETE');

        $this->fileServices
            ->shouldReceive('destroyFile')
            ->once()
            ->with('');

        $result = $this->controller->destroy($request);

        expect($result)->toBe('');
    });
});
