
<?php

$studentName = "Shalu";
$studentAge = 20;

$hindi = 85;
$english = 78;
$mathematics = 92;
$science = 74;
$computer = 88;

$total = $hindi + $english + $mathematics + $science + $computer;

$percentage = $total / 500;

if ($percentage >= 50) {
    $result = "Pass";
} else {
    $result = "Fail";
}

if ($percentage >= 90) {
    $grade = "A+";
} elseif ($percentage >= 80) {
    $grade = "A";
} elseif ($percentage >= 70) {
    $grade = "B";
} elseif ($percentage >= 60) {
    $grade = "C";
} elseif ($percentage >= 50) {
    $grade = "D";
} else {
    $grade = "Fail";
}


if ($studentAge >= 18 && $percentage >= 60) {
    $admissionStatus = "Eligible for Admission";
} else {
    $admissionStatus = "Not Eligible for Admission";
}


echo "<h2>Student Result System</h2>";

echo "Student Name: " . $studentName . "<br>";
echo "Age: " . $studentAge . "<br>";
echo "Hindi: " . $hindi . "<br>";
echo "English: " . $english . "<br>";
echo "Mathematics: " . $mathematics . "<br>";
echo "Science: " . $science . "<br>";
echo "Computer: " . $computer . "<br>";

echo "Total: " . $total . " / 500<br>";
echo "Percentage: " . $percentage . "%<br>";
echo "Grade: " . $grade . "<br>";
echo "Result: " . $result . "<br>";
echo "Admission Status: " . $admissionStatus;


?>


