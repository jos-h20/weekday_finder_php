<?php
class Finder
{
    private $month;
    private $day;
    private $year_first_digits;
    private $year_second_digits;

    function __construct()
    {
        // $this->month = $input_month;
        // $this->day = $input_day;
        // $this->year = $input_year;
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
    function getMonth()
    {
        return $this->month;
    }
    function getDay()
    {
        return $this->day;
    }
    function getYearFirstDigits()
    {
        return $this->year_first_digits;
    }
    function getYearSecondDigits()
    {
        return $this->year_second_digits;
    }
    function mainFormula($input_month,$input_day,$input_year)
    {
        $m = $this->setMonth($input_month);
        $dy = $this->setDay($input_day);


        if ($m == 11 || $m == 12) {
            $yr = $input_year - 1;
        }  else { $yr = $input_year;
        }

        $yf = $this->setYearFirstDigits($yr);
        $ys = $this->setYearSecondDigits($yr);

        $a = 13 * $m;

        $ab = $a - 1;
        var_dump($ab);
        var_dump($ys);
        var_dump($dy);

        $b = floor($ab / 5);
        var_dump($b);
        $c = floor($yf / 4);
        var_dump($c);
        $d = $yf * 2;
        var_dump($d);
        $e = floor($ys / 4);
        var_dump($e);
        $f = $dy + $b + $ys + $e + $c - $d;
        var_dump($f);
        $n = $f % 7;
        var_dump($n);
        // $h = $g * 7;
        // $n = $f - $h;

        if ($n == 0) {
            return "Sunday";
        } elseif ($n == 1) {
            return "Monday";
        } elseif ($n == 2) {
            return "Tuesday";
        } elseif ($n == 3) {
            return "Wednesday";
        } elseif ($n == 4) {
            return "Thursday";
        } elseif ($n == 5) {
            return "Friday";
        } elseif ($n == 6) {
            return "Saturday";
        }
    }


}

 ?>

 <!-- everything works ok.  I need to figure out how to subtract a year when january and february are entered, otherwise those two months will always be off. -->
