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
    <title>การป้องกันความปลอดภัย</title>
</head>

<body>
    <?php require("components/nav.php"); ?>
    <!-- banner***** -->

    <div class="securityBanner">
        <span>การป้องกันความปลอดภัยเบื้องต้นจากเครื่อง Mini CNC</span>
    </div>

    <!-- ***** main content ********** -->

    <div class="container my-5 d-flex flex-row gap-5 fs-3 py-5">
        <p class="securText">ก่อนเปิดเครื่องใช้งานควรเช็คระบบไฟฟ้าใกล้ตัวให้เรียบร้อย และเช็คตัวเครื่องข้อต่อในตัวเครื่องก่อนเปิดใช้งาน ตัวฐานชิ้นงานควรล็อคยืดกับ Working areaของตัวเครื่อง ให้แน่นเพื่อความปลอดภัย(Safe) ของตัวเครื่อง ตัวหัวกัด และความสวยงามของตัวชิ้นงาน</p>
        <p class="securText">เมื่อเครื่องเริ่มทำงานไม่ควรนำมือไปสัมผัสกับตัวฐานของชิ้นงานและตัวกัดและห้ามปิดตัวเครื่องกลางคัน จนกว่าจะสั่งหยุดการทำงาน หรือรอเครื่องดำเนินกระบวนการตามตัวแบบ(Modal)0จนเสร็จ เพระอาจจะเกิดอุบัติเหตุ(Accident)กับตัวผู้ใช้ และทำให้เกิดระบบขัดข้องได้</p>
    </div>
    <!-- -----footer----------- -->
    <?php require("components/footer.php"); ?>
</body>

</html>