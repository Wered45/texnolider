<?php
include 'temp/headr.php';
$s = 'select id_teacher from teachers where id_user = '.$_SESSION['id_user'];
$id_teacher = $conect->query($s)->fetch_assoc()['id_teacher'];


if(isset($_POST['ochecka_btn'])){
    $student = $_POST['student'];
    $och = $_POST['och'];
    $course = $_POST['course'];
    $id_assignment = $_POST['id_assignment'];

    $sql_och = 'insert into grades (och, id_assignment, id_student, id_teacher, id_course) values ("'.$och.'", "'.$id_assignment.'", "'.$student.'", "'.$id_teacher.'", "'.$course.'")';
    $conect->query($sql_och);
    header('Location: ocenka_expose.php');
    exit;
}

$sql_student = 'select * from students 
join users on students.id_user = users.id_user';

$student = $conect->query($sql_student);

$sql_assignment = 'select * from assignment_types';
$assignments = $conect->query($sql_assignment);


$sql_courses = 'select * from courses where id_teacher = '.$id_teacher;
$courses = $conect->query($sql_courses);

$sql_och = 'select * from grades
join students on grades.id_student = students.id_student
join assignment_types on grades.id_assignment = assignment_types.id_assignment
join courses on grades.id_course = courses.id_course
join users on users.id_user = students.id_user where grades.id_teacher = '.$id_teacher;
$ochenka = $conect->query($sql_och);

?>
<div class="container mt-4 mb-3 border border-warning border-3 rounded">
   <h2 class="text-center">Выстовить оценки</h2>
        <form method="post">
            <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Выберети студента</label>
                <select class="form-select" name="student" aria-label="Default select example">
                    <?php while($row = $student->fetch_assoc()){?>
                    <option value="<?=$row['id_student']?>"><?=$row['fio']?></option>
                    <?php }?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Поставте оценку</label>
                <select class="form-select" name="och" aria-label="Default select example">
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Предмет</label>
              <select class="form-select" name="course" aria-label="Default select example">
                    <?php while($row = $courses->fetch_assoc()){?>
                    <option value="<?=$row['id_course']?>"><?=$row['name_cour']?></option>
                    <?php }?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Выберети тип работы</label>
                <select class="form-select" name="id_assignment" aria-label="Default select example">
                    <?php while($row = $assignments->fetch_assoc()){?>
                    <option value="<?=$row['id_assignment']?>"><?=$row['tepy_work']?></option>
                    <?php }?>
                </select>
            </div>
            <button type="submit" name="ochecka_btn" class="btn btn-dark text-warning">Добавить</button>
        </form>
</div>
<div>
    <div class="container">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Студент</th>
            <th scope="col">Оценка</th>
            <th scope="col">Тип занятий</th>
            <th scope="col">Тип работы</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $ochenka->fetch_assoc()){?>
            <tr>
                <th scope="row"><?=$row['fio']?></th>
                <td><?=$row['och']?></td>
                <td><?=$row['name_cour']?></td>
                <td><?=$row['tepy_work']?></td>
                <td>
                        
                        <button type="submit" name="lesson" class="btn btn-dark text-warning"
                        onclick="update_grade(<?=$row['id_grades']?>,<?=$row['och']?>)"
                         data-bs-toggle="modal" data-bs-target="#modalUpdateGrade">Изменить</button>
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