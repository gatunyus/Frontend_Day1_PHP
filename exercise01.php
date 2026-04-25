<?php
header('Content-Type: text/html; charset=utf-8');
// ใน PHP ไม่จำเป็นต้องระบุชนิดข้อมูล (Dynamic Typing)
// ตัวแปรทุกตัวต้องขึ้นต้นด้วย $ 
echo "<style>body {
    font-size: 30px; /* Standard default */
    line-height: 1.5; /* Improves readability */
}</style>";

$myAge = 25;             // int (จำนวนเต็ม)
$bigNumber = 1500000;    // int (แทน long)
$ledPin = 13;            // int (แทน byte)
$myWeight = 65.5;        // float (ทศนิยม)
$precisePi = 3.14159;    // float (แทน double)
$myGrade = 'A';          // string (แทน char)
$myName = "PHP Developer"; // string
$isReady = true;         // bool (Boolean)

echo "--- เริ่มการทดสอบตัวแปร ---<br>";
// ใน PHP ใช้เครื่องหมายจุด (.) สำหรับต่อข้อความ (Concatenation) หรือใส่ตัวแปรใน "" ได้เลย
echo "1. ชื่อของฉันคือ (string): $myName<br>";
echo "2. อายุ (int): $myAge<br>";
echo "3. น้ำหนัก (float): $myWeight<br>";
echo "4. เกรดที่ได้ (string): $myGrade<br>";
echo "5. ขาพิน LED (int): $ledPin<br>";
echo "6. ค่า Pi (float): $precisePi<br>";
echo "7. ตัวเลขขนาดใหญ่ (int): $bigNumber<br>";
echo "8. สถานะความพร้อม (bool): " . ($isReady ? 1 : 0) . "<br>";
echo "--------------------------<br>";
?>
