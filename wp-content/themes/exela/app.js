var readmorePage1 = document.getElementById("exela-readmore-pg1");
var readmorePage2 = document.getElementById("exela-readmore-pg2");

var mobileMenu = document.getElementById("exela-mobile-hide");

function toggleMobileMenu(){
  if(mobileMenu.style.display === "none" || mobileMenu.style.display === ""){
    mobileMenu.style.display = "block"
  }else{
    mobileMenu.style.display = "none"
  }
}

function toggleReadmore(readmorePageNumber){
  if(readmorePageNumber === 1){
    if(readmorePage1.style.display === "none" || readmorePage1.style.display === ""){
      readmorePage1.style.display = "block"
    }else{
      readmorePage1.style.display = "none"
    }
  }
  else if(readmorePageNumber === 2){
    if(readmorePage2.style.display === "none" || readmorePage2.style.display === ""){
      readmorePage2.style.display = "block"
    }else{
      readmorePage2.style.display = "none"
    }
  }
}