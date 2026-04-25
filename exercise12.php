<?php
header('Content-Type: text/html; charset=utf-8');

echo "<style>body {
    font-size: 30px; /* Standard default */
    line-height: 1.5; /* Improves readability */
}</style>";

function calculateBMI($weight, $height) {
    // ป้องกันการหารด้วยศูนย์
    if ($height <= 0) return 0; 
    $bmi = $weight / ($height * $height); // float
    return $bmi;
}

function printHealthStatus($bmiValue) {
    if ($bmiValue <= 0) {
        echo "สถานะ: รอการกรอกข้อมูลที่ถูกต้อง<br>";
        return;
    }
    printf("ค่า BMI ของคุณคือ: %.2f<br>", $bmiValue);
    if ($bmiValue < 18.5) {
        echo "สถานะ: น้ำหนักน้อยเกินไป<br>";
    } else if ($bmiValue >= 18.5 && $bmiValue <= 24.9) {
        echo "สถานะ: น้ำหนักปกติ (สุขภาพดี)<br>";
    } else {
        echo "สถานะ: น้ำหนักเกิน/อ้วน<br>";
    }
}

echo "--- โปรแกรมคำนวณ BMI แบบโต้ตอบ ---<br>";

// ใช้ isset() ตรวจสอบว่ามีการส่งค่ามาใน URL หรือไม่
$weightInput = isset($_GET["weight"]) ? $_GET["weight"] : 0;
$heightInput = isset($_GET["height"]) ? $_GET["height"] : 0;

$myWeight = floatval($weightInput);      // float
$myHeight_cm = floatval($heightInput);   // float
$myHeight_m = $myHeight_cm / 100.0;      // float

echo "ป้อน น้ำหนักที่ของคุณ: " . sprintf("%.2f", $myWeight) . " kg<br>";
echo "ป้อร ส่วนสูงที่ของคุณ: " . sprintf("%.2f", $myHeight_cm) . " cm<br><br>";

// คำนวณและแสดงผล
if ($myWeight > 0 && $myHeight_m > 0) {
    $result = calculateBMI($myWeight, $myHeight_m);
    printHealthStatus($result);
} else {
    echo "<b>กรุณาระบุ weight และ height ใน URL</b><br>";
}

echo "<br>*ลองพิมพ์เติมท้าย URL เช่น: ?weight=80&height=180<br>";
echo "--------------------------<br>";
?>