<?php
include "koneksi.php";

$sql = "SELECT * FROM suplayer";
$result = mysqli_query($conn, $sql);

$data = [];

while ($row = mysqli_fetch_assoc($result)) {
   $data[] = $row;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <h1>Daftar suplayer</h1>
   <table border="1" cellpadding="5" cellspacing="0">
      <tr>
         <th>ID</th>
         <th>Nama</th>
         <th>Alamat</th>
      </tr>
      <?php
      foreach ($data as $d) { ?>
         <tr>
            <td><?= $d["id"] ?></td>
            <td><?= $d["nama"] ?></td>
            <td><?= $d["alamat"] ?></td>
         </tr>
      <?php } ?>
   </table>
</body>

</html>