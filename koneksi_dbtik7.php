<body>
    <?php
    $koneksi = mysqli_connect("localhost", "root", "root") or die("Database gagal terkoneksi");
    $db = mysqli_select_db($koneksi, "dbtik7") or die("database gagal ditemukan");
    ?>
</body>