<?php
    include ('../config/connect.php');
    session_start();

    if (isset($_SESSION['user'])) {
        # code...
        echo '
            <script type="text/javascript">
                window.location.assign("../homepage.php");
            </script>';

    }elseif (isset($_POST['user']) && isset($_POST['pass'])) {
        # code...
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $sql = mysqli_query($conn, "SELECT * FROM user WHERE username = '{$user}' AND password = '{$pass}'");
        $num = mysqli_num_rows($sql);
        if ($num != 0) {
            # code...
            while ($row = mysqli_fetch_assoc($sql)) {
                # code...
                $id = $row['id'];
                $_SESSION['id'] = $id;
                $email = $row['email'];
                $_SESSION['email'] = $email;
                $status = $row['status'];
                $_SESSION['status'] = $status;
                break;
            }
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;

            if ($status ==  "admin") {
                # code...
                echo '
                    <script type="text/javascript">
                        window.location.assign("../admin_dashboard.php");
                    </script>';
            }else{
                echo '
                <script type="text/javascript">
                    window.location.assign("../homepage.php");
                </script>';
            }
        }else{
            echo '
                <script type="text/javascript">
                    window.location.assign("../index.php");
                </script>';
        }
    }else{
            echo mysqli_error();
    }
?>