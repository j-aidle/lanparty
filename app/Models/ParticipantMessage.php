<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ParticipantMessage
 * @package App
 */
class ParticipantMessage extends Model
{
    protected $guarded = [];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function recipients()
    {
        return $this->event->users()->pluck('email');
    }

    public function withChunckedRecipients( $callback)
    {
        $this->recipients()->chunk(20, function($recipients) use ($callback) {
            $callback($recipients);
        });
    }
}
