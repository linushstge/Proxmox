<?php

namespace Proxmox\CustomClasses;

class IncompleteCredentials
{
    public function __construct($user, $pass)
    {
        $this->username = $user;
        $this->password = $pass;
    }
}

