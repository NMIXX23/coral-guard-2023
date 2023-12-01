<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success">
            Selamat Datang 
            <strong>
                <?php echo $_SESSION["username"] ?>
            </strong>
            di
            <strong>
                Website Coral Guard!
            </strong>
            <hr>
            Silahkan Pilih Menu Untuk Memulai Program.
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Administrator
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php
                            $query = "SELECT * FROM t_users WHERE role = 'ADMIN' ";
                            $fetch = $con->query($query);
                            $count = mysqli_num_rows($fetch);

                            echo $count;
                            ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                            Kategori
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php
                            $query = "SELECT * FROM t_kategori";
                            $fetch = $con->query($query);
                            $kategori = mysqli_num_rows($fetch);

                            echo $kategori;
                            ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-bars fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Member
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php
                            $query = "SELECT * FROM t_users WHERE role = 'MEMBER' ";
                            $fetch = $con->query($query);
                            $member = mysqli_num_rows($fetch);

                            echo $member;
                            ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>