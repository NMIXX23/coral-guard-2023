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

    <?php if ($_SESSION["role"] == "TEMPAT") : ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#master" aria-expanded="true" aria-controls="master">
                <i class="fas fa-fw fa-edit"></i>
                <span>Tempat</span>
            </a>
            <div id="master" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="?page=data-tempat">
                        Data Tempat
                    </a>
                </div>
            </div>
        </li>
    <?php elseif($_SESSION["role"] == "PEMILIK") : ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#master" aria-expanded="true" aria-controls="master">
                <i class="fas fa-fw fa-edit"></i>
                <span>Coral</span>
            </a>
            <div id="master" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="?page=data-coral">
                        Data Coral
                    </a>
                    <a class="collapse-item" href="?page=data-jenis-bio">
                        Data Jenis Bio
                    </a>
                </div>
            </div>
        </li>
    <?php endif ?>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Setting
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pengaturan" aria-expanded="true" aria-controls="pengaturan">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pengaturan</span>
        </a>
        <div id="pengaturan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="?page=profil-saya">
                    Profil Saya
                </a>
                <a class="collapse-item" href="?page=profil-tempat">
                    Profil Tempat
                </a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>