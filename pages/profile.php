<?php

    $city = [
        'Jakarta',
        'Bandung',
        'Surabaya',
        'Semarang'
    ];

    $province = [
        'DKI Jakarta',
        'Jawa Barat',
        'Jawa Tengah',
        'Jawa Timur'
    ];

    $actor = [
        'Ahli',
        'Warga',
        'Nelayan'
    ]
?>
<section id="profile">

    <?php include "pages/partials/sidebar" ?>

    <div class="content">
       <div class="profile-head">
            <h1>Edit Profile</h1>
            <img src="./assets/img/user.png" alt="" width="80" height="80" />
       </div>

       <div class="profile-form">
            <form action="" method="POST">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" name="firstname" class="form-control custom-input" placeholder="First Name">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name="lastname" class="form-control custom-input" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="city">Actor</label>
                            <select name="role" class="form-control custom-input">
                                <option value="">--Pilih--</option>
                                <?php
                                foreach ($actor as $actorName) {
                                    echo '<option value="' . $actorName . '">' . $actorName . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group>
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control custom-input" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Usename</label>
                            <input type="username" name="username" class="form-control custom-input" placeholder="Username">
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="">Address</label>
                    <textarea type="text" name="address" class="form-control custom-input" placeholder="Address"></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="">Contact Number</label>
                    <input type="text" name="contact" class="form-control custom-input" placeholder="Contact Number">
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city">City</label>
                            <select name="city" class="form-control custom-input">
                                <option value="">--Pilih--</option>
                                <?php
                                foreach ($city as $cityName) {
                                    echo '<option value="' . $cityName . '">' . $cityName . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="province">Province</label>
                            <select name="province" class="form-control custom-input">
                                <option value="">--Pilih--</option>
                                <?php
                                foreach ($province as $provinceName) {
                                    echo '<option value="' . $provinceName . '">' . $provinceName . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="form-group mb-3">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control custom-input" placeholder="Password">
                </div>

                <div class="form-group">
                    <button class="button-cancel">Cancel</button>
                    <button class="button-save" name="save" >Save</button>
                </div>
            </form>
       </div>
    </div>
</section>

<?php
if(isset($_POST['save'])) {
    $user->setId($userid);
    $user->setFirstName($_POST['firstname']);
    $user->setLastName($_POST['lastname']);
    $user->setEmail($_POST['email']);
    $user->setUsername($_POST['username']);
    $user->setContact($_POST['contact']);
    $user->setAddress($_POST['address']);
    $user->setCity($_POST['city']);
    $user->setProvince($_POST['province']);
    $user->setPassword($_POST['password']);
    $user->setRole($_POST['role']);
    
    $user->updateProfile();
}
?>