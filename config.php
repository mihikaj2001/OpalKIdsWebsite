<?php
session_start();
//$host = "localhost"; /* Host name */
//$user = "root"; /* User */
//$password = ""; /* Password */
//$dbname = "test"; /* Database name */

$host = "mysql.cyidvhpi88ug.ap-south-1.rds.amazonaws.com"; /* Host name */
$user = "admin"; /* User */
$password = "instaivyadmin"; /* Password */
$dbname = "test"; /* Database name */


$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
?>
