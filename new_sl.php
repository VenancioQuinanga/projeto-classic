<?php
 $rf  = '- Nova Sala';
 session_start();
 include_once __DIR__."/./models/model_sl.php";
include_once __DIR__."/./components/header.php";
?>

<div class="container">
<div class="wrapper">
    <div class="wrapper">
    <div id="msg"><?=$_SESSION['record_sl_msg'];$_SESSION['record_sl_msg'] = ''?></div>
    </div>
    <form action="<?= $uri?>new_sl.php" method="Post" class="control">
        <div class="form-control">
            <h1>Cadastrar Nova Sala</h1>
                <div class="input-box">
                    <label for="sl">Sala</label>
                    <input type="number" name="sl[]" placeholder="Qual é a nova sala?" required>
                    <button type="button" id="add">+</button>
                </div>
        </div>
        <div class="input-box">
                <input type="submit" name="record_sl" value="Cadastrar" class="btn" id="sigin">
        </div>
    </form>
</div>
</div>

<script src="./assets/js/add_input3.js"></script>

