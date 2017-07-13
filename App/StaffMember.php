<?php

namespace App;

use Carbon\Carbon;

class StaffMember
{
    public function __construct($name, $role, Carbon $entry)
    {
        $this->name = $name;
        $this->role = $role;
        $this->entry = $entry;
    }
}