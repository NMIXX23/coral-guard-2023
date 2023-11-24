<section id="landing">
    <header>
        <a href="index.php">
            <img src="./assets/img/logo.png" alt="Logo">
        </a>
    </header>
    <h1>Welcome to</h1>
    <div class="button-group">
        <?php if (isset($_SESSION["member"])) : ?>

        <?php else : ?>
            <a href="login.php" class="button-primary">Login</a>
        <?php endif ?>
        <a href="?page=home" class="button-primary">Home</a>
    </div>
</section>