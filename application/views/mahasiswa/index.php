<div class="container">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?= $this->session->unset_userdata('flash'); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-5">
        <div class="col-md-6">
            <a href="<?= base_url('mahasiswa/tambah'); ?>" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Masukkan nama mahasiswa..." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary circle-round" type="submit" id="button-addon2">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Mahasiswa</h3>
            <?php if (empty($mahasiswa)) : ?>
                <div class="alert alert-danger" role="alert">
                    Maaf, data mahasiswa yang anda cari tidak ditemukan
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <li class="list-group-item"><?= $mhs['nama']; ?>
                        <a href="<?= base_url('mahasiswa/hapus'); ?>/<?= $mhs['id']; ?>" class="badge badge-danger badge-pill float-right tombol-hapus">hapus</a>
                        <a href="<?= base_url('mahasiswa/ubah'); ?>/<?= $mhs['id']; ?>" class="badge badge-success badge-pill float-right">ubah</a>
                        <a href="<?= base_url('mahasiswa/detail'); ?>/<?= $mhs['id']; ?>" class="badge badge-primary badge-pill float-right">detail</a>


                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>