<?php
 $rf  = '- Novo Curso';
 session_start();
 include_once __DIR__."/./models/model_course.php";
include_once __DIR__."/./components/header.php";
?>

<div class="container">
    <div class="wrapper">
        <div id="msg"><?=$_SESSION['record_course_msg'];$_SESSION['record_course_msg'] = ''?></div>
    </div>
<div class="wrapper">
    <form action="<?= $uri?>new_course.php" method="Post" class="control">
        <div class="form-control">
            <h1>Cadastrar Novo Curso</h1>
                <div class="input-box">
                    <label for="course">Curso</label>
                    <input type="text" name="course[]" placeholder="Qual é o novo curso?" required>
                    <button type="button" id="add">+</button>
                </div>
        </div>
        <div class="input-box">
                <input type="submit" name="record_course" value="Cadastrar" class="btn" id="sigin">
        </div>
    </form>
</div>
</div>

<script src="./assets/js/add_input3.js"></script>
