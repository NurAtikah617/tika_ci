<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah siswa</title>
</head>
<body>
    <h1>DATA SISWA SMK SYAFI'I AKROM</h1>
    <div class="tambah">
    <form action="tambah_siswa/tambah" method="POST">
    <input placeholder="masukkan nama" type="text" name="nama"><br><br>
    <select name="alamat">
        <option value="">pilih alamat</option>
        <option value="batang">batang</option>
        <option value="pekalongan">pekalongan</option>
        <option value="pemalang">pemalang</option>
        <option value="tegal">tegal</option>
    </select>
    <br><br>
    <input placeholder="masukkan no.telp" type="text" name="no_telp"><br><br><br>
    <input type="submit" value="simpan">
</form>
</div>
</body>
</html>