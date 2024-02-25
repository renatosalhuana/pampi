function moveTo(imgPosition, elementId) {
  var elementToScroll = document.getElementById(elementId);
  var slideWidth = elementToScroll.clientWidth;
  var newPosition = 0;
  if (imgPosition > 0) {
    newPosition = slideWidth * imgPosition;
  }
  elementToScroll.scroll({
    left: newPosition,
    behavior: "smooth",
  });
}

function moveRight(elementId) {
  var elementToScroll = document.getElementById(elementId);
  elementToScroll.scroll({
    left: elementToScroll.clientWidth,
    behavior: "smooth",
  });
}

function moveLeft(elementId) {
  var elementToScroll = document.getElementById(elementId);
  elementToScroll.scroll({
    left: 0,
    behavior: "smooth",
  });
}

// alert(
//   "total width: " +
//     elementToScroll.scrollWidth +
//     " slide width: " +
//     elementToScroll.clientWidth +
//     " current position: " +
//     elementToScroll.scrollLeft
// );
