<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9f329728c0.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <title>เมนูหลัก</title>
</head>

<body class="homeBg">
    <?php require("components/nav.php"); ?>

    <div class="mainMenu container">
        <div class="menu rounded-4" onclick="window.location.href='general.php'; ">
            <img src="assets/img/menu-1.png" alt="">
            <h5>ข้อมูลทั่วไป</h5>
        </div>
        <div class="menu rounded-4" onclick="window.location.href='security.php'; ">
            <img src="assets/img/menu-2.png" alt="">
            <h5>ความปลอดภัย</h5>
        </div>
        <div class="menu rounded-4" onclick="window.location.href='cncComponent.php'; ">
            <img src="assets/img/menu-3.png" alt="">
            <h5>องค์ประกอบเครื่อง CNC</h5>
        </div>
        <div class="menu rounded-4" onclick="window.location.href='program.php'; ">
            <img src="assets/img/menu-4.png" alt="">
            <h5>โปรแกรมที่ร่วมใช้ และการใช้งาน</h5>
        </div>
    </div>
    
    <!-- -----footer----------- -->
    <?php require("components/footer.php"); ?>
</body>

</html>