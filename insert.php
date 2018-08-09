<?php
  session_start();
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Insert Data</title>
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
    <form action="addAlumni.php" method="post" enctype="multipart/form-data">
    <table>
      <tr>
        <td>Nama Alumni</td>
        <td>:</td>
        <td><input type="text" name="nama_alumni"></td>
      </tr>
      <tr>
        <td>Angkatan</td>
        <td>:</td>
        <td><input type="number" name="angkatan"></td>
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
