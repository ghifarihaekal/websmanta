<?php
  session_start();

  if(!isset($_GET["id"])){
    header("location:view.php");
    exit();
  }

  include 'connect.php';

  $id = $_GET["id"];

  $getData = $connection->query("SELECT * FROM alumni WHERE id_alumni = ".$id);
  if($getData->num_rows==0){
    header("location:view.php");
    exit();
  }

  $getData = $getData->fetch_assoc();
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Update Data</title>
    <style>
      h1{
        text-align: center;
      }
      h2{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h2>Daftar sebagai Alumni</h2><br>
    <h1>SMA Negeri 3 Pontianak</h1>
    <form action="updateAlumni.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?=$_GET["id"]?>">
      <table>
        <tr>
          <td>Nama Alumni</td>
          <td>:</td>
          <td><input type="text" name="nama_alumni" value="<?=$getData["nama_alumni"]?>"></td>
        </tr>
        <tr>
          <td>Angkatan</td>
          <td>:</td>
          <td><input type="number" name="angkatan" value="<?=$getData["angkatan"]?>"></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><button>Submit</button></td>
        </tr>
      </table>
  </form>
  <?php
    if(isset($_SESSION["message"])){
      echo $_SESSION["message"];
      unset($_SESSION["message"]);
    }
  ?>
  </body>
</html>
