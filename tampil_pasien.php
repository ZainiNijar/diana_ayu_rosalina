<body>
    <center><img width="1023" height="120" src="header.png" />
        <center>
            <h1 align="center">ANALISIS KODIFIKASI ELEKTRONIS</h1>
            <h3 align="center">DATA PASIEN</h3>
            <?php
            include "koneksi_dbtik7.php";
            $tampil = "select*from tb_pasien";
            $cek = mysqli_query($koneksi, $tampil) or die(mysqli_error($koneksi));
            ?>
            <table width="856" border="1" cellspacing="0" cellpadding="2">
                <tr>
                    <td width="107">Nomor RM</td>
                    <td width="312">Nama Pasien</td>
                    <td width="400">Alamat</td>
                    <td width="128">Kelamin</td>
                    <td width="128">Pekerjaan</td>
                    <td width="83">Umur</td>
                </tr>
                <?php
                while ($data = mysqli_fetch_array($cek)) {
                ?>
                    <tr>
                        <td><?php echo $data['nomor_rm']; ?></td>
                        <td><?php echo $data['nama_pasien']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data['kelamin']; ?></td>
                        <td><?php echo $data['pekerjaan']; ?></td>
                        <td><?php echo $data['umur']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
            <br>
            <b><u>
                    <marquee>D3 REKAM MEDIS DAN INFORMASI KESEHATAN(RMIK) STIKES DHARMA Landbouw Padang </marquee>
                </u></b>
            <br><br>
            <a href="input_pasien.php">Input Data Pasien</a>
</body>