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
    <title>Project CNC</title>
</head>

<body>
    <?php require("components/nav.php"); ?>
    <!-- left menu ***** -->

    <div id="leftMenu">
        <div class="d-flex flex-row align-items-center justify-content-between bg-dark text-light px-3">
            <h4 class="mb-0">เลือกหัวข้อ</h4>
            <div id="closeMenu" onclick="slideMenu()">
                <div class="d-flex align-items-center gap-1">
                    <span>Close</span>
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column">
            <div class="leftMenulist">ระบบควบคุมเครื่องจักร</div>
            <div class="leftMenulist" type="button" data-bs-toggle="collapse" data-bs-target="#menuCollapse">
                <span class="pe-3">ส่วนประกอบที่สำคัญ</span>
                <i class="fa-solid fa-arrow-down"></i>
            </div>
            <div class="d-flex flex-column">
                <div class="leftMenulist listDarker collapse" id="menuCollapse">แท่นเครื่อง</div>
                <div class="leftMenulist listDarker collapse" id="menuCollapse">หมอนรอง</div>
                <div class="leftMenulist listDarker collapse" id="menuCollapse">โต๊ะ</div>
                <div class="leftMenulist listDarker collapse" id="menuCollapse">ชุดสปินเดิ้ล</div>
                <div class="leftMenulist listDarker collapse" id="menuCollapse">ชุดขับแกนการเคลื่อนที่ต่าง ๆ</div>
            </div>
        </div>
    </div>

    <!-- ***************************** -->

    <div class="componentWrapper">
        <p>มีหน้าที่รับคำสั่งจากผู้ใช้ที่ป้อนข้อมูลให้ผ่านทางโปรแกรม และส่งคำสั่งนี้ต่อไปยังชุดเคลื่อนที่ และส่วนการทำงานอื่นๆ ให้ทำงานสัมพันธ์กับคำสั่ง</p>
        <h3>ชุดควบคุมคำสั่งประกอบด้วย</h3>
        <ul>
            <li>ชุดติดต่อกับผู้ใช้ เป็นส่วนทำหน้าที่สื่อสารระหว่างผู้ใช้กับเครื่องจักร รายงานสภาวะการทำงานต่างๆ ที่เกิดขึ้น เช่น ตำแหน่งของแกน ความเร็วรอบของแกน โดยชุดติดต่อกับผู้ใช้นี้ประกอบไปด้วย จอภาพ คีย์บอร์ด ปุ่มสวิตซ์ควบคุมการทำงานต่างๆ เช่น ความเร็วในการเคลื่อนที่ ความเร็วรอบ</li>
            <li>ชุดควบคุมเครื่องจักร ทำหน้าที่รับและจัดเก็บข้อมูลต่างๆ ที่รับมาจากชุดติดต่อกับผู้ใช้ แล้วทำการแปลงข้อมูลให้เป็นสัญญาณทางไฟฟ้า เพื่อส่งให้กับส่วนทำงานต่างๆ เช่น ชุดขับเคลื่อนแกน ( Stepper Motor, Servo motor ) โดยส่วนนี้จะประกอบด้วย ส่วนคำนวณ หรือ Microprocessor, หน่วยความจำ, ชุดขับแกน และสปินเดิ้ล รวมกับชุดควบคุมขั้นตอนการทำงาน</li>
        </ul>
    </div>
    
    <script src="assets/js/leftMenu.js"></script>
</html>