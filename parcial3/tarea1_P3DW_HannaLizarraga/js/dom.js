function inicializar(){
  var btnAgregar = document.getElementById("agregar");
  btnAgregar.addEventListener("click", addSubject);
  var btnEditar = document.getElementById("editar");
  btnEditar.addEventListener("click", editSubject);
  var btnEliminar = document.getElementById("eliminar");
  btnEliminar.addEventListener("click", deleteSubject);
}

function addSubject(){
  //Crear el elemento
  var elemento=document.createElement("li"),
      materia = document.getElementById("subject");
  //Crear el contenido
      contenido=document.createTextNode(materia.value);
      //alert(contenido);
  //Agregar el contenido al elemento
  elemento.appendChild(contenido);

  var padre = document.getElementById("lista");
  //var padre2 = document.getElementByTagName("li")[0].parentNode;
  padre.appendChild(elemento);
  materia.value="";
  materia.focus();
}

function editSubject(){
  //Crear el elemento
  var elemento = document.createElement("li"),
      destino = document.getElementById("subject"),
      position = document.getElementById("position"),
  //Crear el contenido
      contenidoc = document.createTextNode(destino.value);
      //alert(contenido);
  //Agregar el contenido al elemento
  //elemento.appendChild(contenido);

  var padre = document.getElementById("lista");
  console.log(padre.getElementsByTagName("li"));

  var i = parseInt(position.value) - 1;
  var ref = padre.getElementsByTagName("li")[i];

  var ref2 = ref
  ref2.innerText = destino.value;
  padre.replaceChild(ref2, ref);

  destino.value="";
  destino.focus();
}

function deleteSubject(){

  var position = document.getElementById("position"),
  destino = document.getElementById("subject");
  var padre = document.getElementById("lista");

  var i = parseInt(position.value) - 1;
  var ref = padre.getElementsByTagName("li")[i];
  padre.removeChild(ref);

  destino.value="";
  destino.focus();
}

window.addEventListener("load", inicializar);
