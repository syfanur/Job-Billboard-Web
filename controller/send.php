<?php
    include('../config/connect.php');
    session_start();

    if (isset($_POST['submit'])) {
      # code...
      $user = $_POST['user'];
      $message = $_POST['message'];
     

      $sql = mysqli_query($conn, "INSERT INTO message VALUES('','','{$user}','{$message}')");

      if ($sql) {
        # code...
        echo '
          <script type="text/javascript">
            window.location.assign("../message.php");
          </script>';
      }else{
        echo mysql_error();
    }
  }   
?>