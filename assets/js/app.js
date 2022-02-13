

// console.log('Funcionando');
//enviar formulario a la base de datos
var formulario = document.getElementById('formulario-modal');
var respuesta = document.getElementById('respuesta');

formulario.addEventListener('submit',  function(e) {
    e.preventDefault();
    // console.log('Me diste un click UwU');

    var datos = new FormData(formulario);


    //  console.log(datos);
    //  console.log(datos.get('imagen'))
    //  console.log(datos.get('nombre'))
    //  console.log(datos.get('desc'))
    //  console.log(datos.get('fecha'))

    fetch('ficheros/upload.php',{
        method: 'POST',
        body: datos
    })
    .then( res => res.json())
    .then( data => {
        console.log(data)
        if(data === 'error') {
            Swal.fire(
              'Error',
              'Revise los datos ingresados',
              'error'
            )
           
        }else{
          Swal.fire(
            'Success',
            'Se a registrado correctamente',
            'success'
          )
        }
    })

    });
