
<?php


$studentNames = [
    "Shalu",
    "Shalini",
    "Yash",
    "Anjali",
    "Rahul"
];

echo "<h2>Student List</h2>";

foreach ($studentNames as $index => $name) {
    echo ($index + 1) . ". " . $name . "<br>";
}


$student = [
    "Name" => "Shalu",
    "Age" => 20,
    "Course" => "PHP",
    "City" => "Lucknow",
    "Marks" => 85
];

echo "<h2>Student Information</h2>";

echo "Name: " . $student["Name"] . "<br>";
echo "Age: " . $student["Age"] . "<br>";
echo "Course: " . $student["Course"] . "<br>";
echo "City: " . $student["City"] . "<br>";
echo "Marks: " . $student["Marks"] . "<br>";


function checkResult($marks)
{
    if ($marks >= 40) {
        return "Pass";
    } else {
        return "Fail";
    }
}


$students = [

    [
        "Name" => "Shalu",
        "Age" => 20,
        "Course" => "PHP",
        "Marks" => 85
    ],

    [
        "Name" => "Shalini",
        "Age" => 21,
        "Course" => "Java",
        "Marks" => 72
    ],

    [
        "Name" => "Yash",
        "Age" => 20,
        "Course" => "Python",
        "Marks" => 91
    ],

    [
        "Name" => "Anjali",
        "Age" => 19,
        "Course" => "Web Development",
        "Marks" => 35
    ],

    [
        "Name" => "Rahul",
        "Age" => 22,
        "Course" => "JavaScript",
        "Marks" => 58
    ]
];


echo "<h2>Student List</h2>";

foreach ($students as $index => $student) {

    $result = checkResult($student["Marks"]);

    echo ($index + 1) . ". ";
    echo $student["Name"] . " — ";
    echo $student["Age"] . " — ";
    echo $student["Course"] . " — ";
    echo $student["Marks"] . " — ";
    echo $result . "<br>";
}


?>