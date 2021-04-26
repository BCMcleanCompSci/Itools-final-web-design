<?php include 'header.php';
require_once('database.php');
require ('students.php');
$first_name = null;
$last_name = null;
$phone = null;
$passW = null;

$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$phone = filter_input(INPUT_POST, 'phone');
$passW = filter_input(INPUT_POST, 'pass');


if ($first_name == null || $last_name == null || $phone == null 
	|| $passW== null) {
    $error = "Invalid student data. Check all fields and try again.";
    include('error.php');
} else {
    add_student($first_name, $last_name, $phone, $passW);
    $added_student=get_last_student();?>
    <p> Thank you. Your student ID is
        <?php echo $added_student['studentID'];?>.<br>
        PLease remenber your ID and password.<br>
        Now head back to the homepage to register a course.</p>
    <h2><a href="index.php">Home</a>
 <?php   
}include 'footer.php'?>
