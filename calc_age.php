<?php
// 設定要計算的日期
// set date for calculation
$day = 18;
$month = 9;
$year = 1972;

// remeber you need bday as day month and year
$bdayunix = mktime (0, 0, 0, $month, $day, $year); // get ts for then 取得當時的時戳
$nowunix = time(); // get unix ts for today 取得今天的 Unix時戳
$ageunix = $nowunix - $bdayunix; // work out the difference 算出兩者的差
$age = floor($ageunix / (365 * 24 * 60 * 60)); // convert from seconds to years

echo 'Current age is '.$age.'.';
?>