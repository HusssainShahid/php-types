<?php

namespace jsys\types\email;

interface BodyInterface
{
    public function value():string;
    public function __toString();
}