<div class="container">
    <h3 class="mt-3">List of Peoples</h3>

    <div class="row">
        <div class="col-md-6">
            <form action="<?= base_url('peoples'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Keyword..." name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md">
            <h5>Data yang ditemukan : <?= $hasil_cari; ?></h5>

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($peoples)) : ?>
                        <tr>
                            <td colspan="5">
                                <div class="alert alert-danger" role="alert">
                                    Data tidak ditemukan!
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>

                    <?php $i = ++$start;
                    foreach ($peoples as $p) : ?>
                        <tr>

                            <th><?= $i++; ?></th>
                            <td><?= $p['name']; ?></td>
                            <td><?= $p['email']; ?></td>
                            <td><?= $p['address']; ?></td>
                            <td>
                                <a href="" class="badge badge-warning">Detail</a>
                                <a href="" class="badge badge-success">Detail</a>
                                <a href="" class="badge badge-danger">Detail</a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>

        </div>
    </div>
</div>