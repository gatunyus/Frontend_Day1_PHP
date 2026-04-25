<?php
header('Content-Type: text/html; charset=utf-8');

echo "<style>body {
    font-size: 30px; /* Standard default */
    line-height: 1.5; /* Improves readability */
}</style>";

$score = 75;             // int (คะแนนสอบ)
 
echo "Score: $score<br>";
 
if ($score >= 80) {
  echo "Grade: A<br>";
} else if ($score >= 70 && $score < 80) {
  echo "Grade: B<br>";
} else {
  echo "Grade: C<br>";
}
echo "--------------------------<br>";
?>