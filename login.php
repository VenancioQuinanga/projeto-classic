<?php
 $rf  = '- Login';
include_once __DIR__."/./components/header.php";
?>

<div class="container">
<div class="wrapper">
    <form action="<?=$uri?>login.php" method="Post" class="control">
        <div class="form-control">
            <h1>Fazer login</h1>
            <div class="input-box">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <label for="email">Password</label>
                <input type="password" name="password" placeholder="Senha" required>
            </div>
            <div class="input-box">
                <input type="submit" name="sigin" value="Entrar" class="btn" id="sigin">
            </div>
            <div class="input-box">
                <a href="../registro"><input type="button" name="sigin_up" value="Criar conta" class="btn" id="sigin_up"></a>
            </div>
            <ul class="login-options">
                <li id="my-sigin-option-f" class="my-sigin-option"><a href="#">Esqueceu sua senha?</a></li>
            </ul>
        </div>
    </form>
</div>
</div>
