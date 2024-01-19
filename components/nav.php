<nav id="navBar" class="d-flex flex-row justify-content-between align-items-center px-4 <?php if ($_SERVER["PHP_SELF"] == "/minicncmanual/contact.php") {
    echo "bg-dark";
} else {
    echo "";
} ?>">
    <a href="index.php" class="text-decoration-none text-light">
        <h2 class="mb-0">หน้าหลัก</h2>
    </a>
    <div id="navMenu" class="align-items-center">
        <a href="contact.php" class="menu-nav">Contact</a>
        <a href="#" class="menu-nav">About</a>
    </div>
</nav>

<script src="assets/js/navBar.js"></script>