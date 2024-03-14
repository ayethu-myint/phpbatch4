<?php

// 1 Jan 1970 UTC

// https://www.php.net/manual/en/timezones.php

date_default_timezone_set("Asia/Yangon");


$getdate = getdate();
echo $getdate;
var_dump($getdate);
echo "<pre>".print_r($getdate,true)."</pre>";

echo "This is seconds = ".$getdate["seconds"];
echo "This is minutes = ".$getdate["minutes"];
echo "This is hours = ".$getdate["hours"];


echo "This is weekday = ".$getdate["weekday"]; // Tuesday
echo "This is wday = ".$getdate["wday"]; // 0= sun 1=monday
echo "This is yday = ".$getdate["yday"]; // 64 day of the year

echo "This is month = ".$getdate["month"]; // March
echo "This is mon = ".$getdate["mon"]; // 3  // day of the month
echo "This is mday = ".$getdate["mday"]; // 5

echo "This is year = ".$getdate["year"]; // 2024

echo "This is 0 = ".$getdate["0"]; // mili seconds

$time = time();
echo "This is 0 = ".$time; // mili seconds


// DATE/TIME Format

// date(format,timestampe);

$date = date("a",$time);
echo "This is format a = ".$date; // am pm

$date = date("A",$time);
echo "This is format A = ".$date; // AM PM

$date = date("d",$time);
echo "This is format d = ".$date; // 05   // day leading zero

$date = date("D",$time);
echo "This is format D = ".$date; // Tue // Days

$date = date("F",$time);
echo "This is format F = ".$date; // March

$date = date("g",$time);
echo "This is format g = ".$date; // 11 // hours no leading zero

$date = date("G",$time);
echo "This is format G = ".$date; // 23 // hours - 24 hours format no leading zero

$date = date("h",$time);
echo "This is format h = ".$date; // 10 // hours leading zero

$date = date("H",$time);
echo "This is format H = ".$date; // 23 // hours -24 hours format but leading zero

$date = date("i",$time);
echo "This is format i = ".$date; // 01 minute leading zero

$date = date("j",$time);
echo "This is format j = ".$date; // 5 day of the month no leading zero

$date = date("l",$time);
echo "This is format l = ".$date; // Tuesday

$date = date("L",$time);
echo "This is format L = ".$date; // 0 or 1 => leap year will show 1 (true), if not show 0 (false)

$date = date("m",$time);
echo "This is format m = ".$date; // 03 => number of the month leading zero

$date = date("M",$time);
echo "This is format M = ".$date; // Mar => Jan, Feb, etc

$date = date("n",$time);
echo "This is format n = ".$date; // 3 => day of the month no leading 0

$date = date("r",$time);
echo "This is format r = ".$date; // Tue, 05 Mar 2024 23:10:53  +0630

$date = date("s",$time);
echo "This is format s = ".$date; // seconds

$date = date("U",$time);
echo "This is format U = ".$date; // mili seconds

$date = date("y",$time);
echo "This is format y = ".$date; // 24 year with short code

$date = date("Y",$time);
echo "This is format Y = ".$date; // 2024

$date = date("z",$time);
echo "This is format z = ".$date; // 64 => day of the year 64th day of 2024



?>