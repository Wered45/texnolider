<?php
include 'temp/headr.php';
if(!isset($_SESSION['id_user']) || $_SESSION['role'] != 'Студент'){
    header('Location: /');
    exit;
}
$s = 'select id_student from students where id_user = '.$_SESSION['id_user'];
$id_student = $conect->query($s)->fetch_assoc()['id_student'];

$sql = 'select * from grades 
join courses on courses.id_course = grades.id_course
join assignment_types on assignment_types.id_assignment = grades.id_assignment 
join teachers on teachers.id_teacher  = grades.id_teacher 
join users on teachers.id_user  = users.id_user
where grades.id_student =  '.$id_student;
$grades = $conect->query($sql);

$sql_avg = 'select courses.name_cour,users.fio, avg(grades.och) as avg_och from grades 
join courses on courses.id_course = grades.id_course
join teachers on teachers.id_teacher  = grades.id_teacher 
join users on teachers.id_user  = users.id_user
where grades.id_student =  '.$id_student.' group by grades.id_course,courses.name_cour,users.fio
order by grades.date_end
';

$grades_avg = $conect->query($sql_avg);

?>
<div>
    <div class="container">
        <h2>Все оценки по предметам</h2>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Оценка</th>
            <th scope="col">Дата выставлена</th>
            <th scope="col">Название предмета</th>
            <th scope="col">Тип работы</th>
            <th scope="col">Преподователь</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=$grades->fetch_assoc()): ?>
            <tr>
                <th scope="row"><?=$row['och']?></th>
                <td><?=$row['date_end']?></td>
                <td><?=$row['name_cour']?></td>
                <td><?=$row['tepy_work']?></td>
                <td><?=$row['fio']?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
                <h2>Средние оценки по предиетам</h2>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Навзание предмета</th>
            <th scope="col">Оценка</th>
            <th>Преподователь</th>
           
            </tr>
        </thead>
        <tbody>
            <?php while($row=$grades_avg->fetch_assoc()){ ?>
            <tr>
                <th scope="row"><?=$row['name_cour']?></th>
                <td><?=$row['avg_och']?></td>
               <td><?=$row['fio']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
</div>
<?php
include 'temp/footer.php';
?>