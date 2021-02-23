<form action="<?= base_url('User'); ?>" method="POST">
    <div class="row card bg-white mb-5">
        <div class="card-header bg-dark">Posting Berita</div>
        <div class="card-body">
            <div class="input-group">
                <textarea type="text" class="form-control" aria-label="With textarea" id="news" name="news" placeholder="Tulis berita disini"></textarea>
            </div>

            <div class="card-body text-right">
                <button type="submit" class="btn btn-primary">POST</button>
            </div>
        </div>
    </div>
</form>




<?php foreach ($news as $ro) : ?>
    <div class="row card bg-white mb-1">
        <div class="card-header bg-white"><?= $ro['name']; ?>
            <a href="#" class="fas fa-edit text-white text-muted" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Edit
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Delete
                </a>
            </div>

            <div class="text-muted font-sm"> <sup><?= $ro['time_berita']; ?></sup></div>
        </div>
        <div class="card-body">
            <p class="card-text mb-5"><?php echo $ro['berita']; ?></p>

            <div class="input-group">
                <input type="text" class="form-control form-control-user" id="komentar" name="komentar" placeholder="tulis komentar">
                <div class="input-group-append">
                    <a href="#" class="btn btn-primary"> Komentar</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>