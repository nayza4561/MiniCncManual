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
    <title>โปรแกรมที่ร่วมใช้</title>
</head>

<body>
    <?php require("components/nav.php"); ?>
    <!-- banner***** -->

    <div class="programBanner text-white p-3 text-center">
        <p>โปรแกรมที่ร่วมใช้ และการใช้งาน</p>
    </div>

    <!-- ----------- คำอธิบาย ------------- -->

    <div class="container">
        <p class="mt-5 fs-5 detail-text">
            การผลิตชิ้นงานจะถูกควบคุมด้วย Controller ไม่ว่าจะเป็นระยะของการทำงาน การเคลื่อนที่ในแกน X, Y, Z จะถูกคำนวณและสั่งการชุดคำสั่งที่เรียกว่า G-code ตั้งแต่ขั้นต้นจนสิ้นสุดการทำงาน Controller ที่ใช้ควบคุมเครื่องซีเอ็นซี เดิมถือเป็นฮาร์ดแวร์ตัวหนึ่งที่สามารถแปลงข้อมูลให้อยู่ในรูปแบบรหัสคำสั่ง G-code (เป็นภาษามาตรฐานที่เครื่องจักรสามารถอ่านได้) รวมทั้งควบคุมตำแหน่ง, ทิศทาง, ความเร็วในการทำงานของเครื่อง ซึ่งมีความซับซ้อนและราคาสูง การซ่อมบำรุงต้องเสียค่าใช้จ่ายสูง
        </p>
        <p class="mt-2 fs-5 detail-text">
            แต่ปัจจุบัน เราสามารถทำให้ Controller ดังกล่าวมีราคาถูกลง โดยนำ พีซีคอมพิวเตอร์มาเป็น Controller ได้ ซึ่งโปรแกรมที่ใช้ควบคุม ได้แก่ PC CNC Software, K Cam, Linux EMC CNC, Artcam, Grbl controll candle หรืออาจโปรแกรมคอนโทรลเลอร์ตัวอื่น
        </p>
    </div>

    <!-- ------------- flex 2 โปรแกรม ------------ -->

    <div class="programWrapper">

            <!-- ********* Artcam 2018 ********** -->
        <div class="selectWrapper shadow p-3 my-3 border w-100">
            <div>
                <img class="imageProgram" src="https://sun9-15.userapi.com/impf/c849432/v849432928/172b2a/8AYlqj0_meE.jpg?size=604x340&quality=96&sign=e81885e31ba4b9d721e3a304c13ce0d8&c_uniq_tag=aH-Sj9HsF3Q9KvJOveNMXYPIXgXfCbmI4POT-7sEJ9M&type=album">
            </div>
            <div class="d-flex flex-column gap-1">
                <div class="d-flex gap-2 align-items-center">
                    <img class="iconProgram" src="data:image/jpeg;base64,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">
                    <h4>Autodesk Artcam Premium 2018</h4>
                </div>
                <p class="fs-5">โปรแกรมสำหรับอออกแบบตัวชิ้นงาน (Model) และจำลองการกัด</p>
                <span>
                    <a href="program-1.php" class="linkButton">วิธีการใช้งาน</a>
                </span>
            </div>
        </div>
            <!-- ********* Grblcontrol candles ********** -->
        <div class="selectWrapper shadow p-3 my-3 border w-100">
            <div>
                <img class="imageProgram" src="https://cncphilosophy.com/wp-content/uploads/2020/05/candle-featured.jpg">
            </div>
            <div class="d-flex flex-column gap-1">
                <div class="d-flex gap-2 align-items-center">
                    <img class="iconProgram" src="assets/img/grblIcon.jpg">
                    <h4>Grblcontrol Candle</h4>
                </div>
                <p class="fs-5">โปรแกรมสำหรับควบคุมเครื่อง Mini Cnc</p>
                <span>
                    <a href="program-2.php" class="linkButton">วิธีการใช้งาน</a>
                </span>
            </div>
        </div>

    </div>
    <!-- -----footer----------- -->
    <?php require("components/footer.php"); ?>
</body>

</html>