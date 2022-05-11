<html>
<!--
*GUI ENTRY DATA BUKU TAMU
-->
<head>
<title>Buku Tamu</title>
</head>
<body>
<h2>Buku Tamu</h2>
<hr size="1">
<form name="buku_tamu" method="post" action="simpan.php">
ID  <input  style="margin: 5px 5px 5px 48px;" type="text" name="ID_BT"><br>
Nama  <input  style="margin: 5px 5px 5px 26px;" type="text" name="NAMA"><br>
Email  <input style="margin: 5px 5px 5px 24px;" type="text" name="EMAIL"><br>
Alamat  <input style="margin: 5px 5px 5px 16px;" type="text" name="ALAMAT"><br>
Kota  <input style="margin: 5px 5px 5px 32px;" type="text" name="KOTA"><br>
Isi <br><textarea style="width: 240px; margin-bottom: 20px;" name="ISI"></textarea><br>
<input type="submit" name="submit" value="Send"> <input type="reset" name="reset" value="Reset">
</form>
</body>
</html>