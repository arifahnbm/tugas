<?php
include "koneksi.php";

// mangambil id terakhir dari tabel suplayer
$sql = "SELECT MAX(id) as max_id FROM suplayer";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$id_baru = $row['max_id'] + 1;

if (isset($_POST["kirim"])) {
   $nama = $_POST["nama"];
   $alamat = $_POST["alamat"];

   $query = "INSERT INTO suplayer (id, nama, alamat) VALUES ('$id_baru', '$nama', '$alamat')";

   if (mysqli_query($conn, $query)) {
      echo "Data berhasil dimasukkan";
   } else {
      echo "Data gagal dimasukkan: " . mysqli_error($conn);
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      input,
      label {
         padding: 2px;
         margin: 2px;
      }
   </style>
</head>

<body>
   <form action="" method="post">
      <h1>Form isi data suplayer</h1>
      <div>
         <label for="id">ID</label>
         <input type="text" id="id" name="id" value="<?= $id_baru ?>" disabled>
      </div>
      <div>
         <label for="nama">NAMA</label>
         <input type="text" id="nama" name="nama">
      </div>
      <div>
         <label for="alamat">Alamat</label>
         <input type="text" id="alamat" name="alamat">
      </div>
      <div>
         <button type="submit" name="kirim">Submit</button>
      </div>
   </form>

   <h1>Your Input</h1>
   <p>ID Customer : <?php if (isset($id_baru)) echo $id_baru ?></p>
   <p>Nama : <?php if (isset($nama)) echo $nama ?></p>
   <p>Alamat : <?php if (isset($alamat)) echo $alamat ?></p>

</body>

</html>