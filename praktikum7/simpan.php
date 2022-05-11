<html>
<!--
*ENGINE BUKU TAMU (Untuk Action Tombol "SEND")
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
$ID_BT=$_POST['ID_BT'];
$NAMA=$_POST['NAMA'];
$EMAIL=$_POST['EMAIL'];
$ALAMAT=$_POST['ALAMAT'];
$KOTA=$_POST['KOTA'];
$ISI=$_POST['ISI'];


// sql entry data pada tabel
$sql = "INSERT INTO buku_tamu (ID_BT, NAMA, EMAIL, ALAMAT, KOTA, ISI)
VALUES ('$ID_BT','$NAMA','$EMAIL','$ALAMAT','$KOTA','$ISI')";

if ($conn->query($sql) === TRUE) {
    echo "Pesan telah terkirim!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>