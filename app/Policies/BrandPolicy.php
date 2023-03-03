<?php

namespace App\Policies;

use App\Models\Brand;
use App\Models\Advertiser;
use Illuminate\Auth\Access\HandlesAuthorization;

class BrandPolicy
{
    use HandlesAuthorization;

    
    public function viewAny(Advertiser $advertiser)
    {
        return true;
    }

    
    public function view(Advertiser $advertiser, Brand $brand)
    {
        return $advertiser->id == $brand->advertiser_id;
    }

    
    public function create(Advertiser $advertiser)
    {
        return true;
    }

    
    public function update(Advertiser $advertiser, Brand $brand)
    {
        return $advertiser->id == $brand->advertiser_id;
    }

    
    public function delete(Advertiser $advertiser, Brand $brand)
    {
        return $advertiser->id == $brand->advertiser_id;
    }

    
    public function restore(Advertiser $advertiser, Brand $brand)
    {
        return $advertiser->id == $brand->advertiser_id;
    }

    
    public function forceDelete(Advertiser $advertiser, Brand $brand)
    {
        return $advertiser->id == $brand->advertiser_id;
    }
}
