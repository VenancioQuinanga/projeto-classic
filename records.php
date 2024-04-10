<?php
$rf  = '- Matriculas';
session_start();
include_once __DIR__."/./models/model_course.php";
include_once __DIR__."/./models/model_class.php";
include_once __DIR__."/./models/model_period.php";
include_once __DIR__."/./models/model_student.php";
include_once __DIR__."/./components/navbar.php";

?>

<div class="container">
    <div class="wrapper">
        <div><?=$_SESSION["record_student_msg"];$_SESSION["record_student_msg"] = '';?></div>
    </div>
    <div class="wrapper">
        <form action="./records.php" class="control" method="POST" enctype="multipart/form-data">
            <div class="form-control">
                <h1>Efetuar matricula</h1>
                <div class="input-box">
                    <label for="student">Estudante</label>
                    <input type="text" name="student" placeholder="Nome" required>
                </div>
                <div class="input-box">
                    <label for="photo">Foto</label>
                    <input type="file" accept="image/*" name="photo">
                </div>
                <div class="input-box">
                    <label for="tender">Encarregado</label>
                    <input type="text" name="tender" placeholder="Quem se encarrega da sua educação?" required>
                </div>
                <div class="input-box">
                    <label for="father">Pai</label>
                    <input type="text" name="father" placeholder="Como se chama seu pai?" required>
                </div>
                <div class="input-box">
                    <label for="mother">Mãe</label>
                    <input type="text" name="mother" placeholder="Como se chama sua mãe?" required>
                </div>
                <div class="input-box">
                    <label for="phone">Telefone</label>
                    <input type="number" name="phone" placeholder="Telefone do encarregado" required>
                </div>
                <div class="input-box">
                    <label for="phone">Telefone Alternativo</label>
                    <input type="number" name="alternative_phone" placeholder="Telefone do alternativo" required>
                </div>
                <div class="input-box">
                    <label for="nbi">N° do BI</label>
                    <input type="text" name="nbi" placeholder="Número de seu BI" required>
                </div>
                <div class="input-box">
                    <label for="birth">Data de nascimento</label>
                    <input type="date" name="birth" placeholder="Data de nascimento" required>
                </div>
                <div class="input-box">
                    <label for="see">Genero</label>
                    <select name="sex" required>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                </div>
                <div class="input-box">
                <label for="state">Estado</label>
                    <select name="state" required>
                            <option value="Luanda">Luanda</option>
                            <option value="Uíge">Uíge</option>
                            <option value="Zaire">Zaire</option>
                            <option value="Cabinda">Cabinda</option>
                            <option value="Bengo">Bengo</option>
                            <option value="Benguela">Benguela</option>
                            <option value="Malanje">Malanje</option>
                            <option value="Lunda Norte">Lunda Norte</option>
                            <option value="Lunda Sul">Lunda Sul</option>
                            <option value="Cuanza Norte">Cuanza Norte</option>
                            <option value="Cuanza Sul">Cuanza Sul</option>
                            <option value="Huíla">Huíla</option>
                            <option value="Bié">Bié</option>
                            <option value="Huambo">Huambo</option>
                            <option value="Cunene">Cunene</option>
                            <option value="Moxico">Moxico</option>
                            <option value="Cuando Cubango">Cuando Cubango</option>
                            <option value="Namibe">Namibe</option>
                    </select>
                </div>
                <div class="input-box">
                    <label for="city">Cidade</label>
                    <input type="text" name="city" placeholder="Cidade" required>
                </div>
                <div class="input-box">
                    <label for="ba">Bairro</label>
                    <input type="text" name="ba" placeholder="Qual é o seu Bairro?" required>
                </div>
                <div class="input-box">
                    <label for="dwelling">Morada</label>
                    <input type="text" name="dwelling" placeholder="Qual é a sua morada?" required>
                </div>
                <div class="input-box">
                    <label for="course">Curso</label>
                    <select name="course" required>
                    <?php foreach ($course as $c) : ?>
                            <option value="<?=$c['id'] ?>"><?=$c['course_name'] ?></option>
                    <?php endforeach; ?>   
                    </select>
                </div>
                <div class="input-box">
                    <label for="class">Classe</label>
                    <select name="class" required>
                    <?php foreach ($class as $c) : ?>
                            <option value="<?=$c['id'] ?>"><?=$c['class_name'] ?></option>
                    <?php endforeach; ?>   
                    </select>
                </div>
                <div class="input-box">
                    <label for="period">Período</label>
                    <select name="period" required>
                    <?php foreach ($period as $p) : ?>
                            <option value="<?=$p['id'] ?>"><?=$p['period_name'] ?></option>
                    <?php endforeach; ?>   
                    </select>
                </div>
                <div class="input-box">
                    <input type="submit" name="record_student" value="Matricular">
                </div>
            </div>
        </form>
    </div>
</div>

<?php
include_once __DIR__."/./components/footer.php";
?>