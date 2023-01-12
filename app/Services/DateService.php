<?php

namespace App\Services;

use Carbon\Carbon;

class DateService
{
    public function convertDate($date)
    {
        $date = Carbon::parse($date);
        $date = $date->format('d-m-Y H:i:s');
        return $date;
    }
}
