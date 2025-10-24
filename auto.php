<?php
include 'temp/headr.php';
if (isset($_POST['auto'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = 'select * from users join role on users.id_role = role.id_role
    where login = "'.$login.'" and password = "'.$password.'"';
    echo $sql;
    $user = $conect->query($sql)->fetch_assoc();

    if ($user) {
        $_SESSION['role'] = $user['name_role'];
        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['name'] = $user['fio'];

        if ($user['id_role'] == 2) {
            header('Location: schedule.php');
            exit;
        }else{
            header('Location: schedule_expose.php');
            exit;
        }
    }
}
?>
<div class="container mt-4 mb-3 border border-warning border-3 rounded">
    <h3 class="text-center">Аторизация</h3>
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Введите логин</label>
                <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Введите пароль</label>
                <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" name="auto" class="btn btn-dark text-warning mb-3">Войти</button>
        </form>
</div>
<?php
include 'temp/footer.php';
?>