<?php 
include '../conect.php';
if (isset($_POST['btn_update'])) {
  $id_lesson = $_POST['id_schedule'];
  $date = $_POST['date_update'];
  $audit = $_POST['kabinet_update'];

  $sql_update = 'update lessons set date_lesson = "'.$date.'", audien = "'.$audit.'" where id_lesson = "'.$id_lesson.'"';

  $conect->query($sql_update);
  header('Location: ../schedule_expose.php');
  exit;
}