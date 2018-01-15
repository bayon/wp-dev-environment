console.log('asi-child-theme-scripts...');
var isHover = 1;
function hoverEffect(obj){
    if(isHover > 0){
        obj.style.color = "green";
   }else{
     obj.style.color = "black";
   }
   isHover = -isHover;
}

var isHoverImage = 1;
function hoverEffectImage(obj){
    if(isHoverImage > 0){
        obj.style.height = "50px";
   }else{
        obj.style.height = "40px";
   }
   isHoverImage = -isHoverImage;
   console.log(isHoverImage);
   console.log(obj.style.height);
}
