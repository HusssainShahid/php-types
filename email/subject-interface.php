<?php

namespace jsys\types\email;

interface SubjectInterface
{
    public function value():string;
    public function __toString();
}

