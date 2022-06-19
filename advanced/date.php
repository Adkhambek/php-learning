<?php
echo "Today is " . date("F d, Y") . "<br>";
echo "Today is ".date("l") . "<br>";
echo date("m/d/Y") . "<br>";
echo "The time is " . date("h:i:s") . "<br>";
echo "The time is ". date("h:i:sa") . "<br>";
echo date("F d, Y | h:i:s", time()) . "<br>";

date_default_timezone_set("Asia/Tashkent");
echo date("h:i:sa");
