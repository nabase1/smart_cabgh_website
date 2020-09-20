var index = 1;
var intervalHandler;
/*
function plusbtn(n) {
    index = index + n;
    showImage(index);
}
*/

function showImage(n) {
    var i;  
    var x = document.getElementsByClassName("slides");
   if (n > x.length){ index = 1};
   if (n < 0){ index = x.length};
   for (i=0;i<x.length;i++){
        
        x[i].style.display = "none";
       
    }
     
      if (index > x.length){ index = 1};   
    x[index-1].style.display = "block";
    index++;
}
window.onload = showImage;
intervalHandler = setInterval(showImage,6000);