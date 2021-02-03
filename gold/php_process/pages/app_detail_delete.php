<?php
  $app_delete_num = $_REQUEST['num'];

  // db connect
  include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
  $sql = "delete from gold_app where GOLD_APP_num = $app_delete_num";
  mysqli_query($dbConn, $sql);
  
  //json rewrite
  $sql = "select * from gold_app order by GOLD_APP_num desc";
  // db 상의 데이터를 json화 하기 위해 select 해온다.
  $app_result = mysqli_query($dbConn, $sql);

  $arr_result = array();
  // 비어있는 배열을 만들어 준다.
  while($app_row = mysqli_fetch_array($app_result)){
    array_push($arr_result, array(
      // array push로 비어있는 배열에 받아온 데이터를 삽입
      'appnum' => $app_row['GOLD_APP_num'],
      'apptitle' => $app_row['GOLD_APP_tit'],
      'appserial' => $app_row['GOLD_APP_ser'],
      'appdesc' => $app_row['GOLD_APP_des'],
      'appimg' => $app_row['GOLD_APP_img'],
      'appthumb' => $app_row['GOLD_APP_thumb'],
      'appclient' => $app_row['GOLD_APP_cli'],
      'appregist' => $app_row['GOLD_APP_reg']
    ));
  }

  //make json file
  file_put_contents($_SERVER['DOCUMENT_ROOT'].'/gold/data/json/app.json', json_encode($arr_result, JSON_PRETTY_PRINT));
  echo "
  <script>
    alert('어플리케이션 상품 정보를 삭제했습니다.');
    location.href='/gold/pages/app/app.php'
    location.reload();
  </script>
  ";
?>