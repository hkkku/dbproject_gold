$(function(){

  let count = 4;
  let addData = 0;
  let allData = [];



  $('.appBoxes').masonry({
    // options
    itemSelector: '.appBox',
    columnWidth: '.appBox-sizer',
    percentPosition: true
  });

  $.getJSON("/gold/data/json/app.json", initAppData);
  // json 에 접근해서 아래의 함수를 실행
  function initAppData(data){
    //data를 allData 로 받아간다
    allData = data;
    //아래의 appAppData 함수를 실행한다
    addAppData();

    $(".appLoadMore").on("click", addAppData);
  }

  function addAppData(){
  
    // console.log(data[0].appclient);
    let items = [];
    
    let slicedData = allData.slice(addData, addData + count);
    // 위의 allData를 받아온다
    $.each(slicedData, function(i, item){
      // console.log(item);
      let itemHTML =  `<div class="appBox">
                        <div>
                          <img src="/gold/data/app_page/app_thumb/${item.appthumb}" alt="">
                          <h2>${item.apptitle}</h2>
                          <a href="/gold/pages/app/app_detail.php?num=${item.appnum}">View Details</a>
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

    addData += slicedData.length;
    console.log(addData)
    // 누적된 slicedData 
  } 
});