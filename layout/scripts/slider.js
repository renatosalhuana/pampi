function moveRight(elementId) {
  //dotButton.addClass("active");

  var elementToScroll = document.getElementById(elementId);
  //alert(elementToScroll.clientWidth);
  //var dotButton = document.getElementById(dotButtonId);

  elementToScroll.scroll({
    left: elementToScroll.clientWidth,
    behavior: "smooth",
  });
  //dotButton.addClass("active");
  //dotButton.className = "active";
  //alert(dotButton.className);
}

function moveLeft(elementId) {
  //dotButton.addClass("active");
  //dotButton.className = "active";
  var elementToScroll = document.getElementById(elementId);
  //elementToScroll.scroll(0, 0);

  elementToScroll.scroll({
    left: 0,
    behavior: "smooth",
  });
}
