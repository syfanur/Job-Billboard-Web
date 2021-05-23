<?php
session_start();
require_once('config/connect.php');
if (isset($_POST)) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $about = $_POST['about'];
    $id = $_POST['id'];
    $avatar = $_FILES['avatar']['user'];
    $tmp = $_FILES['avatar']['tmp_name'];
    $newPhoto = $user."-".$avatar;

    $path = "images/".$username."/";

    if(!is_dir($path)){
        mkdir($path, 0777, true);
        $path = "images/".$username."/";
    }

    $paths = $path.$newPhoto;

//     query untuk update data dari table post berdasarkan id post
    if (move_uploaded_file($tmp, $paths)) {
        $data = "UPDATE user SET user = '$username', fname = '$fname', lname = '$lname', email = '$email', avatar = '$newPhoto',about = '$about'  where id = '$id'";
        $result = $db->query($data);
        $sql = "SELECT * FROM user WHERE id = '$id'";
        $query = $db->query($sql);
        $hasil = $query->fetch_assoc();

        $_SESSION['id'] = $hasil['id'];
        $_SESSION['username'] = $hasil['username'];
        $_SESSION['fname'] = $hasil['fname'];
        $_SESSION['lname'] = $hasil['lname'];
        $_SESSION['email'] = $hasil['email'];
        $_SESSION['avatar'] = $hasil['avatar'];
        $_SESSION['about'] = $hasil['about'];

        header('location:user_dashboard.php');
    }
}
?>