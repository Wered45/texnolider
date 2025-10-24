<?php
include 'temp/headr.php';
?>
<div class="container mt-4 mb-3 border border-warning border-3 rounded">
   <h2 class="text-center">Расписание студента</h2>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Введите дату</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Выбрать десциплину</label>
                <select class="form-select" aria-label="Default select example">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Выбрать группу</label>
                <select class="form-select" aria-label="Default select example">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Выбрать тип работы</label>
                <select class="form-select" aria-label="Default select example">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Введите кабинет</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-dark text-warning">Добавить</button>
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
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">4</th>
                <td>23.06.2005</td>
                <td>лекция</td>
                <td>тест</td>
                <td>А.С.Сергеевич</td>
                <td><form>
                        <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <button type="submit" class="btn btn-dark text-warning">Изменить</button>
                    </form>
            </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>23.06.2005</td>
                <td>лекция</td>
                <td>тест</td>
                <td>А.С.Сергеевич</td>
                <td><form>
                        <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <button type="submit" class="btn btn-dark text-warning">Изменить</button>
                    </form>
            </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>23.06.2005</td>
                <td>лекция</td>
                <td>тест</td>
                <td>А.С.Сергеевич</td>
                <td><form>
                        <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <button type="submit" class="btn btn-dark text-warning">Изменить</button>
                    </form>
            </td>
            </tr>
        </tbody>
    </table>
    </div>
</div>
<?php
include 'temp/footer.php';
?>