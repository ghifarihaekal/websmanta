<?php
  session_start();
  if(isset($_GET["id"])){
    include 'connect.php';

    $connection->query("DELETE FROM alumni WHERE id_alumni=".$_GET["id"]);
  }
  header("location:view.php");
  exit();
?>
