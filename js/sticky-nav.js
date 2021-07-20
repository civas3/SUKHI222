window.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM fully loaded and parsed');


var getNavElement = document.getElementById("menu");
var getHeaderElement = document.getElementById("header");

var sticky = false;
var stickPoint = getDistance();


function getDistance() {
  var topDist = getNavElement.offsetTop;
  return topDist;
}

window.onscroll = function(e) {
  var distance = getDistance() - window.pageYOffset;
  var offset = window.pageYOffset;
  
  if ( (distance <= 0) && !sticky) {
    getNavElement.style.position = 'fixed';
    getNavElement.style.top = '0px';
    getNavElement.style.width = '100%';
    //fills the space the element been taken out to avoid other elements to shift up
    getHeaderElement.style.padding = '0 0 9rem 0';
    sticky = true;
  } else if (sticky && (offset <= stickPoint)){
    getNavElement.style.position = 'static';
    getHeaderElement.style.padding = '0 0 0 0';

    sticky = false;
  }
}
});