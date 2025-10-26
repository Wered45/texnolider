<div class="bg-warning">
    <div class="footer d-flex justify-content-between p-4">
        <div class="footer_item">
            <p>Контактные информации</p>
            <ul class="m-0 p-0">
                <li class="d-flex align-items-center">
                    <img src="img/город 1.png" class="d-flex" alt="">
                    <p class="m-0">г. Саратов, ул. Политехническая, 77</p>
                </li>
                
                <li  class="d-flex align-items-center"> 
                    <img src="img/телефон 1.png" class="d-flex"alt="">
                    <p class="m-0">+7 (8452) 99-87-15</p>
                </li>
                <li  class="d-flex align-items-center">
                    <img src="img/почта 1.png" class="d-flex" alt="">
                    <p class="m-0">kumovasv@sstu.ru</p>
                 </li>
            </ul>
        </div>
         <div class="footer_item">
            <p>Наши соц. сети</p>
            <ul class="d-flex list-unstyled">
                <li>
                    <a href="#">
                        <img src="img/телеграм 1.png" alt="">
                    </a>
                </li>
                 <li>
                    <a href="#">
                        <img src="img/вк 1.png" alt="">
                    </a>
                </li>
            </ul>
         </div>
    </div>
</div>
<div class="modal" tabindex="-1" id='modalUpdateSchedule'>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Расписание</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="actions/update_schedule.php">
            <input type="hidden" name="id_schedule" id='id_schedule'>
            <div class="mb-3">
                <label for="date_update" class="form-label">Введите дату</label>
                <input type="datetime-local" class="form-control" name='date_update' id='date_update'>
            </div>
             <div class="mb-3">
                <label for="kabinet_update" class="form-label">Введите кабинет</label>
                <input type="number" name='kabinet_update' class="form-control" id="kabinet_update" >
            </div>
            <button type="submit" name="btn_update" class="btn btn-dark text-warning">Обновить</button>

        </form>
        

      </div>
      
    </div>
  </div>
</div>
<div class="modal" tabindex="-1" id='modalUpdateGrade'>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Обновить оценку</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="actions/update_grade.php">
            <input type="hidden" name="id_grades" id='id_grades'>
           
             <div class="mb-3">
                <label for="kabinet_update" class="form-label">Введите оценку</label>
                <input type="number" name='och' class="form-control" id="och" >
            </div>
            <button type="submit" name="btn_update" class="btn btn-dark text-warning">Обновить</button>

        </form>
        

      </div>
      
    </div>
  </div>
</div>
    <script src="/js/bootstrap.bundle.min.js"></script>

<script src='js/app.js'></script>

</body>
</html>


