<?php

namespace App\Policies;

use App\Models\Advertiser;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdvertiserPolicy
{
    use HandlesAuthorization;

    
    public function viewAny(Advertiser $user)
    {
        return true;
    }
    
    public function view(Advertiser $user, Advertiser $advertiser)
    {
        return $user->id == $advertiser->id;
    }

    
    public function create(Advertiser $user)
    {
        return true;
    }

    
    public function update(Advertiser $user, Advertiser $advertiser)
    {
        return $user->id == $advertiser->id;
    }

    
    public function delete(Advertiser $user, Advertiser $advertiser)
    {
        return $user->id == $advertiser->id;
    }

    
    public function restore(Advertiser $user, Advertiser $advertiser)
    {
        return $user->id == $advertiser->id;
    }

    
    public function forceDelete(Advertiser $user, Advertiser $advertiser)
    {
        return $user->id == $advertiser->id;
    }
}
