export function obtenerDatos(){
  let nombreCompleto = document.getElementById('nombre-completo').value;
  let email = document.getElementById('email').value;
  let cum = parseFloat(document.getElementById('cum').value);
  let bachillerato = document.getElementById('bachillerato').value;

  let tipoInstitucion = document.getElementById('tipo-institucion');
  let tipoInstitucionSeleccionada = tipoInstitucion.options[tipoInstitucion.selectedIndex].value;
  let sede = document.getElementById('sede');
  let sedeSeleccionada = sede.options[sede.selectedIndex].value;
  let carrera = document.getElementById('carrera');
  let carreraSeleccionada = carrera.options[carrera.selectedIndex].value;

  const datos = {
    nombre: nombreCompleto,
    email: email,
    cum: cum,
    bachillerato: bachillerato,
    tipoInst: tipoInstitucionSeleccionada,
    sede: sedeSeleccionada,
    carrera: carreraSeleccionada
  }

  return datos;
}


export function enviarDatos(datos){
  fetch('http://localhost/DesarrolloDeAppsWeb/Examen_Practico_1/server.php', {
    method: 'POST',
    body: datos
  })
  .then(function(response) {
    if(response.ok) {
      Swal.fire({
        title: 'Bien Hecho!',
        icon: 'success',
        confirmButtonText: 'ok'
      })
      return response.json()
    } else {
        throw "Error en la llamada Ajax";
    }
 
 })
 .then(function(data) {
    // console.log(data);
    render(data);

 })
 .catch(function(err) {
    console.log(err);
 });
}

function render(datos){
  let estudiante = document.getElementById('estudiante');
  let email = document.getElementById('mi-email'); 
  let cum = document.getElementById('mi-cum');
  let escuela = document.getElementById('mi-escuela');
  let tipoEscuela = document.getElementById('mi-tipo-escuela');
  let sede = document.getElementById('mi-sede');
  let carrera = document.getElementById('mi-carrera');
  let matricula = document.getElementById('mi-costo-matricula');
  let mensualidad = document.getElementById('mi-costo-mensual');

  estudiante.textContent = datos['estudiante'];
  email.textContent = datos['email'];
  cum.textContent = datos['cum'];
  escuela.textContent = datos['escuela'];
  tipoEscuela.textContent = datos['tipoInst'];
  sede.textContent = datos['sede'];
  carrera.textContent = datos['carrera'];
  matricula.textContent = '$' + datos['matricula'];
  mensualidad.textContent = '$' + datos['mensualidad'];
}
















