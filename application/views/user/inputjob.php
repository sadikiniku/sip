<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>

<!-- DataTales Example -->
<div class="row card shadow mb-4 list-job">
    <div class="card-header py-3">
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addjob">Tambahkan Pekerjaan</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center table-sm" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Batas Waktu</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($inputjob as $sm) : ?>
                        <?php if ($sm['nip'] == $user['nip']) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td class="text-left"><?= $sm['job']; ?></td>
                                <td><?= $sm['date_created']; ?></td>
                                <td><?= $sm['deadline']; ?></td>
                                <td class="text-left"><?= $sm['info']; ?></td>
                                <?php if ($sm['employe'] == '') : ?>
                                    <td>Belum Dikerjakan</td>
                                <?php else : ?>
                                    <td>Dikerjakan</td>
                                <?php endif; ?>
                                <td>
                                    <a type="button" class="badge badge-primary editModal" data-toggle="modal" data-target="#editmodal<?= $sm['id_job']; ?>">edit</a>
                                    <a href="<?= base_url('User/deljob'); ?>/<?= $sm['id_job']; ?>" class="badge badge-danger">delete</a>
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
<div class="modal fade" id="addjob" tabindex="-1" role="dialog" aria-labelledby="addjobLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">Tambahkan Pekerjaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form autocomplete="off" action="<?= base_url('User/inputjob'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" id="job" name="job" placeholder="Enter Judul">
                    </div>
                    <div class="form-group">
                        <label>Batas Waktu</label>
                        <input type="text" class="form-control" id="_deadline" name="_deadline" placeholder="Enter Batas Waktu">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" id="info" name="info" placeholder="Enter Keterangan"></input>
                    </div>
                    <div class="form-group">
                        <label>Assign Ke</label>
                        <select name="employee[]" multiple="multiple" class="form-contro select-js-select2" style="width: 100%">
                            <?php foreach ($userList as $ul) : ?>
                                <option value="<?php echo $ul['nip'] ?>"><?php echo $ul['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Edit Modal -->
<?php foreach ($inputjob as $sm) : ?>
    <div class="modal fade editmodal" data-url="<?= base_url('User/getUserJob') ?>" data-id="<?= $sm['id_job']; ?>" id="editmodal<?= $sm['id_job']; ?>" tabindex="-1" role="dialog" aria-labelledby="editmodalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Tambahkan Pekerjaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('User/editjob'); ?>/<?= $sm['id_job']; ?>" method="POST">
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" id="job" name="job" value="<?= $sm['job']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Batas Waktu</label>
                            <input type="text" class="form-control" id="__deadline" name="__deadline" value="<?= $sm['deadline']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" id="info" name="info" value="<?= $sm['info']; ?>"></input>
                        </div>
                        <div class="form-group">
                            <label>Assign Ke</label>
                            <select name="employee[]" multiple="multiple" class="form-contro select-js-select2" style="width: 100%">
                                <option></option>
                                <?php foreach ($userList as $ul) : ?>
                                    <option value="<?php echo $ul['nip'] ?>" <?php echo $sm['employe'] == $ul['nip'] ? 'selected' : '' ?>><?php echo $ul['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
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


<!--<script>-->
<!--    function getId(id){-->
<!--        var modal = $('#page-top').find('.list-job');-->
<!--       $('.editmodal').on('show.bs.modal', function(event) {-->
<!--           var _this = $(this);-->
<!--           $.ajax({-->
<!--               url: _this.data('url')-->
<!--               method: "POST",-->
<!--               data: function(params) {-->
<!--                   var country = _this.closest('.js-sensor-cleaning-form').find('.js-cleaning-country-select').val();-->
<!--                   return {-->
<!--                       q: params.term,-->
<!--                       country: country-->
<!--                   };-->
<!--               }-->
<!--               success: function( response ) {-->
<!--                  return {-->
<!--                      results: response.data-->
<!--                  }-->
<!--               },-->
<!--               // error: function(error) {-->
<!--               //     console.log(error);-->
<!--               //     //alert(error);-->
<!--               // }-->
<!--           });-->
<!--           alert(_this)-->
<!--        });-->
<!--    }-->
<!--</script>-->
