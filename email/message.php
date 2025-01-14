<?php

declare(strict_types=1);

namespace jsys\types\email;


class Message implements MessageInterface
{
    private $message;

    public function __construct(string $message)
    {
         $this->message = $message;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}