<?php

function calculateHRA($basicSalary)
{
    return $basicSalary * 20 / 100;
}

function calculateDA($basicSalary)
{
    return $basicSalary * 10 / 100;
}

function calculateTA($basicSalary)
{
    return $basicSalary * 5 / 100;
}

function calculateBonus($basicSalary)
{
    return $basicSalary * 8 / 100;
}

function calculateNetSalary($grossSalary)
{
    if ($grossSalary >= 50000) {
        $deduction = $grossSalary * 10 / 100;
    } else {
        $deduction = $grossSalary * 5 / 100;
    }

    $netSalary = $grossSalary - $deduction;

    return [
        "deduction" => $deduction,
        "netSalary" => $netSalary
    ];
}

$employees = [

    [
        "name" => "Shalu",
        "age" => 20,
        "department" => "IT",
        "basicSalary" => 45000
    ],

    [
        "name" => "Rahul",
        "age" => 24,
        "department" => "HR",
        "basicSalary" => 35000
    ],

    [
        "name" => "Aman",
        "age" => 28,
        "department" => "Finance",
        "basicSalary" => 55000
    ]

];

foreach ($employees as $employee) {

    $basicSalary = $employee["basicSalary"];

    $hra = calculateHRA($basicSalary);
    $da = calculateDA($basicSalary);
    $ta = calculateTA($basicSalary);
    $bonus = calculateBonus($basicSalary);

    $grossSalary = $basicSalary + $hra + $da + $ta + $bonus;

    $salaryDetails = calculateNetSalary($grossSalary);

    $deduction = $salaryDetails["deduction"];
    $netSalary = $salaryDetails["netSalary"];

    echo "<h2>Employee Salary Details</h2>";

    echo "Employee Name: " . $employee["name"] . "<br>";
    echo "Age: " . $employee["age"] . "<br>";
    echo "Department: " . $employee["department"] . "<br>";
    echo "Basic Salary: ₹" . $basicSalary . "<br><br>";

    echo "HRA: ₹" . $hra . "<br>";
    echo "DA: ₹" . $da . "<br>";
    echo "TA: ₹" . $ta . "<br>";
    echo "Bonus: ₹" . $bonus . "<br>";
    echo "Gross Salary: ₹" . $grossSalary . "<br>";
    echo "Deduction: ₹" . $deduction . "<br>";
    echo "Net Salary: ₹" . $netSalary . "<br>";

}

?>