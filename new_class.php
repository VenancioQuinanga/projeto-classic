<?php
$rf  = '- Nova Classe';
session_start();
include_once __DIR__."/./models/model_class.php";
include_once __DIR__."/./components/header.php";
?>

<div class="container">
    <div class="wrapper">
        <div id="msg"><?=$_SESSION['record_class_msg'];$_SESSION['record_class_msg'] = ''?></div>
    </div>
<div class="wrapper">
    <form action="<?= $uri?>new_class.php" method="Post" class="control">
        <div class="form-control">
            <h1>Cadastrar Nova Classe</h1>
                <div class="input-box">
                    <label for="class">Classe</label>
                    <input type="text" name="class[]" placeholder="Qual é a nova classe?" required>
                    <button type="button" id="add">+</button>
                </div>
        </div>
        <div class="input-box">
                <input type="submit" name="record_class" value="Cadastrar" class="btn" id="sigin">
        </div>
    </form>
</div>
</div>

<script src="./assets/js/add_input3.js"></script>
