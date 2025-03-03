<?php

namespace App\Http\Controllers;

use App\Models\Prize;

/**
 * Class AvailablePrizesController
 *
 * @package App\Http\Controllers
 */
class AvailablePrizesController extends Controller
{
    /**
     * Index.
     *
     * @return mixed
     */
    public function index()
    {
        return Prize::available()->get();
    }
}
