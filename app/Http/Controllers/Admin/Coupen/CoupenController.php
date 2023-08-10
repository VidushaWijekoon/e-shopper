<?php

namespace App\Http\Controllers\Admin\Coupen;

use App\Http\Controllers\Controller;
use App\Models\Coupen;

class CoupenController extends Controller
{
    public function activate($coupen)
    {
        $coupen = Coupen::findOrFail($coupen);

        if ($coupen->approve_status == '1') {
            $coupen->active_status = '1';
            $coupen->update();
            return redirect()->back()->with('message', 'Coupen Activated');
        } else {
            return redirect()->back()->with('message', 'You Cannot Activated This Coupen Need Approved');
        }
    }

    public function dectivate($coupen)
    {
        $coupen = Coupen::findOrFail($coupen);

        $coupen->active_status = '0';
        $coupen->update();
        return redirect()->back()->with('message', 'Successfully Deactivate Coupen');
    }
}
