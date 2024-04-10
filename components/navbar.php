<?php 
include_once("header.php");
?>
<header>
<nav id="navbar">
    <a><h1>Classic</h1></a>
    <ul>
        <li>
            <a href="./home.php" class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                </svg>
            </a>
        </li>
        <li>
            <a><img src="./assets/icons/menu-hamburguer.png" id="icon"></a>
        </li>
    </ul>
</nav>
<aside>
    <nav id="dropdown">
        <ul>
            <li class="myHidden"><a href="./records.php">Matriculas</a></li>
            <li class="myHidden"><a href="./new_classmate.php">Nova turma</a></li>
            <li class="myHidden"><a href="./new_course.php">Novo curso</a></li>
            <li class="myHidden"><a href="./new_class.php">Nova classe</a></li>
            <li class="myHidden"><a href="./new_period.php">Novo período</a></li>
            <!--<li class="myHidden"><a href="./classifications.php">Classificações</a></li>-->
            <li class="myHidden"><a href="./info.php">Registros</a></li>
            <li class="myHidden"><a href="./students.php">Estudantes</a></li>
            <li class="myHidden"><a href="./paies.php">Pagamentos</a></li>
        </ul>
    </nav>
</aside>
</header>
<script src="./assets/js/navbar1.js"></script>
