<nav id="navBar" class="d-flex flex-row justify-content-between align-items-center px-4 <?php if ($_SERVER["PHP_SELF"] == "/minicncmanual/contact.php" || $_SERVER["PHP_SELF"] == "/MiniCncManual/contact.php") {
    echo "bg-dark";
} else if ($_SERVER["PHP_SELF"] == "/minicncmanual/cncComponent.php" || $_SERVER["PHP_SELF"] == "/MiniCncManual/cncComponent.php") {
    echo "bg-dark";
} else {
    echo "";
} ?>">

    <div class="d-flex flex-row align-items-center gap-4">

        <!-- ************ เมนูสำหรับหน้า cncComponent ************ -->

        <?php if ($_SERVER["PHP_SELF"] == "/MiniCncManual/cncComponent.php" || $_SERVER["PHP_SELF"] == "/minicncmanual/cncComponent.php") : ?>
            <div id="leftMenubtn" onclick="slideMenu()" hidden>
                <i class="fa-solid fa-bars"></i>
            </div>
        <?php else : ?>
            <div></div>
        <?php endif ?>

        <a href="<?php if ($_SERVER["PHP_SELF"] == "/MiniCncManual/index.php" || $_SERVER["PHP_SELF"] == "/minicncmanual/index.php") {
            echo "home.php";
        } else if ($_SERVER["PHP_SELF"] == "/MiniCncManual/home.php" || $_SERVER["PHP_SELF"] == "/minicncmanual/home.php") {
            echo "index.php";
        } else {
            echo "home.php";
        } ?>" class="text-decoration-none text-light">
            <h2 class="mb-0">
                <?php if ($_SERVER["PHP_SELF"] == "/MiniCncManual/index.php" || $_SERVER["PHP_SELF"] == "/minicncmanual/index.php") : ?>
                    <span>หน้าหลัก</span>
                <?php else : ?>
                    <span>หน้าแรก</span>
                <?php endif ?>    
            </h2>
        </a>
    </div>

    <div id="navMenu" class="align-items-center">
        <a href="home.php" class="menu-nav">Main menu</a>
        <a href="contact.php" class="menu-nav">Contact Us</a>
    </div>
</nav>

<script src="assets/js/navBar.js"></script>