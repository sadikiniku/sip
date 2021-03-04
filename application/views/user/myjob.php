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
                        <th>Batas Waktu</th>
                        <th>Pencapaian (%)</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($jobavailable as $sm) : ?>
                        <?php if ($sm['employe'] == $user['nip']) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td class="text-left"><?= $sm['job']; ?></td>
                                <td><?= $sm['name']; ?></td>
                                <td><?= $sm['deadline']; ?></td>
                                <td>
                                    <div role="button" class="col-md-12" data-toggle="modal" data-target="#editmodal<?= $sm['id_job']; ?>">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated
                                                        <?php if($sm['progress'] < 100 && $sm['progress'] > 75) echo 'bg-warning' ?>
                                                        <?php if($sm['progress'] < 75 && $sm['progress'] > 50) echo 'bg-info' ?>
                                                        <?php if($sm['progress'] < 25 && $sm['progress'] > 0) echo 'bg-danger' ?>
                                                        <?php if($sm['progress'] == 100 ) echo 'bg-success' ?>
                                                        " role="progressbar" style="width: <?php echo $sm['progress']?>%" aria-valuenow="<?php echo $sm['progress'] ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $sm['progress'] ?>%</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <?php if ($sm['status'] == 0) : ?>
                                        <div class="dropdown">
                                            <button class="btn badge-primary btn-sm dropdown-toggle col-md-7 text-right" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                proses
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="<?= base_url('User/update_status/') . $sm['id_job']; ?>/1">tunda</a>
                                                <a class="dropdown-item" href="<?= base_url('User/update_status/') . $sm['id_job']; ?>/2">selesai</a>
                                            </div>
                                        </div>
                                    <?php elseif ($sm['status'] == 1) : ?>
                                        <div class="dropdown">
                                            <button class="btn badge-warning btn-sm dropdown-toggle col-md-7 text-right" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                tunda
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="<?= base_url('User/update_status/') . $sm['id_job']; ?>/0">proses</a>
                                                <a class="dropdown-item" href="<?= base_url('User/update_status/') . $sm['id_job']; ?>/2">selesai</a>
                                            </div>
                                        </div>
                                    <?php elseif ($sm['status'] == 2) : ?>
                                        <div class="dropdown">
                                            <button class="btn badge-success btn-sm dropdown-toggle col-md-7 text-right" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                selesai
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="<?= base_url('User/update_status/') . $sm['id_job']; ?>/0">proses</a>
                                                <a class="dropdown-item" href="<?= base_url('User/update_status/') . $sm['id_job']; ?>/1">tunda</a>
                                            </div>
                                        </div>
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


<?php foreach ($jobavailable as $sm) : ?>
    <div class="modal fade js-form-tugas" id="editmodal<?= $sm['id_job']; ?>" tabindex="-1" role="dialog" aria-labelledby="editmodalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Perbarui Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('User/update_progress/') . $sm['id_job']; ?>" method="POST">
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Pencapaian : <span class="js-progress-percent"><?= $sm['progress']; ?></span> %</label>
                            <input type="range" class="form-control-range js-input-progress" id="progress" min="0" max="100" name="progress" value="<?= $sm['progress']; ?>">
<!--                            <input id="ex8" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14"/>-->
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>



