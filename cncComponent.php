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
    <title>องค์ประกอบที่สำคัญของเครื่อง Mini CNC</title>
</head>

<body class="compBg">
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
            <div class="leftMenulist" id="sec1">ระบบควบคุมเครื่องจักร</div>
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
    <div class="responsiveBox">
        <!-- ------------- ระบบควบคุมเครื่องจักร -------------- -->
        
        <div class="componentWrapper" id="head1">
            <h1 class="text-center">ระบบควบคุมเครื่องจักร</h1>
            <p class="fs-5 text-jtf">มีหน้าที่รับคำสั่งจากผู้ใช้ที่ป้อนข้อมูลให้ผ่านทางโปรแกรม และส่งคำสั่งนี้ต่อไปยังชุดเคลื่อนที่ และส่วนการทำงานอื่นๆ ให้ทำงานสัมพันธ์กับคำสั่ง</p>
            <h3>ชุดควบคุมคำสั่งประกอบด้วย</h3>
            <ul class="fs-5">
                <li>
                    <p class="text-jtf">>
                        ชุดติดต่อกับผู้ใช้ เป็นส่วนทำหน้าที่สื่อสารระหว่างผู้ใช้กับเครื่องจักร รายงานสภาวะการทำงานต่างๆ ที่เกิดขึ้น เช่น ตำแหน่งของแกน ความเร็วรอบของแกน โดยชุดติดต่อกับผู้ใช้นี้ประกอบไปด้วย จอภาพ คีย์บอร์ด ปุ่มสวิตซ์ควบคุมการทำงานต่างๆ เช่น ความเร็วในการเคลื่อนที่ ความเร็วรอบ
                    </p>
                </li>
                <li>
                    <p class="text-jtf">>
                        ชุดควบคุมเครื่องจักร ทำหน้าที่รับและจัดเก็บข้อมูลต่างๆ ที่รับมาจากชุดติดต่อกับผู้ใช้ แล้วทำการแปลงข้อมูลให้เป็นสัญญาณทางไฟฟ้า เพื่อส่งให้กับส่วนทำงานต่างๆ เช่น ชุดขับเคลื่อนแกน ( Stepper Motor, Servo motor ) โดยส่วนนี้จะประกอบด้วย ส่วนคำนวณ หรือ Microprocessor, หน่วยความจำ, ชุดขับแกน และสปินเดิ้ล รวมกับชุดควบคุมขั้นตอนการทำงาน
                    </p>
                </li>
            </ul>
        </div>
    
        <!-- ------------- แท่นเครื่อง -------------- -->
        
        <div class="componentWrapper" id="head2" hidden>
            <h1 class="text-center">แท่นเครื่อง</h1>
            <p class="fs-5">
                แท่นเครื่อง ( Frame ) เป็นโครงสร้างหลักที่ทําหน้าที่รอบรับชิ้นส่วนต่างๆ ของเครื่องจักร
            </p>
            <p class="fs-3 fw-bold">รูปตัวอย่าง</p>
            <div class="d-flex justify-content-center">
                <img src="https://down-th.img.susercontent.com/file/890a3bfb9667c0cfa54423b8cf7f64ce" class="rounded">
            </div>
        </div>
        
        <!-- ------------- หมอนรอง -------------- -->
        
        <div class="componentWrapper" id="head3" hidden>
            <h1 class="text-center">หมอนรอง</h1>
            <p class="fs-5">หมอนรอง ( Saddle ) ใช้ต่อจากแท่นเครื่อง เพื่อติดตั้งแกนเคลื่อนที่ต่าง ๆ</h3>
            <h3 class="fw-bold">รูปตัวอย่าง</h3>
            <div class="d-flex justify-content-center">
                <img src="https://i.pinimg.com/736x/7e/0a/15/7e0a15df5e1fb452af33c75573ff7cb9.jpg" class="rounded">
            </div>
        </div>
        
        <!-- ------------- โต๊ะ -------------- -->
        
        <div class="componentWrapper" id="head4" hidden>
            <h1 class="text-center">โต๊ะ</h1>
            <p class="fs-5">โต๊ะ ( Table ) ใช้สำหรับวางหรือติดตั้งเครื่อง Mini CNC แนะนำให้เป็นโต๊ะเรียบที่ได้ระดับน้ำ</p>
            <h3 class="fw-bold">รูปตัวอย่าง</h3>
            <div class="d-flex justify-content-center">
                <img src="https://webapi.furinbox.com/media/catalog/product/cache/29b3f741dcafc528943c644b5c704259/4/0/400000274_c_Champ_Mo1_60cm_LW.JPG" class="rounded">
            </div>
        </div>
        
        <!-- ------------- ชุดสปินเดิ้ล -------------- -->
        
        <div class="componentWrapper" id="head5" hidden>
            <h1 class="text-center">ชุดสปินเดิ้ล</h1>
            <p class="fs-5">ชุดสปินเดิ้ล ( Spindle ) ใช้สําหรับติดตั้งมอเตอร์กับสปินเดิ้ลและชุดจับยึด Tool</h3>
            <h3 class="fw-bold">รูปตัวอย่าง</h3>
            <div class="d-flex justify-content-center">
                <img src="https://lzd-img-global.slatic.net/g/p/c423ba5615262aea73bb55f8d88b2869.jpg_720x720q80.jpg" class="rounded">
            </div>
        </div>
        
        <!-- ------------- ชุดขับแกนการเคลื่อนที่ต่าง ๆ -------------- -->
        
        <div class="componentWrapper" id="head6" hidden>
            <h1>ชุดขับแกนการเคลื่อนที่ต่าง ๆ</h1>
            <p class="fs-5">ชุดขับแกนการเคลื่อนที่ต่าง ๆ ประกอบด้วย</h3>
            <ul class="fs-5">
                <li>
                    <p class="text-jtf">
                        Stepper Motor หรือ Servo Motor มีหน้าที่รับคําสั่งทางไฟฟ้าจากชุดควบคุมแล้วมาแปลงเป็นการเคลื่อนที่ไปตามตําแหน่งนั้นๆ
                    </p>
                </li>
                <li>
                    <p class="text-jtf">
                        ชุดรายงานตําแหน่ง ( Position Feedback ) มีหน้าที่อ่านตําแหน่งของการเคลื่อนที่ต่างๆ แล้วส่งค่าไปให้ชุดควบคุม โดยทั่วไปจะนิยมใช้ Encoder หรือ Linear Scale
                    </p>
                </li>
                <li>
                    <p class="text-jtf">
                        ชุดรองเลื่อน ( Guide Way หรือ Slide Way ) เป็นชุดประคองให้แกนการเคลื่อนที่เคลื่อนที่เป็นเส้นตรงและให้ความแข็งแรงของการเคลื่อนที่ของ Table และ Spindle ขณะที่กําลังสร้างชิ้นงาน
                    </p>
                </li>
                <li>
                    <p class="text-jtf">
                        ชุดขับเคลื่อน ( Feed Screw, Ball Screw, Sling, Belt ) เป็นอุปกรณ์ที่แปลงการเคลื่อนที่เชิงมุมจาก Servo Motor ไปเป็นการเคลื่อนที่เชิงเส้น สามารถเลือกใช้งานได้ตามลักษณะงานที่มีความละเอียดและมีความแม่นยํา
                    </p>
                </li>
            </ul>
        </div>
    </div>

    <!-- -----footer----------- -->
    <?php require("components/footer.php"); ?>
</body>
    <script src="assets/js/leftMenu.js"></script>
</html>