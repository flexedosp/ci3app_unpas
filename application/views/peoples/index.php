<div class="container">
    <div class="row">
        <div class="col-md">

            <h3 class="mt-3">List of Peoples</h3>
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