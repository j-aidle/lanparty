<?php

namespace App\Http\Controllers;

use App\Models\Invitation;

/**
 * Class InvitationsController.
 *
 * @package App\Http\Controllers
 */
class InvitationsController extends Controller
{
    /**
     * Show Invitation.
     *
     * @param $code
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($code)
    {
        $invitation = Invitation::findByCode($code);

        abort_if($invitation->hasBeenUsed(), 404, 'La invitació ja ha estat utilitzada');

        $invitation->use();

        return redirect()->route('manage.participants')
            ->with('status','Ok! Has utilitzat la teva invitació. Ara ets un usuari amb rol Manager.');
    }
}
