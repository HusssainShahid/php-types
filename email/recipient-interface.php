<?php

namespace jsys\types\email;

interface RecipientInterface
{
    public function getRecipient():string;
    public function __toString();
}