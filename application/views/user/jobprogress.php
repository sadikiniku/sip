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
                        <th>#</th>
                        <th>Judul</th>
                        <th>Pekerja</th>
                        <th>Batas Waktu</th>
                        <th>Pencapaian (%)</th>
<!--                        <th>Status</th>-->
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($jobemploye as $sm) : ?>
                        <?php if ($sm['role_id'] >= $user['role_id']) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td class="text-left">
                                    <a href="" data-toggle="modal" data-target="#exampleModal<?= $sm['id_job'] ?>"><?= $sm['job']; ?></a>
                                </td>
                                <td><?= $sm['name']; ?></td>
                                <td><?= $sm['deadline']; ?></td>
                                <td>
                                    <?php if ($sm['status'] == 0) : ?>
                                        <a href="" class="badge badge-primary"> <?= $sm['progress']; ?> %</a>
                                    <?php elseif ($sm['status'] == 1) : ?>
                                        <a href="" class="badge badge-warning"> <?= $sm['progress']; ?> %</a>
                                    <?php elseif ($sm['status'] == 2) : ?>
                                        <a href="" class="badge badge-success"> <?= $sm['progress']; ?> %</a>
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

<!-- Modal -->
<?php foreach ($jobemploye as $sm) : ?>
    <div class="modal fade" id="exampleModal<?= $sm['id_job'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail: <?= $sm['job'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="">Keterangan:</label>
                        </div>
                        <div class="form-group">
                            <label for="">Masih dalam tahap pengembangan</label>
                        </div>

                        <!--
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
-->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>