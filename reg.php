<?php
include 'temp/headr.php';
if (isset($_POST['reg'])) {
    $fio = $_POST['fio'];
    $login = $_POST['login'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    if($_POST['role'] == 'student'){
        $id_role = 2;
    }else{
        $id_role = 1;
    }

    $sql = 'insert into users (fio, login, password, email, id_role) values ("'.$fio.'", "'.$login.'", "'.$password.'", "'.$email.'", '.$id_role.')';
    $conect->query($sql);
    $user_id = $conect->insert_id;
    
    if($_POST['role'] == 'student'){
        $group = $_POST['id_group'];
        $ticket_number = $_POST['ticket_number'];
        $year_receips = $_POST['year_receips'];
        $form_edu = $_POST['form_edu'];
        $sql = 'insert into students (student_ticket, id_grupp , year_receips, form_edu, id_user) values ('.$ticket_number.', '.$group.', "'.$year_receips.'", "'.$form_edu.'", '.$user_id.')';
    }else{
         $cafedra = $_POST['cafedra'];
        $degree = $_POST['degree'];
        $post = $_POST['post'];
        $phone = $_POST['phone'];
        $sql = 'insert into teachers (cafedra, degree , post, phone, id_user) values ("'.$cafedra.'", "'.$degree.'", "'.$post.'", "'.$phone.'", '.$user_id.')';
    }
    

    if ($conect->query($sql)) {
        header('Location: auto.php');
        exit;
    }

}
$sql_groups = 'select * from studentgroups' ;
$groups = $conect->query($sql_groups);
?>
<div class="container mt-4 mb-3 border border-warning border-3 rounded">
    <h3 class="text-center">Регистрация</h3>
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Введите Ф.И.О.</label>
                <input type="text" name="fio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Введите логин</label>
                <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Введите пароль</label>
                <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Введите email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div>
                <label for="change_role" class="form-label">Выберети роль</label>

                <select id='change_role' class="form-control" name='role'>
                    <option value="student">Студент</option>
                     <option value="techer">Преподователь</option>
                </select>
            </div>

            <div id='block_reg_techer' style='display: none';>
                <div class="mb-3">
                    <label for="cafedra" class="form-label">Ваша кафедра</label>
                    <input type="text" name="cafedra" class="form-control" id="cafedra" aria-describedby="emailHelp">
                </div>
                  <div class="mb-3">
                    <label for="degree" class="form-label">Ваше образование</label>
                    <input type="text" name="degree" class="form-control" id="degree" aria-describedby="emailHelp">
                </div>
                 <div class="mb-3">
                    <label for="post" class="form-label">Должность</label>
                    <input type="text" name="post" class="form-control" id="post" aria-describedby="emailHelp">
                </div>
                 <div class="mb-3">
                    <label for="phone" class="form-label">Телефон</label>
                    <input type="text" name="phone" class="form-control" id="phone" aria-describedby="emailHelp">
                </div>
            </div>
            <div id='block_reg_students'>
                <div class="mb-3">
                    <label for="group" class="form-label">Выберети группу</label>
                <select name="id_group" id="group" class="form-control">
                    <?php while($row = $groups->fetch_assoc()): ?>
                        <option value="<?=$row['id_group']?>"><?=$row['name_group']?></option>
                    <?php endwhile; ?>
                </select>
                </div>
                <div class="mb-3">
                    <label for="ticket_number" class="form-label">Введите ваш номер студенческого</label>
                    <input type="number" name="ticket_number" class="form-control" id="ticket_number" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="year_receips" class="form-label">Введите год поступления</label>
                    <input type="datetime-local" name="year_receips" class="form-control" id="year_receips" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="form_edu" class="form-label">Введите форму обучения</label>
                    <input type="text" name="form_edu" class="form-control" id="form_edu" aria-describedby="emailHelp">
                </div>
            </div>

            <button type="submit" name="reg" class="btn btn-dark text-warning">Зарегистрироваться</button>
            <button type="clear" class="btn btn-secondary text-dark">Очистить</button>
            <br>
            <br>
            <a href="auto.php">Имеете вы аккаунт?</a>
        </form>
</div>
<?php
include 'temp/footer.php';
?>