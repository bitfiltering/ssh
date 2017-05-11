<?php
/**
 * @copyright 2017 Daniel Hirtzbruch / Fastbolt Schraubengroßhandels GmbH (http://www.fastbolt.com)
 * @package   Fastbolt\SSH
 */

namespace Fastbolt\SSH;

use Throwable;

/**
 * Class SSHException
 */
class SSHException extends \Exception
{

    /**
     * SSHException constructor.
     *
     * @param string         $message
     * @param int            $code
     * @param Throwable|null $previous
     */
    public function __construct($message = '', $code = 0, Throwable $previous = null)
    {
        parent::__construct('SSHException: ' . $message, $code, $previous);
    }
}
