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
        return true;
    }

    
    public function create(Advertiser $advertiser)
    {
        return false;
    }

    
    public function update(Advertiser $advertiser, Brand $brand)
    {
        return false;
    }

    
    public function delete(Advertiser $advertiser, Brand $brand)
    {
        return false;
    }

    
    public function restore(Advertiser $advertiser, Brand $brand)
    {
        return false;
    }

    
    public function forceDelete(Advertiser $advertiser, Brand $brand)
    {
        return false;
    }
}
