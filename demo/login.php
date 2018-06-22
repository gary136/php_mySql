<?php
$mail = $_POST['m'];
$pass = $_POST['p'];
if($mail == "birdfan8814@gmail.com"){
	// 重新導向
	echo "<meta http-equiv='refresh' content='0;url=demo_chart.html'>";
} else {
	echo "error";
}
?>