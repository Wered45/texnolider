<?php
include 'temp/headr.php';
?>
<div class="container mt-4 mb-3 border border-warning border-3 rounded">
   <h2 class="text-center">Выстовить оценки</h2>
        <form>
            <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Выберети студента</label>
                <select class="form-select" aria-label="Default select example">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Поставте оценку</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Выберети тип занятий</label>
                <select class="form-select" aria-label="Default select example">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Выберети тип работы</label>
                <select class="form-select" aria-label="Default select example">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <button type="submit" class="btn btn-dark text-warning">Добавить</button>
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
            <tr>
                <th scope="row">Ульянкл Михаил</th>
                <td>4</td>
                <td>лекция</td>
                <td>тест</td>
                <td><form>
                        <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <button type="submit" class="btn btn-dark text-warning">Изменить</button>
                    </form>
            </td>
            </tr>
            <tr>
                <th scope="row">Ульянкл Михаил</th>
                <td>4</td>
                <td>лекция</td>
                <td>тест</td>
                <td><form>
                        <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <button type="submit" class="btn btn-dark text-warning">Изменить</button>
                    </form>
            </td>
            </tr>
            <tr>
                <th scope="row">Ульянкл Михаил</th>
                <td>4</td>
                <td>лекция</td>
                <td>тест</td>
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