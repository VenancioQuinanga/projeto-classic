<?php
$rf  = '- Nova Turma';
session_start();
include_once __DIR__."/./models/model_course.php";
include_once __DIR__."/./models/model_class.php";
include_once __DIR__."/./models/model_period.php";
include_once __DIR__."/./models/model_sl.php";
include_once __DIR__."/./models/model_classmate.php";
include_once __DIR__."/./components/header.php";
?>

<div class="container">
    <div class="wrapper">
        <div id="msg"><?=$_SESSION['record_classmate_msg'];$_SESSION['record_classmate_msg'] = ''?></div>
    </div>
<div class="wrapper">
    <form action="<?= $uri?>new_classmate.php" method="Post" class="control">
        <div class="form-control">
            <h1>Cadastrar Nova Turma</h1>
            <div class="input-box">
                <label for="classmate">Nome</label>
                <input type="text" name="classmate" placeholder="Nome da turma" required>
            </div>
            <div class="input-box">
                    <label for="course">Curso</label>
                    <select name="course" required>
                    <?php foreach ($course as $c) : ?>
                            <option value="<?= $c['id'] ?>"><?= $c['course_name'] ?></option>
                    <?php endforeach; ?>   
                    </select>
                </div>
                <div class="input-box">
                    <label for="class">Classe</label>
                    <select name="class" required>
                        <?php foreach ($class as $c) : ?>
                            <option value="<?= $c['id'] ?>"><?= $c['class_name'] ?></option>
                        <?php endforeach; ?>   
                    </select>
                </div>
                <div class="input-box">
                    <label for="period">Período</label>
                    <select name="period" required>
                    <?php foreach ($period as $p) : ?>
                            <option value="<?= $p['id'] ?>"><?= $p['period_name'] ?></option>
                    <?php endforeach; ?>   
                    </select>
                </div>
                <div class="input-box">
                    <label for="sl">Sala</label>
                    <select name="sl" required>
                    <?php foreach ($sl as $s) : ?>
                            <option value="<?= $s['id'] ?>"><?= $s['sl_number'] ?></option>
                    <?php endforeach; ?>   
                    </select>
                </div>
                <div class="input-box">
                <input type="submit" name="record_classmate" value="Cadastrar" class="btn" id="sigin">
            </div>
        </div>
    </form>
</div>
</div>
