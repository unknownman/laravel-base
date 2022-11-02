<?php

namespace App\Services;

use App\Http\Requests\StoreSampleRequest;
use App\Models\Sample;

class SampleService
{
    static function store(StoreSampleRequest $request)
    {
        $sample = new Sample();
        $sample->title = $request->title;
        $sample->description = $request->description;
        $sample->image_id = ($request->hasFile('image'))
            ? FileService::uploadFile($request, 'image', 'sample/images', 'sample-images')->id
            : NULL;
        $sample->save();

        return $sample;
    }
}
