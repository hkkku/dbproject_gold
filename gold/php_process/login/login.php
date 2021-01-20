<?php

  // 입력 데이터 전달 받아 저장
  $login_id = $_POST['loginId'];
  $login_pass = $_POST['loginPass'];

  // echo $login_id , $login_pass;

  // DB 접속 > 조회 결과 회수

  include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
  // GOLD_mem_id 컬럼 데이터와 $login_id 입력 데이터를 비교 및 조회
  $sql = "select * from gold_mem where GOLD_mem_id='$login_id'";
  // result에 가져온 값을 저장
  $result = mysqli_query($dbConn , $sql);
  $num_match = mysqli_num_rows($result);
  // 숫자가 있으면 true 없으면 false 

  //mysqli_fetch_array()
  // $row = mysqli_fetch_array($result);
  // $db_pass = $row['GOLD_mem_pass'];
  // $db_name = $row['GOLD_mem_name'];

  // echo $db_pass , $db_name;

  if(!$num_match){
    echo"
    <script>
      alert('등록되지 않은 아이디 입니다.');
      history.go(-1);
    </script>
    ";
  } else {
    $row = mysqli_fetch_array($result);
    $db_pass = $row['GOLD_mem_pass'];
    // password 추출

    if($login_pass != $db_pass){
      // 틀렸을 때의 상황 먼저 쓴다
      echo"
        <script>
          alert('비밀번호가 틀립니다.');
          history.go(-1);
        </script>
      ";
    } else {
      session_start();
      $_SESSION["userid"]=$row['GOLD_mem_id'];
      $_SESSION["userpoint"]=$row['GOLD_mem_point'];
      $_SESSION["userlevel"]=$row['GOLD_mem_level'];

      echo"
       <script>
          // 메인페이지로 이동
          location.href='/gold/index.php';
       </script>
      ";
    }
  }
?>