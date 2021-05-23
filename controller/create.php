<?php
    include('../config/connect.php');
    session_start();

    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $dedlen = $_POST['deadline'];
        $desc = $_POST['description'];
        $category = $_POST['category'];
        $target_dir = "../images/";

        if (!isset($_POST['file'])) {
            # code...
            $name = "tutor2.jpg";
            $target_file = $target_dir . basename($name);
        }else{
            # code...
            $name = $_FILES['file']['name'];
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
        }

        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $ext = array("jpg","jpeg","png","gif");

        if (in_array($imageFileType,$ext)) {
            # code...
            $sql = mysqli_query($conn, "INSERT INTO post VALUES ('','{$title}', '{$dedlen}', '{$desc}', '{$name}', '{$category}') ");
            move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

            if($sql){
                echo "alert('Berhasil')";
                echo "<script>window.location.href='../post_page.php'</script>";
             }else{
                echo "alert('Berhasil')";
                echo "<script>window.location.href='../post_page.php'</script>";
                echo mysqli_error();
            }
        }
    }

?>