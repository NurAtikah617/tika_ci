<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah siswa</title>
</head>
<body>
    <h1>Edit Data Siswa Syafi'i Akrom</h1>
    <form action="<?= base_url() ?>admin/update" method="POST">
    <div class="tambah">
    <input placeholder="masukkan nis" type="hidden" name="nis" value="<?= $edit ['nis']?>"><br><br>
    <input placeholder="masukkan nama" type="text" name="nama" value="<?= $edit ['nama']?>"><br><br>
    <select name="alamat">
        <option value="">pilih alamat</option>
        <?php foreach( $alamat as $al ) : ?>
            <option value="<?= $al['id']?>"><?= $al['alamat']?></option>
        <?php endforeach; ?>
    </select>
    <br><br>
    <input placeholder="masukkan no.telp" type="text" name="no_telp" value="<?= $edit ['no_telp']?>"><br><br><br>
    <input type="submit" value="edit">
</form>
</div>
</body>
</html>