
const fila = document.querySelector('.contenedor-carousel');
const peliculas = document.querySelectorAll('.pelicula');

const flechaIzquierda = document.getElementById('flecha-izquierda');
const flechaDerecha = document.getElementById('flecha-derecha');

flechaDerecha.addEventListener('click', () => {
	eventoDerecha();
});

flechaIzquierda.addEventListener('click', () => {
	eventoIzquierda();
});

const interval = setInterval(function() {
   eventoDerecha();
 }, 5000);

const numeroPaginas = Math.ceil(peliculas.length / 5);
for(let i = 0; i < numeroPaginas; i++){
	const indicador = document.createElement('button');

	if(i === 0){
		indicador.classList.add('activo');
	}

	document.querySelector('.indicadores').appendChild(indicador);
	indicador.addEventListener('click', (e) => {
		fila.scrollLeft = i * fila.offsetWidth;

		document.querySelector('.indicadores .activo').classList.remove('activo');
		e.target.classList.add('activo');
	});
}

peliculas.forEach((pelicula) => {
	pelicula.addEventListener('mouseenter', (e) => {
		const elemento = e.currentTarget;
		setTimeout(() => {
			peliculas.forEach(pelicula => pelicula.classList.remove('hover'));
			elemento.classList.add('hover');
		}, 300);
	});
});

fila.addEventListener('mouseleave', () => {
	peliculas.forEach(pelicula => pelicula.classList.remove('hover'));
});

function eventoIzquierda() {
	fila.scrollLeft -= fila.offsetWidth;

	const indicadorActivo = document.querySelector('.indicadores .activo');
	if(indicadorActivo.previousSibling){
		indicadorActivo.previousSibling.classList.add('activo');
		indicadorActivo.classList.remove('activo');
	}
}

function eventoDerecha() {
	fila.scrollLeft += fila.offsetWidth;

	const indicadorActivo = document.querySelector('.indicadores .activo');
	if(indicadorActivo.nextSibling){
		indicadorActivo.nextSibling.classList.add('activo');
		indicadorActivo.classList.remove('activo');
	} else {
		// regresar a primera página (2 pasos hacia atras)
		eventoIzquierda();
		eventoIzquierda();
	}
}
/*
// código de modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

var img = document.getElementById("myImg1");
var imageText = document.getElementById("imageText1");
imageText.onclick = function(){
  modal.style.display = "block";
  modalImg.src = img.src;
  captionText.innerHTML = img.alt;
}

var img2 = document.getElementById("myImg2");
var imageText2 = document.getElementById("imageText2");
imageText2.onclick = function(){
  modal.style.display = "block";
  modalImg.src = img2.src;
  captionText.innerHTML = img2.alt;
}

var img2 = document.getElementById("myImg2");
var imageText2 = document.getElementById("imageText2");
imageText2.onclick = function(){
  modal.style.display = "block";
  modalImg.src = img2.src;
  captionText.innerHTML = img2.alt;
}
var img3 = document.getElementById("myImg3");
var imageText3 = document.getElementById("imageText3");
imageText3.onclick = function(){
  modal.style.display = "block";
  modalImg.src = img3.src;
  captionText.innerHTML = img3.alt;
}
var img4 = document.getElementById("myImg4");
var imageText4 = document.getElementById("imageText4");
imageText4.onclick = function(){
  modal.style.display = "block";
  modalImg.src = img4.src;
  captionText.innerHTML = img4.alt;
}
var img5 = document.getElementById("myImg5");
var imageText5 = document.getElementById("imageText5");
imageText5.onclick = function(){
  modal.style.display = "block";
  modalImg.src = img5.src;
  captionText.innerHTML = img5.alt;
}
var img6 = document.getElementById("myImg6");
var imageText6 = document.getElementById("imageText6");
imageText6.onclick = function(){
  modal.style.display = "block";
  modalImg.src = img6.src;
  captionText.innerHTML = img6.alt;
}
var img7 = document.getElementById("myImg7");
var imageText7 = document.getElementById("imageText7");
imageText7.onclick = function(){
  modal.style.display = "block";
  modalImg.src = img7.src;
  captionText.innerHTML = img7.alt;
}
var img8 = document.getElementById("myImg8");
var imageText8 = document.getElementById("imageText8");
imageText8.onclick = function(){
  modal.style.display = "block";
  modalImg.src = img8.src;
  captionText.innerHTML = img8.alt;
}
var img9 = document.getElementById("myImg9");
var imageText9 = document.getElementById("imageText9");
imageText9.onclick = function(){
  modal.style.display = "block";
  modalImg.src = img9.src;
  captionText.innerHTML = img9.alt;
}
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
*/
