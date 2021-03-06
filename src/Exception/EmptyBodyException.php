<?php

namespace App\Exception;

use Throwable;

/**
 * Class EmptyBodyException
 * @package App\Exception
 */
class EmptyBodyException extends \Exception
{
    /**
     * @var string
     */
    protected $message = 'The body of the POST/PUT method cannot be empty!';

    /**
     * EmptyBodyException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($this->message, $code, $previous);
    }
}