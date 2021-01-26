$(function(){
  let url = "/gold/data/ajax/qna_ajax.php"
  $.get(
    url, 
    {page:1},
    function(qna_data){
      // append 는 추가 html 은 대체
      $(".qnaList").html(qna_data);
    }
  );

});   

let currentPage = 1;
function getPage(no){
  let url = "/gold/data/ajax/qna_ajax.php"
  $(".pgNum").removeClass("active");
  $(".pgNum").eq(no-1).addClass("active");
  $.get(    
    url, 
    {page:no},
    function(qna_data){
      $(".qnaList").html(qna_data);
      currentPage = no;
    }
  );
}

let pageLength = $(".pgNum").length;
function goNext(){
  if(currentPage == pageLength){
    getPage(pageLength);
  } else {
    getPage(currentPage + 1);
  }
}

function goPrev(){
 
  if(currentPage == 1){
    getPage(1);
  } else {
    getPage(currentPage - 1);
  }
}

function goFirst(){
  getPage(1);
}

function goLast(){ 
  getPage(pageLength);
}

function plzLogin(){
  alert ('글쓰기를 하시려면 로그인이 필요합니다.')
}

$(".pgNum").eq(0).trigger("click");