<?php
  include ('config/connect.php');

  $sql = mysql_query("SELECT* FROM post order by id desc");
  while($she = mysql_fetch_array($sql)) {
      ?>
      <p><?=sf['comment'];?>
      <p><?=sf['user'];?>
    <?php
  }
  ?>
  <hr>