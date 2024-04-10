<?php
 $rf  = '- Informações';
 session_start();
include_once __DIR__."/./models/model_course.php";
include_once __DIR__."/./models/model_class.php";
include_once __DIR__."/./models/model_period.php";
include_once __DIR__."/./models/model_sl.php";
include_once __DIR__."/./models/model_classmate.php";
include_once __DIR__."/./components/navbar.php";

?>

<div class="container">
<div class="table">
    <table>
        <thead>
                <tr>
                    <th>Turmas</th>
                    <th></th>
                    <th>Ações</th>
                    <th></th>
                </tr>
            </thead>
            <tbory>
                <?php foreach ($classmate as $c): ?>
                <tr>
                    <td><?=$c['classmate_name'] ?></td>
                    <td></td>
                    <td>  
                        <a href="see_classmate.php?classmate_id=<?=$c['id'] ?>&&course_id=<?=$c['course_id'] ?>&&class_id=<?=$c['class_id'] ?>&&period_id=<?=$c['period_id'] ?>&&sl_id=<?=$c['sl_id'] ?>" class="btn-primary">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                            </svg>
                            <span>ver</span>
                        </a>
                    </td>
                    <td>   
                        <a href="edit_classmate.php?classmate_id=<?=$c['id'] ?>&&course_id=<?=$c['course_id'] ?>&&class_id=<?=$c['class_id'] ?>&&period_id=<?=$c['period_id'] ?>&&sl_id=<?=$c['sl_id'] ?>" class="btn-warning">
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
<div class="table">
    <table>
        <thead>
                <tr>
                    <th>Cursos</th>
                    <th></th>
                    <th>Ações</th>
                    <th></th>
                </tr>
            </thead>
            <tbory>
                <?php foreach ($course as $c): ?>
                <tr>
                    <td><?=$c['course_name'] ?></td>
                    <td></td>
                    <td>  
                        <a href="see_course.php?course_id=<?=$c['id'] ?>" class="btn-primary">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                            </svg>
                            <span>ver</span>
                        </a>
                    </td>
                    <td>   
                        <a href="edit_course.php?course_id=<?=$c['id'] ?>" class="btn-warning">
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
<div class="table">
    <table>
        <thead>
                <tr>
                    <th>Classes</th>
                    <th></th>
                    <th>Ações</th>
                    <th></th>
                </tr>
            </thead>
            <tbory>
                <?php foreach ($class as $c): ?>
                <tr>
                    <td><?=$c['class_name'] ?></td>
                    <td></td>
                    <td>  
                        <a href="see_class.php?class_id=<?=$c['id']?>" class="btn-primary">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                            </svg>
                            <span>ver</span>
                        </a>
                    </td>
                    <td>   
                        <a href="edit_class.php?class_id=<?=$c['id']?>" class="btn-warning">
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
<div class="table">
    <table>
        <thead>
                <tr>
                    <th>Períodos</th>
                    <th></th>
                    <th>Ações</th>
                    <th></th>
                </tr>
            </thead>
            <tbory>
                <?php foreach ($period as $p): ?>
                <tr>
                    <td><?=$p['period_name'] ?></td>
                    <td></td>
                    <td>  
                        <a href="see_period.php?period_id=<?=$p['id'] ?>" class="btn-primary">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                            </svg>
                            <span>ver</span>
                        </a>
                    </td>
                    <td>   
                        <a href="edit_period.php?period_id=<?=$p['id'] ?>" class="btn-warning">
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
<div class="table">
    <table>
        <thead>
                <tr>
                    <th>Salas</th>
                    <th></th>
                    <th>Ações</th>
                    <th></th>
                </tr>
            </thead>
            <tbory>
                <?php foreach ($sl as $s): ?>
                <tr>
                    <td><?=$s['sl_number'] ?></td>
                    <td></td>
                    <td>  
                        <a href="see_sl.php?sl_id=<?=$s['id'] ?>" class="btn-primary">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                            </svg>
                            <span>ver</span>
                        </a>
                    </td>
                    <td>   
                        <a href="edit_sl.php?sl_id=<?=$c['id'] ?>" class="btn-warning">
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
