DOMLoaded = async ()=>{
  // console.log("DOM LOADED");
  // 로그 출력
  printLog();

}
WindowLoaded = async ()=>{
  // console.log("WINDOW LOADED");

}


document.addEventListener("DOMContentLoaded", DOMLoaded);
window.addEventListener("load", WindowLoaded);