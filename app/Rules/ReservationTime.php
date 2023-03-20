<?php

namespace App\Rules;


use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class ReservationTime implements Rule
{
    public function passes($attribute, $value): bool
    {
        $minDate = now()->addDay();
        $maxDate = now()->addWeek();

        $reservationDate = Carbon::createFromFormat('Y-m-d',$value);
        return $reservationDate->between($minDate, $maxDate);
    }

    public function message(): string
    {
        return 'date must between the range';
    }
}
?>
