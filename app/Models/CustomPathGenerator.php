<?php
namespace App\Models;

use App\Models\Place;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\DefaultPathGenerator;

class CustomPathGenerator extends DefaultPathGenerator
{
    protected function getBasePath(Media $media): string
    {
        $prefix = config('media-library.prefix', '');
        $id = $media->getKey();

        $model = $media->model;
        if ($model instanceof Consumer) {
            $id = $model->_id . '/' . $media->collection_name;
        }

        if ($model instanceof Advertiser) {
            $id = $model->place->_id . '/' . $media->collection_name;
        }

        if ($prefix !== '') {
            return $prefix . '/' . $id;
        }

        return $id;

    }
}
