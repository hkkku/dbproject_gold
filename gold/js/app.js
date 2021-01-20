$(function(){

  $('.appBoxes').masonry({
    // options
    itemSelector: '.appBox',
    columnWidth: '.appBox-sizer',
    percentPosition: true
  });

  $.getJSON("/gold/data/json/app.json", function(data){
    // console.log(data[0].appclient);
    let items = [];
    $.each(data, function(i, item){
      // console.log(item);
      let itemHTML =  `<div class="appBox">
                        <div>
                          <img src="/gold/data/app_page/app_thumb/${item.appthumb}" alt="">
                          <h2>${item.apptitle}</h2>
                          <a href="#">View Details</a>
                        </div>
                      </div> `
       // 0번째로 push                
      items.push($(itemHTML).get(0));                    
    });

    $(".appBoxes").append(items);

    $(".appBoxes").imagesLoaded(function(){
      $(items).removeClass("is-loading");
      // 로딩 후 html 태그 인식 됐을 때 masonry 실행 
      $(".appBoxes").masonry('appended', items);
    });
  });

});