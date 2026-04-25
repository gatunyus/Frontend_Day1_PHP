<?php
header('Content-Type: text/html; charset=utf-8');

echo "<style>body {
    font-size: 30px; /* Standard default */
    line-height: 1.5; /* Improves readability */
}</style>";

echo "--- For Loop ---<br>";
// ลูปแบบกำหนดจำนวนรอบ (เริ่มที่ 3, ลดค่าลงเรื่อยๆ จนถึง 1)
for ($i = 3; $i > 0; $i--) {
    echo $i . "<br>";    // int
}

echo "--- While Loop ---<br>";
$count = 3;              // int (ตัวแปรนับถอยหลัง)
while ($count > 0) {
    echo $count . "<br>";
    $count--;            // ลดค่าตัวแปรลงทีละ 1
}
echo "Go!<br>";
echo "--------------------------<br>";
?>