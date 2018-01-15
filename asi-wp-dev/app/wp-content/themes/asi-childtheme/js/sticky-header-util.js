// Sticky Header:
var useStickyHeader = false;
window.onscroll = function() {
	if(useStickyHeader){
		monitorStickyHeader();
	}
	

};
if(useStickyHeader){
	var header = document.getElementById("myHeader");//myHeader
	var sticky = header.offsetTop;
}
function monitorStickyHeader() {
  if (window.pageYOffset >= sticky) {
    header.classList.add("sticky");
    console.log('adding sticky................');
  } else {
    header.classList.remove("sticky");
    console.log('removing sticky ...........');
  }
}