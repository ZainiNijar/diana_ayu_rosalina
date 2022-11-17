<body>
    <?php
    include "koneksi_dbtik7.php";
    $nomor_rm = $_POST['no'];
    $nama_pasien = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kelamin = $_POST['kelamin'];
    $pekerjaan = $_POST['pekerjaan'];
    $umur = $_POST['umur'];
    $simpan = "INSERT INTO tb_pasien VALUES('$nomor_rm','$nama_pasien','$alamat','$kelamin',' $pekerjaan','$umur')";
    $cek = mysqli_query($koneksi, $simpan) or die(mysqli_error($koneksi));
    header('Location: tampil_pasien.php') ?>
</body>