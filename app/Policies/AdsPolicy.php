<?php

namespace App\Policies;

use App\Models\Ads;
use App\Models\Advertiser;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdsPolicy
{
    use HandlesAuthorization;

    public function viewAny(Advertiser $advertiser)
    {
        return true;
    }

    public function view(Advertiser $advertiser, Ads $ads)
    {
        return $advertiser->id == $ads->brand->advertiser_id;
    }

    public function create(Advertiser $advertiser)
    {
        return true;
    }

    public function update(Advertiser $advertiser, Ads $ads)
    {
        return $advertiser->id == $ads->brand->advertiser_id;
    }

    public function delete(Advertiser $advertiser, Ads $ads)
    {
        return $advertiser->id == $ads->brand->advertiser_id;
    }

    public function restore(Advertiser $advertiser, Ads $ads)
    {
        return $advertiser->id == $ads->brand->advertiser_id;
    }

    public function forceDelete(Advertiser $advertiser, Ads $ads)
    {
        return $advertiser->id == $ads->brand->advertiser_id;
    }
}
