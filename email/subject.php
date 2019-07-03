<?php

declare(strict_types=1);

namespace jsys\types\email;


class Subject implements SubjectInterface
{
    private $subject;
    const MAX_LENGTH = 78;

    public function __construct(string $subject)
    {
        if (strlen($subject) > self::MAX_LENGTH) {
            throw new \InvalidArgumentException('Given string should not be greater then 78', 1004);
        }
        $this->subject = $subject;
    }

    public function value(): string
    {
        return $this->subject;
    }
    public function __toString()
    {
        return $this->subject;
    }
}