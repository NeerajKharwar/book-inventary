<?php

$sname= "ec2-3-229-161-70.compute-1.amazonaws.com";
$unmae= "tfdzzoildjbqui";
$password = "f42f41616cabbf2110fd5b837273a788b48730cf35b101eae47204c33e64e099";

$db_name = "d5e4p05h6sfmb";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}