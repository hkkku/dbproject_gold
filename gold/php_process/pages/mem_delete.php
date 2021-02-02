<?php
  $mem_num = $_GET['num'];

  //database connect
  include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';

  $sql = "delete from gold_mem where GOLD_mem_num = $mem_num";
  mysqli_query($dbConn, $sql);

  echo "
  <script>
    confirm('회원 정보 삭제를 하시겠습니까?');
    location.href='/gold/pages/admin/admin.php'
  </script>
  ";
?>