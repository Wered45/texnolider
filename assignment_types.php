<?php
include 'temp/headr.php';
if (isset($_POST['assignment'])) {
    $tepy_work = $_POST['tepy_work'];
    $wiet = $_POST['wiet'];

    $sql = 'insert into assignment_types (tepy_work, wiet) values ("'.$tepy_work.'", "'.$wiet.'")';
    $conect->query($sql);
}

$sql_assignment_types = 'select * from assignment_types';
$assignment_types = $conect->query($sql_assignment_types);
?>
<div class="container mt-4 mb-3 border border-warning border-3 rounded">
   <h2 class="text-center">Создать работу</h2>
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Введите название работы</label>
                <input type="text" name="tepy_work" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Введите вес работы</label>
                <input type="number" name="wiet" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" name="assignment" class="btn btn-dark text-warning">Добавить</button>
        </form>
</div>
<div>
    <div class="container">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Название работы</th>
            <th scope="col">Вес работы</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $assignment_types->fetch_assoc()){?>
                <tr>
                    <th scope="col"><?=$row['tepy_work']?></th>
                    <th scope="col"><?=$row['wiet']?></th>
                </tr>
                <?php }?>
        </tbody>
    </table>
    </div>
</div>
<?php
include 'temp/footer.php';
?>