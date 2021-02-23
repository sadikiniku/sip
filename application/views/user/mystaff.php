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
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Jabatan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($userdt as $sm) : ?>
                        <?php if ($sm['head'] == '222') : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td class="text-left"><?= $sm['name']; ?></td>
                                <td><?= $sm['nip']; ?></td>
                                <td><?= $sm['role']; ?></td>
                                <td>
                                    <?php if ($sm['is_active'] == 1) : ?>
                                        <a href="<?= base_url('User/update_is_active/') . $sm['nip']; ?>/0" class="badge badge-success">Active</a>
                                    <?php elseif ($sm['is_active'] == 0) : ?>
                                        <a href="<?= base_url('User/update_is_active/') . $sm['nip']; ?>/1" class="badge badge-warning">Non-active</a>
                                    <?php endif; ?>
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