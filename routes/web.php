<?php

use App\Http\Controllers\GroupAvatarController;
use App\Http\Controllers\InvitationsController;
use App\Http\Controllers\ManageParticipantsController;
use App\Http\Controllers\ParticipantMessagesController;
use App\Http\Controllers\ParticipantsHomePageController;
use App\Http\Controllers\PartnersController as Partners;
use App\Http\Controllers\Web\ImageEventController;
use App\Http\Controllers\Web\PartnerAvatarController;
use App\Http\Controllers\Web\PartnersController;
use App\Http\Controllers\Web\PrizesController;
use App\Http\Controllers\SorteigController;
use App\Http\Controllers\Web\CsrfTokenController;
use App\Http\Controllers\Web\EventsController;
use App\Http\Controllers\Web\ManagersController;

use App\Http\Controllers\PrizesController as Premis;
use App\Http\Controllers\Web\UsersController;
use App\Http\Controllers\WelcomeController;

use App\Http\Controllers\CaptureTheFlagController;

Route::get('/condicions', function () {
    return redirect('https://docs.google.com/document/d/1gQko2U_orGoViJyIqL9jW9mxe68-8fbuNee9E3B68f8');
});

Route::get('/programa', function () {
    return redirect('https://docs.google.com/document/d/1GxdZIBS1mg_ANeOVt7tW0AJxPVyM__5uFNdSglE2NoA/edit');
});

Route::get('/', '\\' . WelcomeController::class . '@index');

Route::get('/premis', '\\' . Premis::class . '@index');
Route::get('/colaboradors', '\\' . Partners::class . '@show');
Route::get('/partners', '\\' . Partners::class . '@show');

Route::get('/ctf', '\\' . CaptureTheFlagController::class . '@show');
Route::get('/ctfGroup/{id}', '\\' . CaptureTheFlagController::class . '@group');
Route::post('/ctfSubmit', '\\' . CaptureTheFlagController::class . '@submit');

Auth::routes();

// CSRF TOKEN
Route::get('/csrftoken','\\'. CsrfTokenController::class . '@show');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', '\\' . ParticipantsHomePageController::class . '@index');
    Route::get('/manage/participants', '\\' . ManageParticipantsController::class. '@index')
        ->name('manage.participants');

    Route::get('/manage/events', '\\' . EventsController::class . '@index');
    Route::post('/image/event', '\\' . ImageEventController::class . '@store');
    Route::get('/image/event/{id}', '\\' . ImageEventController::class . '@show');

    Route::get('/manage/prizes/','\\'. PrizesController::class.'@index');

    Route::post('/manage/events/{event}/messages', '\\' .ParticipantMessagesController::class . '@store')
        ->name('manage.event-messages.store');

    Route::get('/manage/invitations/{code}', '\\' . InvitationsController::class . '@show')
        ->name('manage.invitations.show');

    Route::get('/group/{group}/avatar', '\\' . GroupAvatarController::class . '@show');

    Route::post('/group/{group}/avatar','\\' . GroupAvatarController::class . '@store');

    // Sorteig
    Route::get('/manage/sorteig', '\\' . SorteigController::class . '@index')
        ->name('manage.sorteig');

    Route::get('/manage/managers', '\\' . ManagersController::class . '@index');
    Route::get('/manage/partners', '\\' . PartnersController::class . '@index');
  Route::post('/avatar/partner', '\\' . PartnerAvatarController::class . '@store');
  Route::get('/avatar/partner/{id}', '\\' . PartnerAvatarController::class . '@show');

    Route::get('/manage/users', '\\' . UsersController::class . '@index');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
