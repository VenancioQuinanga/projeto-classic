<?php
 $rf  = '- Alunos';
include_once __DIR__."/./models/db.php";
include_once __DIR__."/./components/navbar.php";

if(!empty($_GET['student_id'])){
    $id = $_GET['student_id'];
    $address_id = $_GET['address_id'];
    $address_id = $_GET['address_id'];
    $classmate_id = $_GET['classmate_id'];

    $stmt = $conn->query("SELECT * FROM classmate WHERE id = '$classmate_id' ");
    $classmate = $stmt->fetch();
    $course_id = $classmate['course_id'];
    $class_id = $classmate['class_id'];
    $period_id = $classmate['period_id'];
    $sl_id = $classmate['sl_id'];

    $stmt = $conn->query("SELECT course_name FROM course WHERE id = '$course_id'");
    $course = $stmt->fetch();

    $stmt = $conn->query("SELECT class_name FROM class WHERE id = '$class_id'");
    $class = $stmt->fetch();

    $stmt = $conn->query("SELECT period_name FROM period WHERE id = '$period_id'");
    $period = $stmt->fetch();

    $stmt = $conn->query("SELECT sl_number FROM sl WHERE id = '$sl_id'");
    $sl = $stmt->fetch();

    $stmt = $conn->query("SELECT * FROM student WHERE id = '$id' ");
    $student = $stmt->fetch();

    $stmt = $conn->query("SELECT * FROM address WHERE id = '$address_id' ");
    $address = $stmt->fetch();

}

?>

<div class="container">
    <div id="user_photo">
        <img src="./assets/img/students/<?=$student['photo']?>" width="300" height="300em" style="border-radius:100%;">
    </div>

<div class="table">
    <table style="width:100%;">
        <tbody>
            <tr>
                <td class="left"><span style="font-weight:bold;">Nome</span></td>
                <td></td>
                <td></td>
                <td><?=$student['student_name'] ?></td>
            </tr>
            <tr>
                <td class="left"><span style="font-weight:bold;">Sexo</span></td>
                <td></td>
                <td></td>
                <td><?=$student['sex'] ?></td>
            </tr>
            <tr>
                <td class="left"><span style="font-weight:bold;">Data de nascimento</span></td>
                <td></td>
                <td></td>
                <td><?=$student['birth'] ?></td>
            </tr>
            <tr>
                <td class="left"><span style="font-weight:bold;">Bilhete de identidade</span></td>
                <td></td>
                <td></td>
                <td><?=$student['nbi'] ?></td>
            </tr>
            <tr>
                <td class="left"><span style="font-weight:bold;">Encarregado</span></td>
                <td></td>
                <td></td>
                <td><?=$student['tender'] ?></td>
            </tr>
            <tr>
                <td class="left"><span style="font-weight:bold;">Pai</span></td>
                <td></td>
                <td></td>
                <td><?=$student['father'] ?></td>
            </tr>
            <tr>
                <td class="left"><span style="font-weight:bold;">Mãe</span></td>
                <td></td>
                <td></td>
                <td><?=$student['mother'] ?></td>
            </tr>
            <tr>
                <td class="left"><span style="font-weight:bold;">Telefone</span></td>
                <td></td>
                <td></td>
                <td><?=$student['phone'] ?></td>
            </tr>
            <tr>
                <td class="left"><span style="font-weight:bold;">Telefone alternativo</span></td>
                <td></td>
                <td></td>
                <td><?=$student['alternative_phone'] ?></td>
            </tr>
            <tr>
                <td class="left"><span style="font-weight:bold;">Estado </span></td>
                <td></td>
                <td></td>
                <td><?=$address['state'] ?></td>
            </tr>
            <tr>
                <td class="left"><span style="font-weight:bold;">Cidade </span></td>
                <td></td>
                <td></td>
                <td><?=$address['city'] ?></td>
            </tr>
            <tr>
                <td class="left"><span style="font-weight:bold;">Bairro </span></td>
                <td></td>
                <td></td>
                <td><?=$address['ba'] ?></td>
            </tr>
            <tr>
                <td class="left"><span style="font-weight:bold;">Morada</span></td>
                <td></td>
                <td></td>
                <td><?=$address['dwelling'] ?></td>
            </tr>
            <tr>
                <td class="left"><span style="font-weight:bold;">Turma</span></td>
                <td></td>
                <td></td>
                <td><?=$classmate['classmate_name'] ?></td>
            </tr>
            <tr>
                <td class="left"><span style="font-weight:bold;">Curso</span></td>
                <td></td>
                <td></td>
                <td><?=$course['course_name'] ?></td>
            </tr>
            <tr>
                <td class="left"><span style="font-weight:bold;">Classe</span></td>
                <td></td>
                <td></td>
                <td><?=$class['class_name'] ?></td>
            </tr>
            <tr>
                <td class="left"><span style="font-weight:bold;">Período</span></td>
                <td></td>
                <td></td>
                <td><?=$period['period_name'] ?></td>
            </tr>
            <tr>
                <td class="left"><span style="font-weight:bold;">Sala</span></td>
                <td></td>
                <td></td>
                <td><?=$sl['sl_number'] ?></td>
            </tr>
        </tbody>
    </table>
</div>
</div>

<?php
include_once __DIR__."/./components/footer.php";
?>
