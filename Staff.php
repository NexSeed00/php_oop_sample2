<?php

class Staff
{
    public $name;
    public $role;

    public function __construct($name, $role)
    {
        $this->name = $name;
        $this->role = $role;
    }
}
