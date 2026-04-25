<?php
header('Content-Type: text/html; charset=utf-8');

echo "<style>body {
    font-size: 30px; /* Standard default */
    line-height: 1.5; /* Improves readability */
}</style>";

$colorCode = 255;         // int (จำนวนเต็ม)
$myPi = 3.14159265;      // float (ทศนิยม)

echo "--- ลูกเล่นการแสดงผล (Print Formatting) ---<br>";
echo "[ ทดสอบเลขฐาน ]<br>";
echo "แบบฐานสิบ (DEC): " . $colorCode . "<br>";
echo "แบบฐานสิบหก (HEX): " . strtoupper(dechex($colorCode)) . "<br>";
echo "แบบฐานสอง (BIN): " . decbin($colorCode) . "<br>";

echo "<br>[ ทดสอบจุดทศนิยม ]<br>";
echo "ปริ้นแบบปกติ (Default): $myPi<br>";
printf("ปริ้น 1 ตำแหน่ง: %.1f<br>", $myPi);
printf("ปริ้น 4 ตำแหน่ง: %.4f<br>", $myPi);
printf("ปริ้น 6 ตำแหน่ง: %.6f<br>", $myPi);
echo "--------------------------<br>";
?>