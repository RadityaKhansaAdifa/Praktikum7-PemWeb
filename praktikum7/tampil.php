<html>
<!--
*RECORD DISPLAY (Untuk menampilkan seluruh data di Database)
-->
<head>
<title>Buku Tamu</title>
</head>
<body>
<h1>BUKU TAMU</h1>
<a href="index.php"> Kembali ke Buku Tamu</a>
<br>
<h2>BUKU TAMU</h2>
<a href="tampil.php"> Lihat Buku Tamu</a>
<hr size=1>

<?php
include ("connect.php");
// sql menampilkan record
$sql = "SELECT ID_BT, NAMA, EMAIL, ALAMAT, KOTA, ISI FROM buku_tamu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data setiap baris
    while($row = $result->fetch_assoc()) {

  echo "<br>".
  "ID_BT: ". $row["ID_BT"]. "<br>".
  "NAMA: ". $row["NAMA"]. "<br>".
  "EMAIL: ". $row["EMAIL"]. "<br>".
  "ALAMAT: ". $row["ALAMAT"]. "<br>".
  "KOTA: ". $row["KOTA"]. "<br>".
  "ISI: ". $row["ISI"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close()
?>

</body>
</html>