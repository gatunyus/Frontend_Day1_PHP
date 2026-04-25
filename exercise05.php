<?php
header('Content-Type: text/html; charset=utf-8');

echo "<style>body {
    font-size: 30px; /* Standard default */
    line-height: 1.5; /* Improves readability */
}</style>";

$numA = 10;              // int (ตัวตั้ง)
$numB = 3;               // int (ตัวหาร)

// ใน PHP การหารจะได้เป็นทศนิยมอัตโนมัติ หากต้องการจำลองแบบ C (ตัดทศนิยม) ต้องใช้ (int) หรือ intdiv()
$result1 = (int)($numA / $numB);    // int (แบบ Cast เป็น int เพื่อจำลอง int ใน C)
$result2 = $numA / $numB;           // float (หารปกติ ได้ทศนิยมเลย)

echo "--- การหารตัวเลข (Type Casting) ---<br>";
echo "โจทย์: 10 หาร 3<br>";
echo "ผลลัพธ์แบบที่ 1 (จำลอง int ของ C): " . number_format($result1, 2) . "<br>";
echo "ผลลัพธ์แบบที่ 2 (ได้ทศนิยมแบบ Float): " . number_format($result2, 2) . "<br>";
echo "--------------------------<br>";
?>