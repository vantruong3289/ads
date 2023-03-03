<?php

namespace App\Policies;

use App\Models\Consumer;
use App\Models\Advertiser;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConsumerPolicy
{
    use HandlesAuthorization;

    
    public function viewAny(Advertiser $advertiser)
    {
        return true;
    }

    
    public function view(Advertiser $advertiser, Consumer $consumer)
    {
        return false;
    }

    
    public function create(Advertiser $advertiser)
    {
        return false;
    }

   
    public function update(Advertiser $advertiser, Consumer $consumer)
    {
        return false;
    }

    
    public function delete(Advertiser $advertiser, Consumer $consumer)
    {
        return false;
    }

    
    public function restore(Advertiser $advertiser, Consumer $consumer)
    {
        return false;
    }

    
    public function forceDelete(Advertiser $advertiser, Consumer $consumer)
    {
        return false;
    }
}
