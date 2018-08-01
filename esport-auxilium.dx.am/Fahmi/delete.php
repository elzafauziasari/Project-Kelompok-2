<?php
$con=mysqli_connect("localhost","root","","3inOne");;
$time = $_GET['time'];

if(!empty($time)) {
	mysqli_query($con, "delete from feed_back where time = '$time'");
	header('news.php');
}else
{
	header('news.php');
}
?>