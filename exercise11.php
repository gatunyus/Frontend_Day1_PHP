<?php
header('Content-Type: text/html; charset=utf-8');

echo "<style>body {
    font-size: 30px; /* Standard default */
    line-height: 1.5; /* Improves readability */
}</style>";

$mae = 2;                // int (ตัวเลขแม่สูตรคูณ)

echo "--- แม่ $mae Loop ---<br>";
// ใช้ For Loop วนรอบจาก 1 ถึง 12
for ($i = 1; $i <= 12; $i++) {
    echo "$mae x $i = " . ($mae * $i) . "<br>"; // แสดงผลการคูณ
}

echo "--- แม่ $mae While---<br>";
$i = 1;                  // int (ตัวแปรนับรอบเริ่มที่ 1)
while ($i <= 12) {
    echo "$mae x $i = " . ($mae * $i) . "<br>";
    $i++;                // เพิ่มค่าตัวแปรนับรอบทีละ 1
}
echo "--------------------------<br>";
?>