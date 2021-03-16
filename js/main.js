import {obtenerDatos, enviarDatos} from './modulo.js';

document.getElementById('enviar').addEventListener('click', (e)=>{
  e.preventDefault();
  let datos = obtenerDatos();
  // console.log(datos);
  if(datos.nombre != ""){
    if(datos.email.includes("@") && datos.email.includes('.com')){
      if(datos.cum > 6.9){
        if(datos.bachillerato != ""){
          if(datos.tipoInst != "Elige tipo de institucion donde estudiaste"){
            if(datos.sede != "Elige la sede donde deseas estudiar"){
              if(datos.carrera != "Elige la carrera que deseas estudiar"){
                let datosFinales = new FormData();
                datosFinales.append('nombre', datos.nombre);
                datosFinales.append('email', datos.email);
                datosFinales.append('cum', datos.cum);
                datosFinales.append('bachillerato', datos.bachillerato);
                datosFinales.append('tipoInst', datos.tipoInst);
                datosFinales.append('sede', datos.sede);
                datosFinales.append('carrera', datos.carrera);
                enviarDatos(datosFinales);
              }else{
                Swal.fire({
                  title: 'Error!',
                  text: 'Debes elegir una carrera o es que no quieres estudiar?',
                  icon: 'error',
                  confirmButtonText: 'ok'
                })
              }
            }else{
              Swal.fire({
                title: 'Error!',
                text: 'Debes elegir una sede',
                icon: 'error',
                confirmButtonText: 'ok'
              })
            }
          }else{
            Swal.fire({
              title: 'Error!',
              text: 'Debes elegir una opcion publica o privada',
              icon: 'error',
              confirmButtonText: 'ok'
            })
          }
        }else{
          Swal.fire({
            title: 'Error!',
            text: 'Debes ingresar el nombre de la institucion donde cursaste tu bachillerato',
            icon: 'error',
            confirmButtonText: 'ok'
          })
        }
      }else{
        Swal.fire({
          title: 'Error!',
          text: 'Ey como es que tu te graduaste',
          icon: 'error',
          confirmButtonText: 'ok'
        })
      }
    }else{
      Swal.fire({
        title: 'Error!',
        text: 'Debes ingresar un correo valido',
        icon: 'error',
        confirmButtonText: 'ok'
      })
    }
  }else{
    Swal.fire({
      title: 'Error!',
      text: 'Debes ingresar tu nombre',
      icon: 'error',
      confirmButtonText: 'ok'
    })
  }
});