<?php

namespace App;

class StaffMember
{
    public function __construct($name, $role, $entry)
    {
        $this->name = $name;
        $this->role = $role;
        $this->entry = $entry;
    }

    public function review()
    {
        dump('Revisando: ' . $this->name);
    }
}