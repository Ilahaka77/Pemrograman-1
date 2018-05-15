<html>
    <head><title>Menghitung Nilai IPS Mahasiswa</title></head>
    <body>
        <center><h2>Program Menghitung Nilai IPS Mahasiswa</h2></center>
        <center><form action="menghitung.php" method="post" name="frinput">
            
            NIM     : <br><input type="text" name="txtnim"><br>
            Nama    : <br><input type="text" name="txtnama"><br>
            Program Studi : <br><select name="inprodi">
                <option value=""> -- Pilih Prodi -- </option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Kimia Industri">Teknik Kimia Industri</option>
            </select><br><br>
            <h4>Input Nilai Mata Kuliah</h4>
            Matematika  : <br><input type="text" name="nilai1"><br>
            Akutansi    : <br><input type="text" name="nilai2"><br>
            Pendidikan Agama Islam  : <br><input type="text" name="nilai3"><br>
            Basis Data  : <br><input type="text" name="nilai4"><br>
            Pemrograman1: <br><input type="text" name="nilai5"><br>
            ERP 1       : <br><input type="text" name="nilai6"><br>
            proyek 2    : <br><input type="text" name="nilai7"><br><br>

            <input type="submit" name="Input" value="Input">

        </form></center>
    </body>
</html>