<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables in php</title>
</head>
<body>


<?php 
// initializing a variable
$student_fname = "Nuwan";
$student_lname = "Lakshitha";
$year = 1988;
$age = 2020 - $year;

echo $student_fname . '&nbsp;' . $student_lname . '<br>';
echo 'Age' . $age . '<br>';

//variables can hole one data at a time
$year = 1998;
$age = 2020 - $year;
echo 'Age' . $age;


$name = 'middleName';
$middleName = 'Praveen';
echo "<hr>";
echo $$name;//praveen will print



?>    

</body>
</html>