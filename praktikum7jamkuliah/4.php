<html>
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "my_DB";

        //membuat koneksi
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        //cek koneksi
        if (!$conn) {
            die ("Connection Failed: " . mysqli_connect_error());
        }

        $sql = "SELECT kode, negara, champion FROM liga";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0){
            //Luaran baris yang lain
            while($row = mysqli_fetch_assoc($result)){
                echo "Kode : ". $row["kode"]."- Negara : ". $row["negara"]."".$row["champion"]."<br>";
            }
        } else {
            echo "0 Results";
        }

        mysqli_close($conn);

        ?>
    </body>
</html>