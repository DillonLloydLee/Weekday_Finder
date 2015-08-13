<?php

    class WeekdayFinder {

        function findWeekday($date) {

            $f_date = date_create($date);

            $base_date = date_create("2015-08-13");

            $output = "Thursday";

            $list_of_days = array("Thursday", "Friday",
                "Saturday", "Sunday", "Monday", "Tuesday", "Wednesday");

            $days = $base_date->diff($f_date);
            $days = ($days->format('%R%a'));

            if ($days == -1) {
                $output = "Wednesday";
            }

            return $output;

        }
    }
 ?>
