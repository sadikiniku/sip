<div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">

                <h5 class="card-title"><?= $user['name']; ?>
                    <a href="#" class="fas fa-edit text-white text-muted" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                </h5>

                <?php foreach ($userdt as $sm) : ?>
                    <?php if ($sm['nip'] == $user['nip']) : ?>
                        <div class="card-text"><small class="text-muted">NIP : <?= $user['nip']; ?></small></div>
                        <div class="card-text"><small class="text-muted">Jabatan : <?= $sm['role']; ?></small></div>
                        <div class="card-text"><small class="text-muted">E-mail : <?= $sm['email']; ?></small></div>
                        <div class="card-text"><small class="text-muted">Tempat, Tanggal Lahir : <?= $sm['birthday']; ?></small></div>
                        <div class="card-text"><small class="text-muted">Alamat : <?= $sm['address']; ?></small></div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>