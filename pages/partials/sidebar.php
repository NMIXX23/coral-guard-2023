<div class="sidebar">
    <div class="menu-sidebar">
        <h5>
            <a href="?page=home" style="text-decoration: none; color: black;">
                <i class="fa fa-chevron-left ml-5"></i> Setting
            </a>
        </h5>

        <ul>
            <li>
                <?php if (isset($_GET['page']) && $_GET["page"] == "profil-saya") : ?>
                    <a style="color: red; font-weight: bold;" href="?page=profil-saya">
                <?php else : ?>
                    <a href="?page=profil-saya">
                <?php endif ?>
                    <i class="fa fa-pen ml-5"></i> Edit Profile
                </a>
            </li>
            <li>
                <?php if (isset($_GET["page"]) && $_GET["page"] == "password-reset" ) : ?>
                <a style="color: red; font-weight: bold;" href="?page=password-reset">
                <?php else : ?>
                    <a href="?page=password-reset">
                <?php endif ?>
                    <i class="fa fa-lock ml-5"></i> Security
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-question-circle ml-5"></i> Help
                </a>
            </li>
            <li class="logout">
                <a href="?page=logout">
                    <i class="fa fa-sign-out-alt ml-5"></i> Logout
                </a>
            </li>
        </ul>
    </div>
    <div class="bottom"></div>
</div>