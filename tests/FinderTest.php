<?php
    require_once "src/Finder.php";
    class FinderTest extends PHPUnit_Framework_TestCase
    {
        function test_makeFinder_changeMonth()
        {
            //Arrange
            $test_Score = new Finder(7,4,1776);
            // $input_month = 7;
            // $input_day = 4;
            // $input_year = 1776;
            //Act: runs the actual method that we are testing.
            $result = $test_Score->setMonth(7);
            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals(5, $result);
        }


    }
    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests
?>
