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

    /**
     * @return bool
     */
    public function isOld()
    {
        $beOlder = Carbon::today()->subYears(2);

        return $this->entry->lt($beOlder);
    }

    
    public function review()
    {
        dump('Revisando: ' . $this->name);
    }
}