<?php

namespace App\Services;

use App\Http\Requests\StoreFileRequest;
use App\Models\File;
use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\Storage;

class FileService
{
    static function uploadFile(StoreFileRequest $request, string $key, string $path, string $collection = 'other')
    {

        Gate::authorize('upload-files', ["request" => $request]);

        if (!$request->hasFile($key))
            return NULL;

        $file = $request->file($key);
        $name = $file->hashName();

        $upload = Storage::disk('public')->put($path . DIRECTORY_SEPARATOR . "{$name}", $file);

        $newFile = File::query()->create(
            attributes: [
                'name' => "{$name}",
                'alt' => $request->alt || NULL,
                'title' => $request->title || NULL,
                'file_name' => $file->getClientOriginalName(),
                'mime_type' => $file->getClientMimeType(),
                'path' => $path . DIRECTORY_SEPARATOR . "{$name}",
                'disk' => 'public',
                'file_hash' => hash_file(
                    config('app.uploads.hash'),
                    storage_path(
                        path: $path . DIRECTORY_SEPARATOR . "{$name}",
                    ),
                ),
                'collection' => $collection,
                'size' => $file->getSize(),
            ],
        );

        return [
            "file" => $newFile,
            "upload" => $upload
        ];
    }

    static function upload(
        $formElm,
        string $path,
        string $collection = 'other'
    ): ?array {
        $file = $formElm;
        $name = $file->hashName();

        $upload = Storage::disk('public')->move($path . DIRECTORY_SEPARATOR . "{$name}", $file);

        $newFile = File::query()->create(
            attributes: [
                'name' => "{$name}",
                'alt' => NULL,
                'title' => NULL,
                'file_name' => $file->getClientOriginalName(),
                'mime_type' => $file->getClientMimeType(),
                'path' => $path . DIRECTORY_SEPARATOR . "{$name}",
                'disk' => 'public',
                'file_hash' => hash_file(
                    config('app.uploads.hash'),
                    storage_path(
                        path: $path . DIRECTORY_SEPARATOR . "{$name}",
                    ),
                ),
                'collection' => $collection,
                'size' => $file->getSize(),
            ],
        );

        return [
            "file" => $newFile,
            "upload" => $upload
        ];
    }
}
