<?php

    require_once "src/WeekdayFinder.php";

    class WeekdayFinderTest extends PHPUnit_Framework_TestCase {

        function test_findWeekday_today() {

            //Arrange
            $test_WeekdayFinder = new WeekdayFinder;
            $date = "2015-08-13";

            //Act
            $result = $test_WeekdayFinder->findWeekday($date);

            //Assert
            $this->assertEquals("Thursday", $result);
        }

        function test_findWeekday_yesterday() {

            //Arrange
            $test_WeekdayFinder = new WeekdayFinder;
            $date = "2015-08-12";

            //Act
            $result = $test_WeekdayFinder->findWeekday($date);

            //Assert
            $this->assertEquals("Wednesday", $result);
        }
        function test_findWeekday_tomorrow() {

            //Arrange
            $test_WeekdayFinder = new WeekdayFinder;
            $date = "2015-08-14";

            //Act
            $result = $test_WeekdayFinder->findWeekday($date);

            //Assert
            $this->assertEquals("Friday", $result);
        }

        function test_findWeekday_lastMonth() {

            //Arrange
            $test_WeekdayFinder = new WeekdayFinder;
            $date = "2015-07-11";

            //Act
            $result = $test_WeekdayFinder->findWeekday($date);

            //Assert
            $this->assertEquals("Saturday", $result);
        }

        function test_findWeekday_threeHundredYearsAgo() {

            //Arrange
            $test_WeekdayFinder = new WeekdayFinder;
            $date = "1776-01-01";

            //Act
            $result = $test_WeekdayFinder->findWeekday($date);

            //Assert
            $this->assertEquals("Monday", $result);
        }

        function test_findWeekday_incorrectFormat() {

            //Arrange
            $test_WeekdayFinder = new WeekdayFinder;
            $date = "Chicken";

            //Act
            $result = $test_WeekdayFinder->findWeekday($date);

            //Assert
            $this->assertEquals("ERROR", $result);
        }


    }

 ?>
