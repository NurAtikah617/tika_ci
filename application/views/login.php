<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Login</h1>
    <div class="tambah">
    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url() ?>login/verifikasi" method="POST">
        <input type="text" placeholder="masukkan username" name="username"><br><br>
        <input type="password" placeholder="masukkan passsword" name="password"><br><br>

        <input type="submit" value="LOGIN">
    </form>
</div>

    <p>Belum Punya Akun? <a href="<?= base_url() ?>daftar">Daftar</a></p>

</body>
</html>