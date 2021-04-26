<?php
require_once('database.php');

function get_courses(){
    global $db;
    $query = 'SELECT * FROM courses';
    $statement = $db->prepare($query);
    $statement->execute();
    $results = $statement->fetchAll();
    $statement->closeCursor();
    return $results;
}

function get_course_id($course_name){
    global $db;
    $query = 'SELECT courseID AS CID FROM courses
                WHERE courseName = :course_name';
    $statement = $db->prepare($query);
    $statement->bindValue(':course_name', $course_name);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    return $result;
}

function register_course($id, $course_name){
    global $db;
    $cid=get_course_id($course_name);
    $query = 'INSERT INTO registry (studentID, courseID, dateRegistered)
            VALUES (:id, :cid, CURRENT_TIMESTAMP)';
    $statement = $db->prepare($query);
    $statement->bindValue(':id',$id);
    $statement->bindValue(':cid',$cid['CID']);
    $statement->execute();
    $statement->closeCursor();
}
    ?>