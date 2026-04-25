<?php
header('Content-Type: text/html; charset=utf-8');

echo "<style>body {
    font-size: 30px; /* Standard default */
    line-height: 1.5; /* Improves readability */
}</style>";

$rawData1 = "125";       // string
$rawData2 = "36.75";     // string

// แปลง String เป็น Int และ Float
$parsedInt = intval($rawData1);     // int (แปลงจาก string เป็นจำนวนเต็ม)
$parsedFloat = floatval($rawData2); // float (แปลงจาก string เป็นทศนิยม)

echo "--- ทดสอบการแปลงข้อความเป็นตัวเลข ---<br>";
echo "ข้อมูลดิบ 1 (String): $rawData1<br>";
echo "แปลงเป็น Int แล้วลองบวก 10: " . ($parsedInt + 10) . "<br>";

echo "-----------------------------------<br>";
echo "ข้อมูลดิบ 2 (String): $rawData2<br>";
echo "แปลงเป็น Float แล้วลองบวก 1.5: " . ($parsedFloat + 1.5) . "<br>";
echo "--------------------------<br>";
?>