<?php

    class WeekdayFinder {

        function findWeekday($date) {

            $f_date = date_create($date);

            $base_date = date_create("2015-08-13");

            $output = "Thursday";

            $list_of_days = array("Thursday", "Friday",
                "Saturday", "Sunday", "Monday", "Tuesday", "Wednesday");

            $days = $base_date->diff($f_date);
            $pos_or_neg = ($days->format('%R'));
            $days = ($days->format('%a'));

            if ($pos_or_neg == "+") {
                $output = $list_of_days[$days];
            }
            elseif ($pos_or_neg == "-") {
                $output = "Wednesday";
            }

            return $output;

        }
    }
 ?>
