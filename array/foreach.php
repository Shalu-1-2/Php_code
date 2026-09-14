<?php

  $student =[

  "name"=>"shalu",
  "age" =>20,
  "branch"=>"IT"

  ];

  $product=[
    "name"=>"Loptop",
    "Price"=>20000,
    "Brand"=>"HP"
  ];


  $students = [

    [
        "name" => "Shalu",
        "age" => 20,
        "branch" => "IT"
    ],

    [
        "name" => "Rahul",
        "age" => 21,
        "branch" => "CS"
    ],

    [
        "name" => "Anjali",
        "age" => 19,
        "branch" => "IT"
    ]

];

foreach($students as $student){
    echo "Name:  " . $student["name"] . "<br>";
    echo "age:  "  . $student["age"]."<br>";
    echo "branch: " .$student["branch"]."<br>";

}

foreach ($student as $key => $value) {
    echo $key . " : " . $value . "<br>";
}

foreach($product as $key => $value){
    echo $key .":".$value."<br>";

}

?>