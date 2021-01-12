function inicializer()
{
  var btnRojo=document.getElementById("btnRojo");
  btnRojo.addEventListener("click",cambiarColor);
  //btnRojo.removeEventListener("click",cambiarColor);
}
function cambiarColor()
{
  var titulo=document.getElementById("titulo");
  titulo.style.color="#"+ Math.floor(Math.random()*16777215).toString(16);
}
window.addEventListener("load", inicializer);
