<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">
            Coral Guard
        </div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item <?php echo $_GET['page'] == "dashboard" ? 'active' : '' ?> ">
        <a class="nav-link" href="?page=dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Master
    </div>

    <?php if ($_GET["page"]  == "data-kategori" || $_GET["page"] == "tambah-kategori" || $_GET["page"] == "edit-kategori" || $_GET["page"] == "data-biodiversity" || $_GET["page"] == "data-tempat-adventure" || $_GET['page'] == "tambah-tempat-adventure" || $_GET["page"] == "edit-tempat-adventure" || $_GET["page"] == "data-jenis-bio" || $_GET['page'] == "tambah-jenis-bio" || $_GET["page"] == "edit-jenis-bio" ) : ?>
        <li class="nav-item active">
        <?php else : ?>
            <li class="nav-item">
            <?php endif ?>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#master" aria-expanded="true" aria-controls="master">
                <i class="fas fa-fw fa-bars"></i>
                <span>Master</span>
            </a>
            <?php if ($_GET["page"]  == "data-kategori" || $_GET["page"] == "tambah-kategori" || $_GET["page"] == "edit-kategori" || $_GET["page"] == "data-biodiversity" || $_GET["page"] == "data-tempat-adventure" || $_GET["page"] == "tambah-tempat-adventure" || $_GET["page"] == "edit-tempat-adventure" || $_GET["page"] == "data-jenis-bio" || $_GET["page"] == "tambah-jenis-bio" || $_GET["page"] == "edit-jenis-bio" ) : ?>
                <div id="master" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <?php else : ?>
                    <div id="master" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <?php endif ?>
                    <div class="bg-white py-2 collapse-inner rounded">
                        <?php if ($_GET['page'] == "data-kategori" || $_GET["page"] == "tambah-kategori" || $_GET['page'] == "edit-kategori" ) : ?>
                            <a class="collapse-item active" href="?page=data-kategori">
                                Kategori
                            </a>
                        <?php else : ?>
                            <a class="collapse-item" href="?page=data-kategori">
                                Kategori
                            </a>
                        <?php endif ?>

                        <?php if ($_GET["page"] == "data-biodiversity" || $_GET["page"] == "tambah-biodiversity" || $_GET["page"] == "edit-biodiversity" ) : ?>
                            <a class="collapse-item active" href="?page=data-biodiversity">
                                Biodiversity
                            </a>
                        <?php else : ?>
                            <a class="collapse-item" href="?page=data-biodiversity">
                                Biodiversity
                            </a>
                        <?php endif ?>

                        <?php if ($_GET["page"] == "data-jenis-bio" || $_GET["page"] == "tambah-jenis-bio" || $_GET["page"] == "edit-jenis-bio" ) : ?>
                        <a class="collapse-item active" href="?page=data-jenis-bio">
                            Jenis Bio
                        </a>
                        <?php else : ?>
                        <a class="collapse-item" href="?page=data-jenis-bio">
                            Jenis Bio
                        </a>
                        <?php endif ?>

                        <?php if ($_GET["page"] == "data-tempat-adventure" || $_GET["page"] == "tambah-tempat-adventure" || $_GET["page"] == "edit-tempat-adventure" ) : ?>
                            <a class="collapse-item active" href="?page=data-tempat-adventure">
                                Tempat Adventure
                            </a>
                        <?php else : ?>
                            <a class="collapse-item" href="?page=data-tempat-adventure">
                                Tempat Adventure
                            </a>
                        <?php endif ?>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Setting
            </div>

            <?php if ($_GET["page"] == "profil-saya" || $_GET["page"] == "ubah-password" ) : ?>
                <li class="nav-item active">
                <?php else : ?>
                    <li class="nav-item">
                    <?php endif ?>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pengaturan" aria-expanded="true" aria-controls="pengaturan">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Pengaturan</span>
                    </a>
                    <?php if ($_GET["page"] == "profil-saya" || $_GET["page"] == "ubah-password" ) : ?>
                        <div id="pengaturan" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <?php else : ?>
                            <div id="pengaturan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <?php endif ?>
                            <div class="bg-white py-2 collapse-inner rounded">
                                <?php if ($_GET['page'] == "profil-saya") : ?>
                                    <a class="collapse-item active" href="?page=profil-saya">
                                        Profil Saya
                                    </a>
                                <?php else : ?>
                                    <a class="collapse-item" href="?page=profil-saya">
                                        Profil Saya
                                    </a>
                                <?php endif ?>

                                <?php if ($_GET['page'] == "ubah-password") : ?>
                                    <a class="collapse-item active" href="?page=ubah-password">
                                        Ubah Password
                                    </a>
                                <?php else : ?>
                                    <a class="collapse-item" href="?page=ubah-password">
                                        Ubah Password
                                    </a>
                                <?php endif ?>
                            </div>
                        </div>
                    </li>

                    <hr class="sidebar-divider">

                    <div class="sidebar-heading">
                        Akun
                    </div>

                    <?php if ($_GET["page"] == "administrator" || $_GET["page"] == "tambah-administrator" || $_GET["page"] == "edit-administrator") : ?>
                    <li class="nav-item active">
                    <?php else : ?>
                        <li class="nav-item">
                    <?php endif ?>
                        <?php if($_GET["page"] == "administrator" || $_GET["page"] == "tambah-administrator" || $_GET["page"] == "edit-administrator" ) : ?>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                        <?php else : ?>
                            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                        <?php endif ?>
                            <i class="fas fa-fw fa-users"></i>
                            <span>Users</span>
                        </a>
                        <?php if ($_GET["page"] == "administrator" || $_GET["page"] == "tambah-administrator" || $_GET["page"] == "edit-administrator" ) : ?>
                        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <?php else : ?>
                            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <?php endif ?>
                            <div class="bg-white py-2 collapse-inner rounded">
                                <?php if ($_GET["page"] == "administrator" || $_GET["page"]  == "tambah-administrator" || $_GET["page"] == "edit-administrator" ) : ?>
                                <a class="collapse-item active" href="?page=administrator">
                                <?php else : ?>
                                    <a class="collapse-item" href="?page=administrator">
                                <?php endif ?>
                                    Administrator   
                                </a>
                                <a href="?page=validasi-data" class="collapse-item">
                                    Validasi Data
                                </a>
                            </div>
                        </div>
                    </li>

                    <hr class="sidebar-divider d-none d-md-block">

                    <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>

                </ul>