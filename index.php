<?php

require('vendor/autoload.php');

use App\StaffMember;
use Carbon\Carbon;

$data = [
    'front_end' => [
        new StaffMember('Juan Francisco', 'Design', Carbon::today()->subYears(5)),
        new StaffMember('Jovino', 'Design', Carbon::today()->subYear(1)),
    ],
    'back_end' => [
        new StaffMember('Bernardo', 'TI', Carbon::today()->subYears(12)),
        new StaffMember('Juan', 'Design', Carbon::today()->subYear(1)),
    ],
];


collect($data)->flatten()
        ->filter->isOld()
        ->each->review();
