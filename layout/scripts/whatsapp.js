// var texto = encodeURIComponent(
//   "Hola!%20Me%20interesa%20cotizar%20mobiliarios.%20¿Me%20pueden%20enviar%20el%20catálogo?"
// );
window.onload = function () {
  var texto =
    "Hola! Me gustaría solicitar un presupuesto. ¿Me podrían enviar el catálogo, por favor?";
  var links = document.getElementsByName("whatsapp-link");
  for (var i = 0; i < links.length; i++) {
    links[i].href = "https://wa.me/51943986612?text=" + texto;
  }
};
