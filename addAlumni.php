<?php
  session_start();
  if(isset($_POST["nama_alumni"])){
    include 'connect.php';

    $nama_alumni = $_POST["nama_alumni"];
    $angkatan = $_POST["angkatan"];

    $message = "";
    if($nama_alumni==""){
      $message = "Nama wajib diisi";
    }else if($angkatan==""){
      $message = "Angkatan wajib diisi";
    }else{
      $connection->query("INSERT INTO alumni VALUES (null,'".$nama_alumni."','".$angkatan."')");
      $message = "Penambahan alumni berhasil";
    }
    $_SESSION["message"] = $message;
  }
  header("location:insert.php");
  exit();
?>
