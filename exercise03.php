<?php
header('Content-Type: text/html; charset=utf-8');

echo "<style>body {
    font-size: 30px; /* Standard default */
    line-height: 1.5; /* Improves readability */
}</style>";

$myBool = true;          // bool (Boolean)
$myString = 'A';         // string (ใน PHP แม้ตัวเดียวก็คือ string)
$myInt = 32000;          // int (จำนวนเต็ม)

echo "--- สำรวจชนิดข้อมูลใน PHP ---<br>";
// ใช้ gettype() เพื่อดูชนิดข้อมูล
echo "1. myBool เป็นชนิด: " . gettype($myBool) . "<br>";
echo "2. myString เป็นชนิด: " . gettype($myString) . " (ความยาว " . strlen($myString) . " ตัวอักษร)<br>";
echo "3. myInt เป็นชนิด: " . gettype($myInt) . "<br>";
echo "--------------------------<br>";

echo "Exercise 4 : String Parsing<br>";

$rawData1 = "125";       // string
$rawData2 = "36.75";     // string

// แปลง String เป็น Int และ Float
$parsedInt = intval($rawData1);     // int (แปลงเป็นจำนวนเต็ม)
$parsedFloat = floatval($rawData2); // float (แปลงเป็นทศนิยม)

echo "--- ทดสอบการแปลงข้อความเป็นตัวเลข ---<br>";
echo "ข้อมูลดิบ 1 (String): $rawData1<br>";
echo "แปลงเป็น Int แล้วลองบวก 10: " . ($parsedInt + 10) . "<br>";

echo "-----------------------------------<br>";
echo "ข้อมูลดิบ 2 (String): $rawData2<br>";
echo "แปลงเป็น Float แล้วลองบวก 1.5: " . ($parsedFloat + 1.5) . "<br>";
echo "--------------------------<br>";
?>