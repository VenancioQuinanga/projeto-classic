<?php
include_once('db.php');
$success_icon = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check-circle-fill' viewBox='0 0 16 16'><path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/> </svg> ";
$info_icon = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16"> <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/> </svg>';

$_SESSION["record_student_msg"] = '';

if (isset($_POST['record_student'])) {
    
    $data = $_POST;
    $photo = empty( $_FILES['photo']['name']) ? 'default.png' :  $_FILES['photo']['name'];
    $student = $data["student"];
    $tender = $data["tender"];
    $father = $data["father"];
    $mother = $data["mother"];
    $phone = $data["phone"];
    $alternative_phone = $data["alternative_phone"];
    $nbi = $data["nbi"];
    $birth = $data["birth"];
    $sex = $data["sex"];
    $state = $data["state"];
    $city = $data["city"];
    $ba = $data["ba"];
    $dwelling = $data["dwelling"];
    $course_id = $data["course"];
    $class_id = $data["class"];
    $period_id = $data["period"];
    $alternative_phone = $data["alternative_phone"];
    $date = date('d/m/Y');

    $stmt = $conn->query("SELECT student_name FROM student WHERE student_name = '$student' ");
    $record_student = $stmt->fetch();
    
    if (empty($record_student)) {
        
        $stmt = $conn->query("INSERT INTO address (state,city,ba,dwelling) VALUES ('$state','$city','$ba','$dwelling') ");
        $address_id = $conn->lastInsertId();

        $stmt = $conn->query("SELECT id FROM classmate WHERE class_id = '$class_id' AND period_id = '$period_id' AND course_id = '$course_id' ");
        $classmate = $stmt->fetch();
        $classmate_id = $classmate['id'];

        $stmt = $conn->query("INSERT INTO student (photo,student_name,tender,father,mother,phone,alternative_phone,birth,sex,nbi,date,address_id,classmate_id) VALUES ('$photo','$student','$tender','$father','$mother','$phone','$alternative_phone','$birth','$sex','$nbi','$date','$address_id','$classmate_id')");

        if (isset($_FILES['photo']) && !empty($_FILES['photo'])) {

            if (move_uploaded_file($_FILES['photo']['tmp_name'],'./assets/img/students/'.$_FILES['photo']['name'])) {
    
            }
        }

        header("Location:". $uri . "students.php");

    }else {
        
        $_SESSION["record_student_msg"] = "<p class='btn-danger'><span>$info_icon</pan> Este estudante já existe</p>";

    }

}

?>
