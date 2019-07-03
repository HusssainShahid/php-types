<?php

declare(strict_types=1);

namespace jsys\types\email;


class Mail
{
    private $to = [];
    private $cc = [];
    private $bcc = [];
    private $subject = [];
    private $body = [];

    public function __construct(RecipientInterface $to, RecipientInterface $cc, RecipientInterface $bcc, Subject $subject, Body $body)
    {
        $this->to = $to->getRecipient();
        $this->cc = $cc->getRecipient();
        $this->bcc = $bcc->getRecipient();
        $this->subject = $subject->value();
        $this->body = $body->value();
    }

    /**
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }

    /**
     * @return string
     */
    public function getCc(): string
    {
        return $this->cc;
    }

    /**
     * @return string
     */
    public function getBcc(): string
    {
        return $this->bcc;
    }

    /**
     * @return string
     */
    public function value(): string
    {
        return $this->body;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }
}