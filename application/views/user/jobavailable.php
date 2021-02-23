<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
<!-- DataTales Example -->
<div class="row card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Pekerjaan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center table-sm" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Dari</th>
                        <th>Tanggal</th>
                        <th>Batas Waktu</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($jobavailable as $sm) : ?>
                        <?php if ($sm['employe'] == '') : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td class="text-left"><?= $sm['job']; ?></td>
                                <td><?= $sm['name']; ?></td>
                                <td><?= $sm['date_created']; ?></td>
                                <td><?= $sm['deadline']; ?></td>
                                <td class="text-left"><?= $sm['info']; ?></td>
                                <td>
                                    <a href="<?= base_url('User/accept_job/') . $sm['id_job']; ?>/<?= $user['nip']; ?>" class="badge badge-success">Terima</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>