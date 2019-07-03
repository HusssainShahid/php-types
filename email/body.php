<?php

declare(strict_types=1);

namespace jsys\types\email;


class Body implements BodyInterface
{
    private $body;

    public function __construct(string $body)
    {
         $this->body = $body;
    }

    public function value(): string
    {
        return $this->body;
    }
    public function __toString()
    {
        return $this->body;
    }
}