$(function(){

  // header top fix when scroll down 
  // if (matchMedia("screen and (max-width: 480px)").matches) {
  //최대 480px에서만 적용
  const offTop = $(".gnb").offset().top;
  // 두 함수 모두에서 offTop 이라는 변수가 필요하므로 전역 함수로 선언한다.
  let fixHeader = function(){
    $(window).scroll(function(){
      let scroll = $(window).scrollTop();
      let winWidth = $(window).width();
  
      if(winWidth <= 480 && offTop <= scroll){
        //브라우저가 480px 이하 + offTop이 스크롤 위에 있음을 모두 만족 필요
        $(".gnb").css({"position" : "fixed"});
      } else {
        $(".gnb").css({"position" : "relative"});
      }
    });  
  };

  fixHeader();
  //압축된 함수 > 반복되는 코드 절약 가능
 
  $(window).resize(function(){
    fixHeader();
  });

  //mobile menu click bar -> times
  //mobile menu click and show and hide menu
  $(".mobileMenu").click(function(){
    $(this).toggleClass("on");
    // on 과 off로 분기를 나눌 수 있다 -> if 구문 사용 가능
    if($(this).hasClass("on")){
      $(this).find("i").attr("class", "fa fa-times");
      $(this).prev("ul").slideDown("fast");
    } else {
      $(this).find("i").attr("class", "fa fa-bars");
      $(this).prev("ul").slideUp("fast");
    }
  });

  let fitHeight = function(){
    $(window).resize(function(){
      let imgHeight = $(".arrivalCon>img").height();
      // console.log(imgHeight);
      $(".arrivalCon").height(imgHeight);
    });  
  }
  fitHeight();

  $(".productTxt").hide();
  $(".productTxt:first").show();
  //전부 가리고 > 첫번째 txtbox show 


  $(".productImg").click(function(){
    let index = $(this).index();

    $(".productTxt").hide();
    $(".productTxt").eq(index).show();
  });

  $(".productImg").eq(0).trigger("click");
  //강제로 index 0번째 클릭
});