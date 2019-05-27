 <?php

//include_once "include/validation.php";
include_once "Include/Database.php";

$test = new Database();
?>

<?php
if (isset($_POST['submit'])) {

    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $code = $_POST['code'];
    $unit = $_POST['unit'];
    $department = $_POST['department'];
    $ca = $_POST['ca'];
    $exam = $_POST['exam'];

    $test1 = $test->insert('courses', $roll, $name, $code, $unit, $department, $ca, $exam);
    
    if ($test == true) {
	 header("Location: all_students.php");
	 exit();
	}
}


?>
