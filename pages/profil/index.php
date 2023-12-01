<?php

if (!isset($_SESSION['login']) || !$_SESSION['login']) return header('location: ./login.php');

$city = [
    'Jakarta',
    'Bandung',
    'Surabaya',
    'Semarang'
];

$province = [
    [
        "id" => 1,
        "name" => "DKI Jakarta"
    ],
    [
        "id" => 2,
        "name" => "Jawa Barat"
    ],
    [
        "id" => 3,
        "name" => "Jawa Tengah"
    ],
    [
        "id" => 4,
        "name" => "Jawa Timru"
    ]
    // 'DKI Jakarta',
    // 'Jawa Barat',
    // 'Jawa Tengah',
    // 'Jawa Timur'
];

$actor = [
    [
        "id" => 1,
        "name" => "Ahli"
    ],
    [
        "id" => 2,
        "name" => "Warga"
    ],
    [
        "id" => 3,
        "name" => "Nelayan"
    ]
];

$id_member = $_SESSION["id_member"];

$query = $con->query("SELECT t_member.*, t_users.username, t_users.email, t_users.role, t_users.active, t_users.nomor_hp, t_users.photo FROM t_member LEFT JOIN t_users ON t_member.user_id = t_users.id WHERE t_member.user_id = '$id_member' ");

$data = $query->fetch_assoc();
?>
<section id="profile">

    <?php include "pages/partials/sidebar.php" ?>

    <div class="content">
        <div class="profile-head mb-5">
            <h1>Edit Profile</h1>
            <img src="./images/<?= $_SESSION['photo'] ?>" alt="photo profile" width="50" height="50" class="rounded-circle object-fit-cover" />
        </div>

        <div class="profile-form">
            <form method="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control custom-input" placeholder="First Name" autocomplete="off" required value="<?= $data["first_name"] ?? '' ?>">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control custom-input" placeholder="Last Name" required value="<?= $data["last_name"] ?? '' ?>">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="actor">Actor</label>
                            <select name="actor" id="actor" class="form-control custom-input" <?= $data['actor'] != null ? 'disabled' : '' ?>>
                                <option value="">--Pilih--</option>
                                <option value="1" <?= $data['actor'] == 1 ? 'selected' : '' ?>>Ahli</option>
                                <option value="2" <?= $data['actor'] == 2 ? 'selected' : '' ?>>Warga</option>
                                <option value="3" <?= $data['actor'] == 3 ? 'selected' : '' ?>>Nelayan</option>
                            </select>
                            <?php if ($data['actor'] == null) : ?>
                                <div class="form-text">Hanya dapat dipilih sekali.</div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <?php $readonly = isset($_SESSION['member']) && $_SESSION['member'] ? 'readonly' : '' ?>
                            <input type="email" name="email" id="email" class="form-control custom-input" placeholder="Email" autocomplete="off" required value="<?= $data['email'] ?? '' ?>" <?= $readonly ?>>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="username">Usename</label>
                            <input type="username" name="username" id="username" class="form-control custom-input" placeholder="Username" autocomplete="off" required value="<?= $data['username'] ?? '' ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="address">Address</label>
                    <textarea type="text" name="address" id="address" class="form-control custom-input" placeholder="Address" autocomplete="off" required><?= $data['address'] ?? '' ?></textarea>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="contact">Contact Number</label>
                            <input type="text" name="contact" id="contact" class="form-control custom-input" placeholder="Contact Number" value="<?= $data['nomor_hp'] ?? '' ?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="photo">Change Photo Profile</label>
                            <input type="file" name="photo" id="photo" class="form-control custom-input">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city">City</label>
                            <select name="city" id="city" class="form-control custom-input" required>
                                <option value="">--Pilih--</option>
                                <?php foreach ($city as $cityName) : ?>
                                    <?php $selectCity = $data['city'] == $cityName ? 'selected' : '' ?>
                                    <option value="<?= $cityName ?>" <?= $selectCity ?>>
                                        <?= $cityName ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="province">Province</label>
                            <select name="province" id="province" class="form-control custom-input" required>
                                <option value="">--Pilih--</option>
                                <?php foreach ($province as $provinceName) : ?>
                                    <?php $selectProvince = $data['province'] == $provinceName['id'] ? 'selected' : '' ?>
                                    <option value="<?= $provinceName["id"] ?>" <?= $selectProvince ?>>
                                        <?= $provinceName["name"] ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <?php if ($_SESSION['login']) : ?>
                        <button class="button-cancel">Cancel</button>
                        <button type="submit" class="button-save" name="save">Save</button>
                    <?php else : ?>
                        <a href="?page=home" class="btn btn-primary">
                            Explore
                        </a>
                    <?php endif ?>
                </div>
            </form>
        </div>
    </div>
</section>

<?php

if (isset($_POST['save'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST["last_name"];
    $username = $_POST["username"];
    $actor = $_POST["actor"] ?? $data['actor'];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $city = $_POST["city"];
    $province = $_POST["province"];
    $photo = $_FILES['photo']['name'];
    $photo_url = $data['photo'] ?? 'default.jpeg';

    if ($photo != '' && $photo != null) {
        $targetDir = 'images/';
        $filename = 'photo-profile/user' . $_SESSION['id_member'];
        $ext = strtolower(pathinfo($photo, PATHINFO_EXTENSION));
        $targetFile = "{$targetDir}{$filename}.{$ext}";

        $allowedFormats = array("jpg", "jpeg", "png"); // Allow certain file formats
        if (!in_array($ext, $allowedFormats)) {
            echo "<script>alert('Maaf, hanya file JPG, JPEG, dan PNG yang diperbolehkan.');</script>";
            echo "<script>window.location.replace('?page=profil-saya');</script>";
        } else if ($_FILES["file"]["size"] > 2000) { // Check file size (max 2MB)
            echo "<script>alert('Maaf, ukuran file terlalu besar.');</script>";
            echo "<script>window.location.replace('?page=profil-saya');</script>";
        }

        // Upload file
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
            $photo_url = $filename . "." . $ext;
        } else {
            echo "<script>alert('Maaf, terjadi kesalahan saat mengupload file.');</script>";
            echo "<script>window.location.replace('?page=profil-saya');</script>";
        }
    }

    // start transactions
    $con->begin_transaction();
    try {
        $updateUser = $con->query("UPDATE t_users SET nomor_hp = '$contact', username = '$username', photo='$photo_url' WHERE id = '$id_member' ");

        $updateMember = $con->query("UPDATE t_member SET first_name = '$first_name', last_name = '$last_name', address = '$address', city = '$city', province = '$province', actor = '$actor' WHERE user_id = '$id_member' ");

        $update = $con->commit();
    } catch (mysqli_sql_exception $e) {
        $con->rollback();

        throw $e;
    }


    if ($update) {
        $_SESSION['username'] = $username;
        $_SESSION['photo'] = $photo_url;
        echo "<script>alert('Profil Anda Berhasil di Perbaharui');</script>";
    } else {
        echo "<script>alert('Profil Anda Gagal di Perbaharui');</script>";
    }
    echo "<script>window.location.replace('?page=profil-saya');</script>";
}

?>