<?php
  $update_num = $_GET['num'];
  $update_tit = $_POST['ansTitle'];
  $update_con = $_POST['ansTxt'];
  $update_reg = date("Y-m-d");

  //database connect
  include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
  $sql = "UPDATE gold_qna SET GOLD_QNA_tit='$update_tit', GOLD_QNA_con='".addslashes($update_con)."', GOLD_QNA_reg='$update_reg' WHERE GOLD_QNA_num='$update_num' ";
  mysqli_query($dbConn , $sql);

  echo "
    <script>
      alert ('수정이 완료되었습니다.')
      location.href = '/gold/pages/qna/qna.php';
    </script>
  "
?>