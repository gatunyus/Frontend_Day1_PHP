<?php
header('Content-Type: text/html; charset=utf-8');

echo "<style>body {
    font-size: 30px; /* Standard default */
    line-height: 1.5; /* Improves readability */
}</style>";

$temp = 38;             // int (อุณหภูมิ)

echo "Temperature : $temp<br>";

// ตรวจสอบเงื่อนไขอุณหภูมิโดยใช้ OR (||)
if ($temp < 20 || $temp > 35) {
    echo "Danger: Air conditioner needed!<br>";
} else {
    echo "Temperature OK<br>";
}
echo "--------------------------<br>";
?>