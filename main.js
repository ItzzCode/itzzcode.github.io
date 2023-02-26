var extern = document.getElementsByTagName("link")[0].import;
window.addEventListener("load", function() {
	document.getElementsByTagName("html")[0].replaceChild(extern.getElementsByTagName("topbar")[0], document.getElementsByTagName("topbar")[0]);
  }, false);