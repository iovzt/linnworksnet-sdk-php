<?php

namespace Linnworks\exceptions;

use Exception;
use Throwable;

/**
 * BadResponseException class.
 *
 * @author Iskryzhytskyi Oleksandr <oleksandr.iskryzhytskyi@gmail.com>
 */
class BadResponseException extends Exception
{

    /**
     * @var string
     */
    public $response;

    /**
     * @param string $response
     * @param string $message
     * @param int $code
     * @param Throwable $previous
     */
    public function __construct($response, $message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->response = $response;
    }

}
