<?php
 $rf  = '- Novo Período';
 session_start();
 include_once __DIR__."/./models/model_period.php";
include_once __DIR__."/./components/header.php";
?>

<div class="container">
    <div class="wrapper">
        <div id="msg"><?=$_SESSION['record_period_msg'];$_SESSION['record_period_msg'] = ''?></div>
    </div>
<div class="wrapper">
    <form action="<?= $uri?>new_period.php" method="Post" class="control">
        <div class="form-control">
            <h1>Cadastrar Novo período</h1>
            <div class="input-box">
                <label for="period">Período</label>
                <input type="text" name="period[]" placeholder="Qual é o novo período?" required>
                <button type="button" id="add">+</button>
            </div>
        </div>
        <div class="input-box">
                <input type="submit" name="record_period" value="Cadastrar" class="btn" id="sigin">
        </div>
    </form>
</div>
</div>

<script src="./assets/js/add_input3.js"></script>
