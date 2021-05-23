<?php 
	include ('../config/connect.php');
	session_start();
	$user = $_SESSION['user'];
	$status = $_SESSION['status'];

	if ($status ==  "admin") {
		# code...
		echo '
            <script type="text/javascript">
                window.location.assign("../admin_dashboard.php");
            </script>';
	}else{
		echo '
            <script type="text/javascript">
                window.location.assign("../user_dashboard.php");
            </script>';
	}
?>

