<?php
include 'temp/headr.php';
$s = 'select id_teacher from teachers where id_user = '.$_SESSION['id_user'];
$id_teacher = $conect->query($s)->fetch_assoc()['id_teacher'];
$sql_courses = 'select * from courses where id_teacher = '.$id_teacher;
$select_courses = $conect->query($sql_courses);


$sql_group = 'select * from studentgroups';
$select_groups = $conect->query($sql_group);


$sql_assignment= 'select * from tepy_lesson';
$select_assignment = $conect->query($sql_assignment);

if(isset($_POST['sheld'])){
    $date = $_POST['date'];
    $id_course = $_POST['id_course'];
    $id_group = $_POST['id_group'];
    $id_assignment = $_POST['id_assignment'];
    $link = $_POST['link'];
    $kabinet = $_POST['kabinet'];

    $sql = 'insert into lessons (date_lesson,audien,link,id_tepy_les,id_teacher,id_group,id_course) values ("'.$date.'","'.$kabinet.'","'.$link.'","'.$id_assignment.'","'.$id_teacher.'","'.$id_group.'","'.$id_course.'")';
    if($conect->query($sql)){
        echo 'Урок добавлен!';
    }

}

$sql_select = 'select * from lessons 
join courses  on courses.id_course = lessons.id_course
join studentgroups  on studentgroups.id_group  = lessons.id_group 
join tepy_lesson  on tepy_lesson.id_tepy_les   = lessons.id_tepy_les  

where lessons.id_teacher = "'.$id_teacher.'"';
$sql_select_tech=  $conect->query($sql_select);

if(isset($_POST['delete'])){
    $id_lesson = $_POST['id_lesson'];

    $sql_delet = 'delete from lessons where id_lesson = "'.$id_lesson.'"';
    
    $conect->query($sql_delet);
    header('LOcation: ../schedule_expose.php');
    exit;
}
?>
<div class="container mt-4 mb-3 border border-warning border-3 rounded">
   <h2 class="text-center">Расписание студента</h2>
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Введите дату</label>
                <input type="date" class="form-control" name='date'>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Выбрать десциплину</label>
                <select name='id_course' class="form-select" >
                    <?php while($row = $select_courses->fetch_assoc()): ?>
                        <option value="<?=$row['id_course']?>"><?=$row['name_cour']?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Выбрать группу</label>
                 <select name='id_group' class="form-select" >
                    <?php while($row = $select_groups->fetch_assoc()): ?>
                        <option value="<?=$row['id_group']?>"><?=$row['name_group']?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Выбрать тип работы</label>
               <select name='id_assignment' class="form-select" >
                    <?php while($row = $select_assignment->fetch_assoc()): ?>
                        <option value="<?=$row['id_tepy_les']?>"><?=$row['name_lesson']?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="kabinet" class="form-label">Введите кабинет</label>
                <input type="number" name='kabinet' class="form-control" id="kabinet" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ссылка на источник</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name='link'>
            </div>
            <button type="submit" name="sheld" class="btn btn-dark text-warning">Добавить</button>
        </form>
</div>
<div>
    <div class="container">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Дата обучения</th>
            <th scope="col">Выбор дисциплины</th>
            <th scope="col">Группа</th>
            <th scope="col">Тип работы</th>
            <th scope="col">Номер кабинета</th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $sql_select_tech->fetch_assoc()){?>
            <tr>
                <th scope="row"><?=$row['date_lesson']?></th>
                <td><?=$row['name_cour']?></td>
                <td><?=$row['name_group']?></td>
                <td><?=$row['name_lesson']?></td>
                <td><?=$row['audien']?></td>
                <td>
                        <input type="hidden" name="id_lesson" value="<?=$row['id_lesson']?>">
                        <button type="submit" name="lesson" class="btn btn-dark text-warning"
                        onclick="update_lessons(<?=$row['id_lesson']?>,'<?=$row['date_lesson']?>',<?=$row['audien']?>)"
                         data-bs-toggle="modal" data-bs-target="#modalUpdateSchedule">Изменить</button>
                
            </td>
            <td>
                <form method="post">
                        <input type="hidden" name="id_lesson" value="<?=$row['id_lesson']?>">
                        <button type="submit" name="delete" class="btn btn-danger">Удалить</button>
                </form>
            </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    </div>
</div>
<?php
include 'temp/footer.php';
?>