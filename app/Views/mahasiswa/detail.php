<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="col">
        <div class="row">
            <h3>Nama : <?= $mahasiswa['nama']; ?></h3>
            <h3>NPM : <?= $mahasiswa['npm']; ?></h3>
            <h3>Jurusan : <?= $mahasiswa['jurusan']; ?></h3>
            <form action="/mahasiswa/<?= $mahasiswa['id']; ?>" method="post">
                <?php csrf_field() ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Yakin Hapus Mahasiswa Ini ?'
                )">Hapus Mahasiswa</button>
            </form>
            <a href="/mahasiswa">Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>