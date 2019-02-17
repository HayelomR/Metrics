<?php
$url = getenv('mysql://lhsbz5crfzusmwag:wyl5adec8otkm9dt@blonze2d5mrbmcgf.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/ge7swizm5mv7k3qa

');
$dbparts = parse_url($url);

$hostname = $dbparts['blonze2d5mrbmcgf.cbetxkdyhwsb.us-east-1.rds.amazonaws.com'];
$username = $dbparts['lhsbz5crfzusmwag'];
$password = $dbparts['wyl5adec8otkm9dt'];
$database = ltrim($dbparts['path'],'/');
// $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// // echo "You are connected";
//                   // Check connection
// if(! $connection ) {
// 	die('Could not connect: ' . mysqli_error());
// }
// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection was successfully established!";
?>

