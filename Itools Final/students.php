<?php require_once('database.php');

function add_student($first_name, $last_name, $phone, $pass){
    global $db;
    $query = 'INSERT INTO students
                (firstName, lastName, passW, phoneNumber)
            VALUES
                (:first_name, :last_name, :pass, :phone)';
    $statement = $db->prepare($query);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':pass', $pass);
    $statement->execute();
    $statement->closeCursor();
}
function get_student_by_id($id){
    global $db;
    $query = 'SELECT * FROM students WHERE studentID= :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id',$id);
    $statement->execute();
    $result = $statement->fetch();
    return $result;

}
function get_last_student(){
    global $db;
    $query = 'SELECT * FROM students WHERE studentID=(SELECT max(studentID) FROM students)';
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    return $result;
}
    ?>