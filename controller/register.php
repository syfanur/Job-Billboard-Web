<?php
    include('../config/connect.php');
    session_start();

    if (isset($_POST['submit'])) {
      # code...
      $email = $_POST['email'];
      $user = $_POST['user'];
      $pass = $_POST['pass'];
      $status = $_POST['status'];

      $sql = mysqli_query($conn, "INSERT INTO user VALUES('','{$email}','{$user}','{$pass}','{$status}','','')");

      if ($sql) {
        # code...
        echo '
          <script type="text/javascript">
            window.location.assign("../index.php");
          </script>';
      }else{
        echo mysql_error();
    }
  }   
?>