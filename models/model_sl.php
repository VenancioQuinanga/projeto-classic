<?php
include_once('db.php');
$success_icon = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check-circle-fill' viewBox='0 0 16 16'><path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/> </svg> ";
$info_icon = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16"> <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/> </svg>';
$_SESSION["record_sl_msg"] = '';

$stmt = $conn->query("SELECT * FROM sl ORDER BY sl_number");
$sl = $stmt->fetchAll();

if (isset($_POST['record_sl'])) {
    $data = filter_input_array(INPUT_POST,FILTER_DEFAULT);
    
    foreach ($data['sl'] as $key => $value) {
        $number = $data['sl'][$key];
        $stmt = $conn->query("SELECT sl_number FROM sl WHERE sl_number = '$number' ");
        $record_sl = $stmt->fetch();

        if (!empty($record_sl)) {
            $sl = $data['sl'][$key];
            $_SESSION["record_sl_msg"] = "<p class='btn-danger'><span>$info_icon</pan> A sala número $sl já existe</p>";
        }

    }

    if (empty($_SESSION["record_sl_msg"])) {

        foreach ($data['sl'] as $key => $value) {
            $number = $data['sl'][$key];
            $stmt = $conn->query("INSERT INTO sl (sl_number) VALUES ('$number') ");

        }

        header("Location:". $uri . "info.php");

    }

}

?>
