<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <a href="/mahasiswa/create">Tambah Data Mahasiswa</a>
            <h2>Data Mahasiswa</h2>
            <br>
            <?php foreach ($mahasiswa as $m) : ?>
                <h3>Nama : <?= $m['nama']; ?></h3>
                <a href="/mahasiswa/detail/<?= $m['id']; ?>">Detail</a>
                <br>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>