<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Prizes\PrizesIndex;
use App\Models\Prize;
use App\Models\Partner;
use App\Models\User;


/**
 * Class PrizesController
 *
 * @package App\Http\Controllers
 */
class PrizesController extends Controller
{

    /**
     * List.
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index(PrizesIndex $request)
    {
      //$prizes = Prize::with(['partner','user','number','number.user'])->get();
      $prizes = Prize::prizes();
      $partners = Partner::all();
      $users = User::all();

        $uri = '/api/v1/prizes/';
      return view('manage.prizes.index',compact('prizes','uri','partners','users'));

    }
}
