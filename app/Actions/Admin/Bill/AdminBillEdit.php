<?php

namespace App\Actions\Admin\Bill;

use App\Models\Bill;
use Lorisleiva\Actions\Concerns\AsAction;

class AdminBillEdit
{
    use AsAction;

    public function handle(Bill $bill)
    {
        return view('admins.bills.edit', compact('bill'));
    }
}
