<?php

namespace jsys\types\email;

interface NameInterface
{
    public function getName():string;
    public function __toString();
}