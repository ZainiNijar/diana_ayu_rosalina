<body bgcolor="lavender">
    <form action="simpan_pasien.php" method="POST">
        <center><img width="1023" height="120" src="header.png" />
            <center>
                <h1 align="center">ANALISIS KODIFIKASI ELEKTRONIS</h1>
                <table bordercolor="gold" colspan=2 align=center border=4>
                    <tr>
                        <td colspan=3 align="center"><b>FORM INPUT DATA PASIEN</b></td>
                    </tr>
                    <tr>
                        <td align="left"><b>NOMOR PASIEN</b></td>
                        <td><input type="text" name="no"></td>
                    </tr>
                    <tr>
                        <td align="left"><b>NAMA PASIEN</b></td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td align="left"><b>ALAMAT</b></td>
                        <td><textarea name="alamat" rows=5 cols=40></textarea></td>
                    </tr>
                    <tr>
                        <td align="left"><b>JENIS KELAMIN</b></td>
                        <td><input type=radio name=kelamin id=kelamin value=L>LAKI-LAKI<input type=radio name=kelamin id=kelamin value=P>PEREMPUAN</td>
                    </tr>
                    <tr>
                        <td align="left"><b>PEKERJAAN</b></td>
                        <td><select name="pekerjaan">
                                <option selected>-- Pilihan --</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="PNS">PNS</option>
                                <option value="TNI-POLRI">TNI-POLRI</option>
                                <option value="Swasta">Swasta</option>
                                <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa
                                </option>
                            </select></td>
                    </tr>
                    <tr>
                        <td align="left"><b>UMUR PASIEN</b></td>
                        <td><input type="text" name="umur"></td>
                    </tr>
                    <td colspan=2 align="center"><input type="submit" value="Simpan"> <input type="reset" value="Batal"></td>
                    </tr>
                </table>
    </form>
    <br><br>
    <b><u>
            <marquee>D3 Rekam Medis & Informasi Kesehatan (RMIK) STIKes Dharma Landbouw Padang </marquee>
        </u></b>
</body>