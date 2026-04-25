<?php
echo "<style>body {
    font-size: 30px; /* Standard default */
    line-height: 1.5; /* Improves readability */
}</style>";
// เขียนฟังก์ชันแบบปกติ
function calculateArea($width, $length) {
    return $width * $length;
}

echo "--- โปรแกรมคำนวณพื้นที่สี่เหลี่ยม ---<br>";

echo "ป้อน 'ความกว้าง' (หน่วยเต็ม): ";
$wInput = $_GET["width"];
$w = (int)$wInput;
echo "> กว้าง: $w<br>";

echo "ป้อน 'ความยาว' (หน่วยเต็ม): ";
$lInput = $_GET["length"];
$l = (int)$lInput;
echo "> ยาว: $l<br><br>";

$totalArea = calculateArea($w, $l);

echo "-----------------------<br>";
echo "พื้นที่สี่เหลี่ยมคือ: $totalArea ตารางหน่วย<br>";
echo "วิธีใช้: เติม ?width=10&length=20 ที่ท้าย URL<br>";
echo "จบการทำงาน<br>";
?>