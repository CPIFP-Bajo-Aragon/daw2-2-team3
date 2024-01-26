/* OPEN MODAL FORMACIÓN BOTÓN EDITAR*/

function openModalEditPerfil() {
  var modal = document.createElement('div');
  modal.className = 'modalCreate';

  var modalCard = document.createElement('div');
  modalCard.className = 'modalCard';
  // Titulo Card
  var titulo = document.createElement('h2');
  titulo.textContent = "Editar información del perfil";
  modalCard.appendChild(titulo);

  var closeButton = document.createElement('span');
  closeButton.className = 'closeButton';
  closeButton.innerHTML = '&times;';
  closeButton.onclick = closeModal;
  modalCard.appendChild(closeButton);

  var form = document.createElement('form');
  form.className = 'form-container';
  form.method = 'POST';
  form.onsubmit = validarFechas;
  form.action = '/Usuarios/editarMiPerfil';


  // Nombre

  var labelNombre = document.createElement('label');
  labelNombre.htmlFor = 'nombre';
  labelNombre.textContent = 'Nombre:';


  var inputNombre = document.createElement('input');
  inputNombre.type = 'text';
  inputNombre.name = 'nombre';
  inputNombre.required = true;

   // Apellidos

   var labelApellidos = document.createElement('label');
   labelApellidos.htmlFor = 'apellidos';
   labelApellidos.textContent = 'Apellidos:';
 
 
   var inputApellidos = document.createElement('input');
   inputApellidos.type = 'text';
   inputApellidos.name = 'apellidos';
   inputApellidos.required = true;

   // Correo

   var labelCorreo = document.createElement('label');
   labelCorreo.htmlFor = 'correo';
   labelCorreo.textContent = 'Correo:';
 
 
   var inputCorreo = document.createElement('input');
   inputCorreo.type = 'text';
   inputCorreo.name = 'correo';
   inputCorreo.required = true;  

   // Nif

   var inputNif = document.createElement('input');
   inputNif.type = 'hidden';
   inputNif.name = 'nif';
   inputNif.required = true;  

  
 
  fetch('http://192.168.4.247/Usuarios/editarMiPerfil')
    .then(response => {
      if (!response.ok) {
        throw new Error('Error en la solicitud Fetch. Estado de respuesta: ' + response.status);
      }
      return response.json();
    })
    .then(data => {
      console.log('Después de fetch');
      console.log('Datos recibidos:', data);
      inputNombre.value = data.nombre;
      inputApellidos.value = data.apellidos;
      inputCorreo.value = data.correo;
      inputNif.value = data.nif;
    })
    .catch(error => {
      if (error instanceof SyntaxError) {
        console.error('Error: La respuesta del servidor no es un JSON válido.');
      } else {
        console.error('Error en la solicitud Fetch:', error.message, error);
      }
    });
  form.appendChild(labelNombre);
  form.appendChild(inputNombre);
  form.appendChild(labelApellidos);
  form.appendChild(inputApellidos);
  form.appendChild(labelCorreo);
  form.appendChild(inputCorreo);
  form.appendChild(inputNif);




  var submitButton = document.createElement('input');
  submitButton.type = 'submit';
  submitButton.value = 'Editar perfil';
  form.appendChild(submitButton);

  modalCard.appendChild(form);
  modal.appendChild(modalCard);

  var modalContainer = document.getElementById('modal-container');
  modalContainer.innerHTML = '';
  modalContainer.appendChild(modal);

  modal.style.display = 'block';
}



// VALIDAR, CERRAR, ETC...

function closeModal() {
  var modalContainer = document.getElementById('modal-container');
  modalContainer.innerHTML = '';
}

function validarFechas() {
  var fechaInicio = new Date(document.getElementsByName("Fecha_Inicio")[0].value);
  var fechaFin = new Date(document.getElementsByName("Fecha_Fin")[0].value);

  if (fechaFin <= fechaInicio) {
    alert("La Fecha de Fin debe ser posterior a la Fecha de Inicio.");
    return false;
  }
  return true;
}