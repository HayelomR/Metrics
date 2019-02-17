<?php
define("DB_SERVER", "3306");
define("DB_USER", "lhsbz5crfzusmwag");
define("DB_PASS", "wyl5adec8otkm9dt");
define("DB_NAME", "ge7swizm5mv7k3qa");


$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// echo "You are connected";
                  // Check connection
if(! $connection ) {
	die('Could not connect: ' . mysqli_error());
}

?>

