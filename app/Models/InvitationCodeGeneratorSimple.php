<?php

namespace App\Models;

/**
 * Class InvitationCodeGeneratorSimple
 *
 * @package App
 */
class InvitationCodeGeneratorSimple implements InvitationCodeGenerator
{
    /**
     * @return string
     */
    public function generate()
    {
        return str_random(50);
    }
}
