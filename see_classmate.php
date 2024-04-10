<?php
 $rf  = '- Alunos';
include_once __DIR__."/./models/db.php";
include_once __DIR__."/./components/navbar.php";

if(!empty($_GET['classmate_id'])){
    $id = $_GET['classmate_id'];
    $course_id = $_GET['course_id'];
    $class_id = $_GET['class_id'];
    $period_id = $_GET['period_id'];
    $sl_id = $_GET['sl_id'];
    $tot = 0;

    $stmt = $conn->query("SELECT * FROM classmate WHERE id = '$id' ");
    $classmate = $stmt->fetch();

    $stmt = $conn->query("SELECT course_name FROM course WHERE id = '$course_id'");
    $course = $stmt->fetch();

    $stmt = $conn->query("SELECT class_name FROM class WHERE id = '$class_id'");
    $class = $stmt->fetch();

    $stmt = $conn->query("SELECT period_name FROM period WHERE id = '$period_id'");
    $period = $stmt->fetch();

    $stmt = $conn->query("SELECT sl_number FROM sl WHERE id = '$sl_id'");
    $sl = $stmt->fetch();

    $stmt = $conn->query("SELECT * FROM student WHERE classmate_id = '$id' ORDER BY student_name");
    $student = $stmt->fetchAll();

    foreach ($student as  $s) {
        $tot++;
    }

}

?>

<div class="container">

<noscript>
    <!-- 

<div class="table">
    <table>
        <tbody>
            <tr>
                <td class="students"><span style="font-weight:bold;">Turma</span></td>
                <td></td>
                <td></td>
                <td class="right"><?=$classmate['classmate_name'] ?></td>
            </tr>
            <tr>
                <td class="students"><span style="font-weight:bold;">Curso</span></td>
                <td></td>
                <td></td>
                <td class="right"><?=$course['course_name'] ?></td>
            </tr>
            <tr>
                <td class="students"><span style="font-weight:bold;">Classe</span></td>
                <td></td>
                <td></td>
                <td class="right"><?=$class['class_name'] ?></td>
            </tr>
            <tr>
                <td class="students"><span style="font-weight:bold;">Período</span></td>
                <td></td>
                <td></td>
                <td class="right"><?=$period['period_name'] ?></td>
            </tr>
            <tr>
                <td class="students"><span style="font-weight:bold;">Sala</span></td>
                <td></td>
                <td></td>
                <td class="right"><?=$sl['sl_number'] ?></td>
            </tr>
            <tr>
                <td class="left"><span style="font-weight:bold;">Total de estudantes</span></td>
                <td></td>
                <td></td>
                <td class="right"><?=$tot ?></td>
            </tr>
        </tbody>
    </table>
</div>
    
--->
</noscript>

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Turma</th>
                <th>Curso</th>
                <th>Classe</th>
                <th>Periodo</th>
                <th>Sala</th>
                <th>Total de Estudantes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$classmate['classmate_name'] ?></td>
                <td><?=$course['course_name'] ?></td>
                <td><?=$class['class_name'] ?></td>
                <td><?=$period['period_name'] ?></td>
                <td><?=$sl['sl_number'] ?></td>
                <td><?=$tot ?></td>
            </tr>
        </tbody>
        <thead>
                <tr>
                    <th class="students">N°</th>
                    <th class="students">Foto</th>
                    <th>Nome</th>
                    <th class="category">Sexo</th>
                    <th>Ações</th>
                    <th></th>
                </tr>
            </thead>
            <tbory>
                <?php foreach ($student as $key => $s): ?>
                    <tr>
                    <td class="students"><?=($key + 1)?></td>
                    <td class="students"><img src="./assets/img/students/<?=$s['photo'] ?>" width='50' height='50' style="border-radius:100%;"></td>
                    <td><?=$s['student_name'] ?></td>
                    <td class="category"><?=$s['sex'] ?></td>
                    <td>  
                        <a href="see_student.php?student_id=<?=$s['id'] ?>&&address_id=<?=$s['address_id'] ?>&&classmate_id=<?=$s['classmate_id'] ?>" class="btn-primary">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                            </svg>
                            <span>ver</span>
                        </a>
                    </td>
                    <td>   
                        <a href="edit_student.php?student_id=<?=$s['id'] ?>&&address_id=<?=$s['address_id'] ?>&&classmate_id=<?=$s['classmate_id'] ?>" class="btn-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                            <span>editar</span>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>    
            </tbory>
    </table>
</div>
</div>

<?php
include_once __DIR__."/./components/footer.php";
?>
