<?php
header('Content-Type: text/html; charset=utf-8');

echo "<style>body {
    font-size: 30px; /* Standard default */
    line-height: 1.5; /* Improves readability */
}</style>";

$isDoorOpen = false;     // bool (สถานะประตู: ปิด)
$isWindowOpen = true;    // bool (สถานะหน้าต่าง: เปิด)

echo "--- Security Lock System ---<br>";

// ใช้เครื่องหมาย ! (NOT) ร่วมกับ OR (||) เพื่อตรวจสอบสถานะความปลอดภัย
if (!($isDoorOpen || $isWindowOpen)) {
    echo "System: ALL LOCKED. Safe to leave.<br>";
} else {
    echo "System: WARNING! Cannot lock. Check doors/windows.<br>";
}
echo "--------------------------<br>";
?>