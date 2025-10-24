<?php
include 'temp/headr.php';
$s = 'select id_student from students where id_user = '.$_SESSION['id_user'];
$id_student = $conect->query($s)->fetch_assoc()['id_student'];

$sql = 'select * from lessons  
join StudentGroupsThrough on lessons.id_group = StudentGroupsThrough.id_group 
join courses on lessons.id_course = courses.id_course
join teachers on lessons.id_teacher  = teachers.id_teacher 
join users on users.id_user  = teachers.id_user 
where StudentGroupsThrough.id_student = '.$id_student;
$student = $conect->query($sql);
?>
<div>
    <div class="container">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Название дисциплины</th>
            <th scope="col">Номер кабинета</th>
            <th scope="col">Дата занятия</th>
            <th scope="col">Тип занятия</th>
            <th scope="col">Преподователь</th>
            <th>Подробнее</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $student->fetch_assoc()){?>
                <?
                    $current_date_time = date('Y-m-d H:i:s');
                    $f = false;
                    if( $current_date_time >= $row['date_lesson']){
                        $f = true;
                    }
                ?>
            <tr <? if(!$f){?> class='text-success' <?php }else{ ?> class='text-danger' <?php } ?>>
                <th scope="row"><?=$row['name_cour']?></th>
                <td><?=$row['audien']?></td>
                <td><?=$row['date_lesson']?></td>
                <td>лекция</td>
                <td><?=$row['fio']?></td>
                <td>
                    <a href="detailt_lesson.php?id_lesson=<?=$row['id_lesson']?>">Ссылка</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    </div>
<div class="d-flex justify-content-center align-items-center">
    <a href="">Сылка на видео урок.</a>
</div>
</div>
<?php
include 'temp/footer.php';
?>