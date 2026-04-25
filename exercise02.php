<?php
header('Content-Type: text/html; charset=utf-8');

echo "<style>body {
    font-size: 30px; /* Standard default */
    line-height: 1.5; /* Improves readability */
}</style>";

$totalSeconds = 10000;    // int (จำลองข้อมูลเวลา 10,000 วินาที)

// คำนวณหา ชั่วโมง, นาที, และวินาทีที่เหลือ
// ใช้ floor() เพื่อปัดเศษทิ้ง (จำลองพฤติกรรม Integer division)
$hours = floor($totalSeconds / 3600);           // float (แต่ทำงานแบบจำนวนเต็ม)
$remainingAfterHours = $totalSeconds % 3600;    // int
$minutes = floor($remainingAfterHours / 60);    // float
$seconds = $remainingAfterHours % 60;           // int

echo "--- System Uptime ---<br>";
echo "Total Seconds: $totalSeconds<br>";
echo "Format (HH:MM:SS) -> {$hours}h : {$minutes}m : {$seconds}s<br>";
echo "--------------------------<br>";
?>