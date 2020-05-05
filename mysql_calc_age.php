<?php
// set date for calculation
// 設定要計算的日期
$day = 18;
$month = 9;
$year = 1972;

// format birthday as an ISO 8601 date
// 將生日格式化為 ISO 8601日期
$bdayISO = date("c", mktime(0, 0, 0, $month, $day, $year));

// use mysql query to calculate an age in days
// 使用MySQL指令來計算年齡的天數
$db = mysqli_connect('localhost', 'bookorama', 'bookorama123');
$res = mysqli_query($db, "select datediff(now(), '$bdayISO')");
$age = mysqli_fetch_array($res);

// convert age in days to age in years (approximately)
// 將年齡天數轉換成年數
echo 'Current age is '.floor($age[0]/365.25).'.';
?>