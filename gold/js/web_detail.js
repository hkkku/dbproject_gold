$(function(){
        
  //cut right side text
  const cutTxtBox = $(".webLinks, .appLinks");
  for(let i = 0; i < cutTxtBox.length; i ++){
    let allTxt = cutTxtBox.eq(i).find("em").text();
    cutTxtBox.eq(i).find("em").text(allTxt.substr(0, 60) + "...");
  }


  //auto fit height display frame 
  function fitDisplay(we_fr, we_img, we_box, img_h, box_h_1, box_h_2){
    // 대입 변수 처리해서 리팩토링 실행
    let frameWidth = $(we_fr).outerWidth();
    let contentWidth = $(".detailCon").outerWidth();
    let winWidth = $(window).width();
    $(we_img).outerHeight(frameWidth * img_h);

    if(winWidth > 800){
      $(we_box).outerHeight(contentWidth * box_h_1);
    } else {
      $(we_box).outerHeight(contentWidth * box_h_2);
    }
  } 

  $(window).resize(function(){
    fitDisplay(".webPcFrame", ".webMainImg", ".webBox", 0.60, 0.65, 0.92)
    fitDisplay(".webMobileFrame", ".webMainImg_m", ".webBox_m", 0.92, 0.8, 1.1)
  });
  
  fitDisplay(".webPcFrame", ".webMainImg", ".webBox", 0.60, 0.65, 0.92)
  fitDisplay(".webMobileFrame", ".webMainImg_m", ".webBox_m", 0.92, 0.8, 1.1)

 //Inside image scroll up when mousehover / mouseleave on monitor 
  function pfScrollUp(wf, img_h, fr_h, duration){
    $(wf).on("mouseenter", function(){
      const imgHeight = $(img_h).height();
      const frameHeight = $(fr_h).height();
      // - -> reverse movement 
      // stop -> event repeat x  
      $(img_h).stop().animate({top:-imgHeight + frameHeight} , duration);
    });

    $(wf).on("mouseleave", function(){
      $(img_h).stop().animate({top:0}, duration);
    });
  }
  //pc scroll up
  pfScrollUp(".webPcFrame", "img.scrollUp", ".webMainImg", 2500);
  //mobile scroll up
  pfScrollUp(".webMobileFrame", "img.scrollUp_m", ".webMainImg_m", 4000);
  
 
  //Pc & Mobile Tab click function
  $(".webTabBtns button").click(function(){
    const tabIndex = $(this).index();
    $(".webTab").hide();
    // hide -> make display:none; 위치에 유의하기
    $(".webTab").eq(tabIndex).show();
    $(".webTabBtns button").removeClass("active");
    $(".webTabBtns button").eq(tabIndex).addClass("active");

    let frameWidth = $(".webPcFrame").outerWidth();
    let frameWidth_m = $(".webMobileFrame").outerWidth();
    $(".webMainImg").outerHeight(frameWidth * 0.60);
    $(".webMainImg_m").outerHeight(frameWidth_m * 0.93);
  });

  $(".webTabBtns button").eq(0).trigger("click");
});