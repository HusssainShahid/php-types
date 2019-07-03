<?php

namespace jsys\types\email;

interface AddressInterface
{

    public function value():string;
    public function __toString();
}

?>