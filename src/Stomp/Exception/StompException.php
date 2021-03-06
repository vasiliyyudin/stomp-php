<?php

/*
 * This file is part of the Stomp package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Stomp\Exception;

use Exception;

/* vim: set expandtab tabstop=3 shiftwidth=3: */

/**
 * Base exception for all special stomp exceptions.
 *
 * @package Stomp
 */
class StompException extends Exception
{

    /**
     * Stomp server error details
     *
     * @deprecated use getMessage()
     * @return string
     */
    public function getDetails()
    {
        return $this->getMessage();
    }
}
