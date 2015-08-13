<?php

    require_once "src/WeekdayFinder.php";

    class WeekdayFinderTest extends PHPUnit_Framework_TestCase {

        function test_findWeekday_today() {

            //Arrange
            $test_WeekdayFinder = new WeekdayFinder;
            $date = "8/13/2015";

            //Act
            $result = $test_WeekdayFinder->findWeekday($date);

            //Assert
            $this->assertEquals("Thursday", $result);
        }
    }

 ?>
