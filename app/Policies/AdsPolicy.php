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
        return true;
    }

    public function create(Advertiser $advertiser)
    {
        return false;
    }

    public function update(Advertiser $advertiser, Ads $ads)
    {
        return false;
    }

    public function delete(Advertiser $advertiser, Ads $ads)
    {
        return false;
    }

    public function restore(Advertiser $advertiser, Ads $ads)
    {
        return false;
    }

    public function forceDelete(Advertiser $advertiser, Ads $ads)
    {
        return false;
    }
}
