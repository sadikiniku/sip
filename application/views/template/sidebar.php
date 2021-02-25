        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('User'); ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-fw fa-thumbs-up"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SIP BBIHP</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>
            <?php if ($title == 'Dashboard') : ?>
                <li class="nav-item active">
                <?php else : ?>
                <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link" href="<?= base_url('User/dashboard'); ?>">
                    <i class="fas fa-fw fa-chart-line"></i>
                    <span>Dashboard</span></a>
                </li>

                <?php if ($title == 'News') : ?>
                    <li class="nav-item active">
                    <?php else : ?>
                    <li class="nav-item">
                    <?php endif; ?>
                    <a class="nav-link" href="<?= base_url('User'); ?>">
                        <i class="fas fa-fw fa-newspaper"></i>
                        <span>Berita</span></a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#profile" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-user-alt"></i>
                            <span>Profil</span>
                        </a>
                        <div id="profile" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">opsi:</h6>
                                <a class="collapse-item" href="<?= base_url('User/myprofile'); ?>">Profil Saya</a>
                                <?php if ($user['role_id'] != '4') : ?>
                                    <a class="collapse-item" href="<?= base_url('User/mystaff'); ?>">Daftar Anggota</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-briefcase"></i>
                            <span>Tugas</span>
                        </a>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">opsi:</h6>
                                <a class="collapse-item" href="<?= base_url('User/myjob'); ?>">Tugas Saya</a>
                                <?php if ($user['role_id'] != '1') : ?>
                                    <a class="collapse-item" href="<?= base_url('User/inputjob'); ?>">Tambakan Tugas</a>
                                <?php endif; ?>
                                <?php if ($user['role_id'] != '4') : ?>
                                    <a class="collapse-item" href="<?= base_url('User/jobprogress'); ?>">Progres Tugas</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>

                    <?php if ($title == 'Job Available') : ?>
                        <li class="nav-item active">
                        <?php else : ?>
                        <li class="nav-item">
                        <?php endif; ?>
                        <a class="nav-link" href="<?= base_url('User/jobavailable'); ?>">
                            <i class="fas fa-fw fa-business-time"></i>
                            <span>Tugas Tersedia</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-fw fa-exclamation-circle"></i>
                                <span>Saran dan Tindak Lanjut</span></a>
                        </li>

                        <!-- Divider -->
                        <hr class="sidebar-divider d-none d-md-block">

                        <!-- Sidebar Toggler (Sidebar) -->
                        <div class="text-center d-none d-md-inline">
                            <button class="rounded-circle border-0" id="sidebarToggle"></button>
                        </div>

        </ul>
        <!-- End of Sidebar -->