<?php

    class WeekdayFinder {

        function findWeekday($date) {

            $date = new DateTime("2015-08-12");
            $f_date = strtotime($date);
            $f_date = date('Y-m-d', $f_date);

            $base_date = new DateTime("2015-08-13");
            $base_date = strtotime($base_date);
            $base_date = date('Y-m-d', $base_date);

            $output = "Thursday";

            $days = $base_date->diff($date);



            return $output;

        }
    }
 ?>
