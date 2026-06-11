<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* ตั้งค่าพื้นหลังและฟอนต์ให้ดูนุ่มนวล */
        body {
            font-family: 'Kanit', 'Chula', sans-serif;
            background-color: #f0f8ff; /* สีฟ้าพาสเทลอ่อน */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            color: #555;
        }

        /* ตกแต่งฟอร์มกรอกข้อมูล */
        form {
            background-color: #ffffff; /* สีขาว */
            border: 3px solid #ffb6c1; /* กรอบสีชมพูพาสเทล */
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.05);
            text-align: center;
            width: 300px;
            margin-bottom: 25px;
        }

        label {
            font-size: 18px;
            font-weight: bold;
            color: #87cefa; /* สีฟ้าพาสเทล */
            display: block;
            margin-bottom: 10px;
        }

        input[type="number"] {
            width: 80%;
            padding: 10px;
            border: 2px solid #ffe4e1;
            border-radius: 10px;
            font-size: 16px;
            text-align: center;
            outline: none;
            transition: 0.3s;
        }

        input[type="number"]:focus {
            border-color: #87cefa; /* เปลี่ยนเป็นสีฟ้าเวลาคลิก */
        }

        input[type="submit"] {
            background-color: #ffb6c1; /* ปุ่มสีชมพูพาสเทล */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 15px;
            transition: 0.3s;
            width: 88%;
        }

        input[type="submit"]:hover {
            background-color: #16070a; /* สีชมพูเข้มขึ้นเล็กน้อยเวลาเมาส์ชี้ */
            transform: scale(1.03);
        }

        /* กรอบครอบแม่สูตรคูณสุดน่ารัก */
        .result-box {
            background-color: #ffffff;
            border: 4px dashed #87cefa; /* กรอบเส้นประสีฟ้าพาสเทลสุดคิ้วท์ */
            border-radius: 25px;
            padding: 30px;
            width: 300px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.05);
            text-align: center;
            position: relative;
        }

        /* ตกแต่งหัวข้อสูตรคูณ */
        .result-box h2 {
            color: #ffb6c1; /* หัวข้อสีชมพู */
            margin-top: 0;
            margin-bottom: 20px;
            border-bottom: 2px dotted #ffe4e1;
            padding-bottom: 10px;
            font-size: 22px;
        }

        /* ตกแต่งตัวเลขสตรีมสูตรคูณ */
        .multiplication-line {
            font-size: 18px;
            line-height: 1.8;
            color: #666;
            font-weight: 500;
        }
    </style>
</head>
<body>

    <form action="" method="GET">
        <label for="num">เลขแม่สูตรคูณ</label>
        <input type="number" name="num" id="num" required>
        <input type="submit" value="คำนวณ">
    </form>

    <?php
    if(isset($_GET["num"])){
        $num = ($_GET["num"]);
        
        // เปิดกล่องครอบดีไซน์น่ารัก
        echo "<div class='result-box'>";
        echo "<h2>สูตรคูณแม่ " .$num. "</h2>";
        
        $i = 1;
        while ($i <= 12){
            // ใส่ class เพื่อจัดระเบียบตัวอักษรข้างใน
            echo "<div class='multiplication-line'>" . $num . " x " . $i . " = " . ($num * $i) . "</div>";
            $i++;
        }
        
        // ปิดกล่องครอบ
        echo "</div>";
    }
    ?>

</body>
</html>