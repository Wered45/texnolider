<?php 
include '../conect.php';
if (isset($_POST['btn_update'])) {
  $id_grades = $_POST['id_grades'];
  $och = $_POST['och'];

  $sql_update = 'update grades set och = "'.$och.'" where id_grades = "'.$id_grades.'"';

  $conect->query($sql_update);
  header('Location: ../ocenka_expose.php');
  exit;
}