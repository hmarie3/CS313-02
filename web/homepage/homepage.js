function grow() {
  document.getElementById("menu").style.padding = "50px";
  setTimeout(bold, 100);
  setTimeout(shrink, 500);
}

function bold() {
  document.getElementById("link").style.fontWeight = "bold";
}

function shrink() {
  document.getElementById("menu").style.padding = "15px";
  document.getElementById("link").style.fontWeight = "normal";
}