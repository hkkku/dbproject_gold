<?php
  $app_update_num = $_GET['num'];
  $app_title = nl2br($_REQUEST['app_title']);
  $app_title = addslashes($app_title);
  $app_serial = $_REQUEST['app_serial'];
  $app_client = $_REQUEST['app_client'];
  $app_desc = nl2br($_REQUEST['app_desc']);
  $app_desc = addslashes($app_desc);
  $resist_day = date("Y-m-d");

  $img_upload_dir = $_SERVER['DOCUMENT_ROOT'].'/gold/data/app_page/app_main/';
  $thumb_upload_dir = $_SERVER['DOCUMENT_ROOT'].'/gold/data/app_page/app_thumb/';

  //main image 
  $main_name = $_FILES['app_main']['name'];
  $main_tmp_name = $_FILES['app_main']['tmp_name'];
  $main_error = $_FILES['app_main']['error'];

  //sub image 
  $sub_name = $_FILES['app_sub']['name'];
  $sub_tmp_name = $_FILES['app_sub']['tmp_name'];
  $sub_error = $_FILES['app_sub']['error'];

  // echo $app_title , $app_serial , $app_client ,$app_desc, $resist_day , $main_name , $sub_name ;

  //main image upload
  if($main_name && !$main_error){
    $uploaded_main_file = $img_upload_dir.$main_name;
    if(!move_uploaded_file($main_tmp_name, $uploaded_main_file)){
      echo "
        <script>
          alert('사진이 업로드 되지 않았습니다!');
        </script>
      ";
      exit;
    }
  } else {
    $main_name = '';
  }

  //sub image upload
  if($sub_name && !$sub_error){
    $uploaded_sub_file = $thumb_upload_dir.$sub_name;
    if(!move_uploaded_file($sub_tmp_name, $uploaded_sub_file)){
      echo "
        <script>
          alert('사진이 업로드 되지 않았습니다!');
        </script>
      ";
      exit;
    }
  } else {
    $sub_name = '';
  }
  

  //database connect
  include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
  $sql = "update gold_app set GOLD_APP_tit = '$app_title', GOLD_APP_ser = '$app_serial', GOLD_APP_des = '$app_desc', GOLD_APP_img = '$main_name', GOLD_APP_thumb = '$sub_name', GOLD_APP_cli = '$app_client', GOLD_APP_reg = '$resist_day' where GOLD_APP_num = '$app_update_num'";


  mysqli_query($dbConn, $sql);
  // DB에 접속해서 sql에 insert가 실행(변수 삽입) & query를 날려줌
  
  // ajax & json 을 사용하기 위해 다음의 코드를 실행
  // loadmore 전에는 html 상에 데이터가 존재하지 않는다 (web&design 데이터 불러오기 방식과 다르다. web과 design 에서는 존재하는 div들이 단지 가려져 있음)
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
    location.href = '/gold/pages/app/app.php';
  </script>
  ";
?>