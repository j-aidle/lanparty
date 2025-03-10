<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\ManagePartipantsRequest;
use App\Http\Resources\EventResourceForHomePage;
use App\Http\Resources\NumberWithUserResource;
use App\Models\Number;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/**
 * Class ManageParticipantsController.
 *
 * @package App\Http\Controllers
 */
class ManageParticipantsController extends Controller
{
    /**
     * Manage participants.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ManagePartipantsRequest $request)
    {
        $events = collect(EventResourceForHomePage::collection(Event::published()->get())->resolve());
        $users = map_collection(User::with(['tickets','groups','groups.events','events','roles','numbers'])->withCount('tickets')->get());

        $numbers = map_collection(Number::with(['user'])->get());

        $tickets = Ticket::tickets();

        return view('manage.participants', [
            'user' => Auth::user(),
            'users' => $users,
            'numbers' => $numbers,
            'tickets' => $tickets,
            'events' => $events,
        ]);
    }
}
