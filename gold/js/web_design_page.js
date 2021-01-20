$(function(){
  // cutting text function 
  let designBox = $(".deWeBox");

  for(let i = 0; i < designBox.length; i ++){
    let allTxt = designBox.eq(i).find(".cutTxt").text();

    function cutTxt(){
      let winWidth = $(window).width();
      if(winWidth < 800){
        designBox.eq(i).find(".cutTxt").text(allTxt.substr(0, 20) + '...');
      } else {
        designBox.eq(i).find(".cutTxt").text(allTxt.substr(0, 60) + '...');
      }
    }

    $(window).resize(function(){
      cutTxt()
    });
    
    cutTxt()
  }   
  //load more design 4 images when click "load more"
  const designLoadMore = function(){   
    $('.designBox').hide();
    $('.designBox').slice(0, 4).show();

    $(".designLoadMore").click(function(e){
      e.preventDefault();
      $('.designBox:hidden').slice(0, 4).show();
      //when all image load complete > hide "load more" 
      if($('.designBox:hidden').length == 0){
        $(".designLoadMore").hide();
      }
    });
  }
  designLoadMore();

  //load more design 3 images when click "load more"
  const webLoadMore = function(){   
    $('.webBox').hide();
    $('.webBox').slice(0, 3).show();

    $(".webLoadMore").click(function(e){
      e.preventDefault();
      $('.webBox:hidden').slice(0, 3).show();
      //when all image load complete > hide "load more" 
      if($('.webBox:hidden').length == 0){
        $(".webLoadMore").hide();
      }
    });
  }
  webLoadMore();

  // go to top function
  $(".toTop").click(function(){
    $("html,body").animate({scrollTop:0}, 300);
  });
});