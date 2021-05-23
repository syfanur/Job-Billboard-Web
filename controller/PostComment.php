<?php
session_start();
require_once 
  $comment = $_POST['comment'];
  $user = $_SESSION['user'];
  $data = "INSERT INTO post VALUES (NULL,'$comment', '$user',now())";
  $simpan = $db->query($data);
  if ($simpan) {
    echo "<div align='center'>Comment Berhasil Disimpan!</div>";
    ?>
    <META HTTP-EQUIV="refresh" CONTENT="3;URL=post_detail.php"> <?php
 } else {
  echo "<div align='center'>comment gagal!</div>";
 ?>
    <META HTTP-EQUIV="refresh" CONTENT="3;URL=post_detail.php"> <?php
 }
                                                              ?>