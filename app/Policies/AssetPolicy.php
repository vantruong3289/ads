<?php

namespace App\Policies;

use App\Models\Asset;
use App\Models\Advertiser;
use Illuminate\Auth\Access\HandlesAuthorization;

class AssetPolicy
{
    use HandlesAuthorization;

    
    public function viewAny(Advertiser $user)
    {
        return true;
    }

    
    public function view(Advertiser $user, Asset $asset)
    {
        return true;
    }

    
    public function create(Advertiser $user)
    {
        //
    }

    public function update(Advertiser $user, Asset $asset)
    {
        //
    }

    public function delete(Advertiser $user, Asset $asset)
    {
        //
    }

    
    public function restore(Advertiser $user, Asset $asset)
    {
        //
    }

   
    public function forceDelete(Advertiser $user, Asset $asset)
    {
        //
    }
}
