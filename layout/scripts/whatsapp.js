var texto = encodeURIComponent(
  "Hola!%20Me%20interesa%20cotizar%20mobiliarios.%20¿Me%20pueden%20enviar%20el%20catálogo?"
);
window.onload = function () {
  var link = document.getElementById("whatsapp-link");
  var texto = "Hola! cómo estás?";
  link.href = "https://wa.me/51943986612?text=" + texto;
};
