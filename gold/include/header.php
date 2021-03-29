
<?php

if(!isset($_SESSION)){
  session_start();
}
  if(isset($_SESSION["userid"])){
    $userid = $_SESSION["userid"];
  } else {
    //없다면 userid 값을 비운다
    $userid = '';
  }

  if(isset($_SESSION["userpoint"])){
    $userpoint = $_SESSION["userpoint"];
  } else {
    //없다면 userpoint 값을 비운다
    $userpoint = '';
  }

  if(isset($_SESSION["userlevel"])){
    $userlevel = $_SESSION["userlevel"];
  } else {
    //없다면 userlevel 값을 비운다
    $userlevel = '';
  }

?>      
      
 <!-- top main section -->
 <div class="topMain clear">
   <div class="bannerBox">
     <!-- <img src="img/banner.jpg" alt="" /> -->
     <span class="overlay"></span>
     <div class="slogan">
       <h2>DATABASE <span>Project</span></h2>
       <hr />
       <p>passion for database</p>
     </div>
   </div>
   <div class="headerBox">
     <!-- <img src="img/header-img.jpg" alt="" /> -->
     <span class="overlay"></span>
   </div>
   <div class="loginWrap">
     <div class="logBox">
       <?php
         if(!$userid){
       ?>
       <!-- 아이디가 없을 경우 login과 join us -->
       <a href="/gold/pages/login/login_form.php">LOGIN</a>
       <a href="/gold/pages/login/join_form.php">JOIN US</a>
       <!-- <a href="#">ADMIN</a> -->
       <?php      
         } else {
           // 아이디가 있고, userlevel이 1이다
           if($userlevel == 1){    
       ?>
          <a href="/gold/php_process/login/logout.php">LOGOUT</a>
          <a href="#"><?=$userid?>[<?=$userpoint?>]</a>
          <a href="/gold/pages/admin/admin.php">ADMIN</a>
         <?php
            } else {
            // 아이디가 있지만, userlevel이 1이 아니다
         ?>
            <a href="/gold/php_process/login/logout.php">LOGOUT</a>
            <a href="#"><?=$userid?>[<?=$userpoint?>]</a>
       <?php
            }
         }
       ?>
      </div>
   </div>
   <div class="gnb">
     <ul class="clear">
       <li class="active"><a href="/gold/index.php?key=0">HOME</a></li>
       <li><a href="/gold/pages/design/design.php">DESIGN</a></li>
       <li><a href="/gold/pages/web/web.php">WEB</a></li>
       <li><a href="/gold/pages/app/app.php">APP</a></li>
       <li><a href="#">ABOUT</a></li>
       <li><a href="/gold/pages/qna/qna.php">Q&A</a></li>
     </ul>
     <div class="mobileMenu">
       <i class="fa fa-bars"></i>
     </div>
   </div>
 </div>
 <!-- top main section end-->

<script>
  const pathname = window.location.pathname;
  const gnbLi = document.querySelectorAll('.gnb li');

  for(let i = 0; i < gnbLi.length; i++){
    gnbLi[i].classList.remove('active');
    //for 반복문으로 한 바퀴 돌면서 i 번째 gnb list의 class를 전부 remove
  }

  if(pathname.includes('index')){
    gnbLi[0].classList.add('active');
  } else if(pathname.includes('design')){
    gnbLi[1].classList.add('active');
  } else if(pathname.includes('web')){
    gnbLi[2].classList.add('active');
  } else if(pathname.includes('app')){
    gnbLi[3].classList.add('active');
  } else if(pathname.includes('qna')){
    gnbLi[5].classList.add('active');
  }

  // console.log(gnbLi);
</script>