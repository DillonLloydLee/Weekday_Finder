<?php

    class WeekdayFinder {

        function findWeekday($date) {

            date_default_timezone_set("UTC");

            $f_date = date_create($date);

            $base_date = date_create("2015-08-13");

            $output = "Thursday";

            $list_of_days = array("Thursday", "Friday",
                "Saturday", "Sunday", "Monday", "Tuesday", "Wednesday");

            $p_date = date_parse($date);
            if ($p_date["error_count"] == 0 && checkdate($p_date["month"],
                $p_date["day"], $p_date["year"])) {

                $days = $base_date->diff($f_date);
                $pos_or_neg = ($days->format('%R'));
                $days = ($days->format('%a'));
                $days = $days % 7;

                if ($pos_or_neg == "-") {
                    if ($days == 1) {
                        $days = 6;
                    }
                    elseif ($days == 2) {
                        $days = 5;
                    }
                    elseif ($days == 3) {
                        $days = 4;
                    }
                    elseif ($days == 4) {
                        $days = 3;
                    }
                    elseif ($days == 5) {
                        $days = 2;
                    }
                    elseif ($days == 6) {
                        $days = 1;
                    }
                }

                $output = $list_of_days[$days];
            }
            else {
                $output = "ERROR";
            }

            $output = array($output, $date);
            return $output;

        }
    }
 ?>
