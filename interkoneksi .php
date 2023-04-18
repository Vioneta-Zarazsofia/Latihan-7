<html>
    <head>
        <title>Koneksi database MySQL</title>
    </head>
    <body>
        <h1>Demo Koneksi Database MySQL</h1>
        <?php
        $con = mysqli_connect("localhost","root","","mydb");

        //Check connection
        if(mysqli_connect_errno()){
            echo "Failed to connection to MySQL:".mysqli_connect_error();
            exit();
        }
        ?>
    </body>
</html>