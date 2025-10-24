<nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
            <img src="img/лготип 1.png">
            <a class="navbar-brand text-dark m-3" href="/">IT-технологии</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex w-100">
                <?php
                if (!isset($_SESSION['id_user'])) {
                ?>
                <li class="nav-item">
                <a class="nav-link active text-dark" aria-current="page" href="index.php">Главная</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active text-dark" aria-current="page" href="reg.php">Регистрация</a>
                </li>
                <li class="ms-auto">
                    <a class="btn btn-dark text-warning" href="auto.php">Войти</a>
                </li>
                <?php
                }
                if (isset($_SESSION['id_user']) && $_SESSION['role'] == 'Студент') {
                    echo '<li class="nav-item">
                <a class="nav-link active text-dark" aria-current="page" href="schedule.php"><b>'.$_SESSION['name'].'</b></a>
                </li>';
                    echo '<li class="nav-item">
                <a class="nav-link active text-dark" aria-current="page" href="schedule.php">Расписание</a>
                </li>';
                echo '<li class="nav-item">
                <a class="nav-link active text-dark" aria-current="page" href="ocenka.php">Оценка</a>
                </li>';
                echo '<li class="ms-auto">
                    <a class="btn btn-dark text-warning" href="logout.php">Выход</a>
                </li>';
                }
                if (isset($_SESSION['id_user']) && $_SESSION['role'] == 'Преподователь') {
                    echo '<li class="nav-item">
                <a class="nav-link active text-dark" aria-current="page" href="schedule.php">Расписание</a>
                </li>';
                echo '<li class="nav-item">
                <a class="nav-link active text-dark" aria-current="page" href="ocenka.php">Оценка</a>
                </li>';
                echo '<li class="ms-auto">
                    <a class="btn btn-dark text-warning" href="logout.php">Выход</a>
                </li>';
                }
                ?>
            </div>
        </div>
</nav>