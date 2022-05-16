$(".dep_btn1").mouseover(function(){
    $(".sub").stop().slideDown();
    $(".submenu_back").stop().slideDown();
});
$(".submenu_back").mouseleave(function(){
  $(".sub").stop().slideUp();
  $(".submenu_back").stop().slideUp();
});

var imgs=4;
var now=0;

start();

function start(){
    $(".imgs>img").eq(0).siblings().css("margin-left","-2000px");
    // setInterval(function(){실행문...},시간)
    setInterval(function(){slide();},4000);
}
function slide(){
    if(imgs==now){now=0;}
    else{now=now+1;}
    //이전그림(now-1)은 사라짐
    $(".imgs>img").eq(now-1).css("margin-left","-2000px");
    //현재그림(now)이 나타남
    $(".imgs>img").eq(now).css("margin-left","0px");
}