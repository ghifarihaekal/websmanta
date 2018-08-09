<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>View Data</title>
  </head>
  <body>
    <h1>Lihat Daftar Alumni</h1>
    <?php
      include 'connect.php';
      $getAlumni = $connection->query("SELECT * FROM alumni");
      while($fetchAlumni = $getAlumni->fetch_assoc()){
    ?>

    <table>
      <tr>
        <td><?=$fetchAlumni["nama_alumni"]?></td>
        <td><?=$fetchAlumni["angkatan"]?></td>
      </tr>
    </table>

    <?php
      }
    ?>
  </body>
</html>
