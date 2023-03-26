<?php

namespace App\Observers;

use App\Models\Ads;
use Session;

class AdsObserver
{
    /**
     * Handle the Ads "created" event.
     *
     * @param  \App\Models\Ads  $ads
     * @return void
     */
    public function created(Ads $ads)
    {
        //
    }

    /**
     * Handle the Ads "updated" event.
     *
     * @param  \App\Models\Ads  $ads
     * @return void
     */
    public function updated(Ads $ads)
    {
        Session::flash('alert-updated', (object) ['title' => 'Ads', 'body' => 'Success !']);
    }

    /**
     * Handle the Ads "deleted" event.
     *
     * @param  \App\Models\Ads  $ads
     * @return void
     */
    public function deleted(Ads $ads)
    {
        //
    }

    /**
     * Handle the Ads "restored" event.
     *
     * @param  \App\Models\Ads  $ads
     * @return void
     */
    public function restored(Ads $ads)
    {
        //
    }

    /**
     * Handle the Ads "force deleted" event.
     *
     * @param  \App\Models\Ads  $ads
     * @return void
     */
    public function forceDeleted(Ads $ads)
    {
        //
    }
}
