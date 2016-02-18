<?php
class Finder
{
    private $month;
    private $day;
    private $year;

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
}

 ?>
