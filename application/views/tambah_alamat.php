<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah siswa</title>
</head>
<body>
    <h1>TAMBAH DATA ALAMAT</h1>
    <div class="tambah">
    <form action="<?= base_url() ?>alamat/simpan" method="POST">
    <input placeholder="masukkan alamat" type="text" name="alamat"><br><br>
    <input placeholder="masukkan kode pos" type="text" name="kode_pos"><br><br><br>
    <input type="submit" value="simpan">
</form>
</div>
</body>
</html>