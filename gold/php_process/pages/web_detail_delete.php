<?php
  $delete_num = $_GET['num'];

  // db connect
  include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
  $sql = "delete from gold_web where GOLD_WEB_num = $delete_num";
  mysqli_query($dbConn, $sql);

  echo "
  <script>
    alert('디자인 상품 정보를 삭제했습니다.');
    location.href='/gold/pages/web/web.php'
  </script>
  ";
?>