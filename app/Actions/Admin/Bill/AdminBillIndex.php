<?php

namespace App\Actions\Admin\Bill;

use App\Models\Bill;
use Lorisleiva\Actions\Concerns\AsAction;

class AdminBillIndex
{
    use AsAction;

    public function handle()
    {
        $bills = Bill::all();

        return view('admins.bills.list', compact('bills'));
    }
}
