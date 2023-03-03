<?php

namespace App\Policies;

use App\Models\Advertiser;
use App\Models\Watch;
use Illuminate\Auth\Access\HandlesAuthorization;

class WatchPolicy
{
    use HandlesAuthorization;

   
    public function viewAny(Advertiser $user)
    {
        return true;
    }

   
    public function view(Advertiser $user, Watch $watch)
    {
        return true;
    }

    
    public function create(Advertiser $user)
    {
        //
    }

    
    public function update(Advertiser $user, Watch $watch)
    {
        //
    }

    
    public function delete(Advertiser $user, Watch $watch)
    {
        //
    }

    
    public function restore(Advertiser $user, Watch $watch)
    {
        //
    }

    
    public function forceDelete(Advertiser $user, Watch $watch)
    {
        //
    }
}
