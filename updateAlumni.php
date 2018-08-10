<?php
  session_start();
  if(isset($_POST["nama_alumni"])){
    include 'connect.php';

    $id_alumni = $_POST["id"];
    $nama_alumni = $_POST["nama_alumni"];
    $angkatan = $_POST["angkatan"];

    $message = "";
    if($nama_alumni==""){
      $message = "Nama wajib diisi";
    }else if($angkatan==""){
      $message = "Angkatan wajib diisi";
    }else{
      $connection->query("UPDATE alumni SET nama_alumni='".$nama_alumni."', angkatan='".$angkatan."'
        WHERE id_alumni=".$id_alumni);
      $message = "Pengubahan data alumni berhasil";
    }
    $_SESSION["message"] = $message;
    header("location:update.php?id=".$id_alumni);
    exit();
  }
  header("location:insert.php");
  exit();
?>
