<?php


namespace App\Models;

/**
 * Class InvitationCodeGenerator.
 *
 * @package App
 */
interface InvitationCodeGenerator
{
    /**
     * @return string
     */
    public function generate();
}
