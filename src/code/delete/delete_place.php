<?php
  $id = $_GET['id'];
  $delete = "DELETE FROM place WHERE idPlace=$id";
  echo '<meta http-equiv="refresh" content="1;URL=../../../pages/manage-barbers/index.php"/>';
?>
