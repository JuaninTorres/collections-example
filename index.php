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

function array_flatten($arr, &$flattened = [])
{
    ;
    foreach($arr as $key => $val)
    {
        if(is_array($val)){
            array_flatten($val, $flattened);

            continue;
        } 
        
        $flattened[] = $val;
        
    }

    return $flattened;
}

$staff = array_flatten($data);

$olders = [];


foreach($staff as $member)
{
    $beOlder = Carbon::today()->subYears(2);

    if($member->entry->lt($beOlder)){
        $olders[] = $member;
    }
}

foreach($olders as $member)
{
    $member->review();
}
