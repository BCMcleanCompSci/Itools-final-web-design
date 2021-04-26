<?php include 'header.php';
require_once('database.php');
require ('courses.php');
require ('students.php');
$id = null;
$pasword = null;
$course_name = null;

$id = filter_input(INPUT_POST, 'id',FILTER_VALIDATE_INT);
$passW = filter_input(INPUT_POST, 'passW');
$course_name = filter_input(INPUT_POST,'course');

if ($id == null || $passW== null || $course_name == null) {
    $error = "Invalid entries. Check all fields and try again.";
    include('error.php');
}else{
    $student = get_student_by_id($id);
    if (!isset($student)){
        $error = "That id does not exist. Check all fields and try again.";
        include('error.php');
    }elseif($student['passW']!=$passW){
        $error = "Id and password do not match. Check all fields and try again.";
        include('error.php');
    }else{
        register_course($id, $course_name); ?>
        <p> Thank you for registering. <br>
        One of our tutors will call you shortly to set up meeting times.<br>
        Now head back to the homepage if you wish to register another course.</p>
    <h2><a href="index.php">Home</a></h2>
<?php
    }
}
include 'footer.php'?>