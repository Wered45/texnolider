<?php
include 'temp/headr.php';
if (isset($_POST['reg'])) {
    $fio = $_POST['fio'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = 'insert into users (fio, login, password, email, id_role) values ("'.$fio.'", "'.$login.'", "'.$password.'", "'.$email.'", "2")';

    if ($conect->query($sql)) {
        header('Location: auto.php');
        exit;
    }
}
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