<html>
    <head>
        <title>Koneksi Database MySQL</title>
    </head>
    <body>
        <h1>Demo Koneksi Database MySQL</h1>
        <?php
        //connect to database
        $con = mysqli_connect("localhost","root","");
        // check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL : ".mysqli_connect_error();
            exit;
        }else {
            echo "Database Terhubung";
        }
        ?>
    </body>
</html>