<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah siswa</title>
</head>
<body>
    <h1>Edit Data Alamat</h1>
    <form action="<?= base_url() ?>alamat/update" method="POST">
    <div class="tambah">
    <input placeholder="masukkan id" type="hidden" name="id" value="<?= $edit ['id']?>"><br><br>
    <input placeholder="masukkan alamat" type="text" name="alamat" value="<?= $edit ['alamat']?>"><br><br>
    <input placeholder="masukkan kode pos" type="text" name="kode_pos" value="<?= $edit ['kode_pos']?>"><br><br><br>
    <input type="submit" value="edit">
</form>
</div>
</body>
</html>