<?php

namespace App\Http\Controllers;

use App\Models\Partner;

/**
 * Class PartnersController.
 *
 * @package App\Http\Controllers
 */
class PartnersController extends Controller
{

    /**
     * Show.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        $partners = Partner::with(['prizes'])->where('session', config('lanparty.sessions') )->get();
        //$partners = Partner::with(['prizes'])->get();

        return view('partners',compact('partners'));
    }
}
