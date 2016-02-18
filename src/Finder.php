<?php
class Finder
{
    private $month;
    private $day;
    private $year_first_digits;
    private $year_second_digits;

    function __construct($input_month, $input_day, $input_year)
    {
        $this->month = $input_month;
        $this->day = $input_day;
        $this->year = $input_year;
    }
    function setMonth($input_month)
    {
        if ($input_month > 2) {
            $m = $input_month - 2;
        } elseif ($input_month == 1) {
            $m = 11;
        } elseif ($input_month == 2) {
            $m = 12;
        }   return $m;
    }
    function setDay($input_day)
    {
        return $this->day = $input_day;
    }
    function setYearFirstDigits($input_year)
    {
        $year_array = str_split($input_year);
        $first_digits = array_slice($year_array, 0, 2);
        return $this->year_first_digits = implode($first_digits);
    }
    function setYearSecondDigits($input_year)
    {
        $year_array = str_split($input_year);
        $second_digits = array_slice($year_array, 2, 3);
        return $this->year_second_digits = implode($second_digits);
    }
}

 ?>
