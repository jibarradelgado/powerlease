window.onresize = function() {setStickyHeader()};
window.onload = function() {setStickyHeader(); resizeLogo();};

function setStickyHeader() {
  if (document.body.clientWidth < 992 || document.documentElement.clientWidth < 992) {
    document.getElementById("header").className = '';
  } else {
    document.getElementById("header").className = 'sticky-top';
  }
}

var logo = document.getElementById("logo");
var header_nav = document.getElementById("head-nav");
var header = document.getElementById("header");
var header_link = document.querySelectorAll(".main_menu li a");
window.onscroll = function() {resizeLogo()};

function resizeLogo() {
  var pos = window.scrollY;
  if (document.body.clientWidth > 992 || document.documentElement.clientWidth > 992) {
    if (pos > 50) {
      logo.style.width = "150px";
      header_nav.style.background = "transparent";
      header_link.forEach(function(value) {
        value.style.color = "#142b44";
      });
      header.style.background = "rgba(255, 255, 255, 0.9)";
    } else {
      logo.style.width = "200px";
      header_nav.style.background = "rgba(20, 43, 68, 0.5)";
      header_link.forEach(function(value) {
        value.style.color = "white";
      });
      header.style.background = "transparent";
    }
  }
  else {
    logo.style.width = "150px";
    header_nav.style.background = "transparent";
    header_link.forEach(function(value) {
      value.style.color = "#142b44";
    });
  }
}

// var velocity = 0.1;

// window.onscroll = function() {update()};

// function update(){ 
//   var pos = window.scrollY;
//   //var height = document.getElementById("inicio").style.height - 10;
//   document.getElementById("inicio").style.backgroundPositionY = Math.round((-pos) * velocity) +  'px';

//   //var height = document.getElementById("ventajas").style.height - 50;
//   document.getElementById("ventajas").style.backgroundPositionY = Math.round((1300-pos) * velocity) +  'px';
// };