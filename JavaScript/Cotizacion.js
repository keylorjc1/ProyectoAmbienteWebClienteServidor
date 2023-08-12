// Constructor para Seguro
function Producto(producto, cantidad, tipo) {
    this.producto = producto;
    this.cantidad = cantidad;
    this.tipo = tipo;
}

//realiza la cotizacion del seguro

Producto.prototype.cotizarProducto = function() {
    /* 
     1 = Esmaltes 1.15
     2 = Decoraciones 1.05
     3 = Herramientas 1.35
    */
     let cantidad;
     const base = 2000;

     switch(this.producto){
        case '1':
             cantidad = base * 1.15;
             break;
        case '2':
             cantidad = base * 1.05;
             break;
        case '3':
             cantidad = base * 1.35;
             break;
   }

   //leer la cantidad
   const diferencia = new Date().getFullYear() - this.cantidad;
   //cada cantidad que la diferencia es mayor, el costo va a reducirse a un 3%
   cantidad -= ((diferencia * 3) * cantidad) / 100;
   /*
        Si el producto es básico se múltiplica por 30% mas
        Si el producto es completo 50% mas
   */

        if(this.tipo === 'basico') {
            cantidad *= 1.30;
       } else {
            cantidad *= 1.50;
       }

       cantidad = Math.abs(cantidad);
   
        return cantidad;

}



function UI() {}


// Interfaz.prototype.llenarOpciones = function () {
//     const max = new Date().getFullYear(),
//          min = max - 20;

//     const selectAnios = document.querySelector('#year');
//     for(let i = max; i > min; i--) {
//          let option = document.createElement('option');
//          option.value = i;
//          option.innerHTML = i;
//          selectAnios.appendChild(option);
//     }   
// }

//muestra alertas en pantalla

// Mensaje que se imprime en el HTML
UI.prototype.mostrarMensaje = function(mensaje, tipo) {
    const div = document.createElement('div');

    if (tipo === 'error') {
        div.classList.add('error');
    } else {
        div.classList.add('correcto');
    }

    // Adding classes to the element
    div.classList.add('mensaje');

    // Setting the margin-top style property
    // div.style.marginTop = '5%';

    div.textContent = mensaje;

    const formulario = document.querySelector('#cotizar-producto');
    formulario.insertBefore(div, document.querySelector('#resultado'));

    setTimeout( () =>  {
        document.querySelector('.mensaje').remove();
   }, 3000);
}


// nuevo prototype para que muestre la cotizacion
UI.prototype.mostrarResultado = function(total, seguro) {
    const { producto, cantidad, tipo } = seguro;

    let textoProducto;

    switch (producto) {
        case '1':
            textoProducto = 'Esmaltes';
            break;
        case '2':
            textoProducto = 'Decoraciones';
            break;
        case '3':
            textoProducto = 'Herramientas';
            break;
    }

    // crear el resultado
    const div = document.createElement('div');
    // div.style.marginTop = '10%';

    div.innerHTML = `
        <p class="header">Tu Resumen</p>
        <p>Producto: ${textoProducto}</p>
        <p>Cantidad: ${cantidad} productos</p>
        <p>Tipo: ${tipo}</p>
        <p class="font-bold">Total: ₡ ${total.toLocaleString()}</p>
    `;

    const resultadoDiv = document.querySelector('#resultado');

    // Mostrar el spinner antes de realizar el cálculo
    const spinner = document.querySelector('#cargando');
    spinner.style.display = 'block';

    // Simulamos un retardo para que se vea el spinner
    setTimeout(() => {
        spinner.style.display = 'none';
        resultadoDiv.appendChild(div);
    }, 3000);
}


const ui = new UI();

// document.addEventListener('DOMContentLoaded', () => {
//     interfaz.llenarOpciones()
// });

// funcion para saber que lo llama
eventListeners();
function eventListeners(){
    const formulario = document.querySelector('#cotizar-producto');
    formulario.addEventListener('submit', cotizarProducto);
}

function cotizarProducto(e) {
    e.preventDefault();

         // leer el producto seleccionada del select
         const producto = document.querySelector('#producto').value;

         // leer la cantidad seleccionado del <select>
         const cantidad = document.querySelector('#cantidad').value
    
         // lee el valor del radio button, este se lee por el input que tenga el name tipo y me interesa el que esta cheked
         const tipo = document.querySelector('input[name="tipo"]:checked').value;

              // Revisamos que los campos no esten vacios
     if(producto === '' || cantidad === '' || tipo === '') {
        // Interfaz imprimiendo un error
        ui.mostrarMensaje('Faltan datos, revisar el formulario y prueba de nuevo', 'error');
        return;
        }

        ui.mostrarMensaje('Cotizando el Producto', 'exito');

        //ocultar las cotizaciones previas
        const resultados = document.querySelector('#resultado div');
        if (resultados != null) {
            resultados.remove();
        }

        //instanciar el seguro
        const seguro = new Producto(producto, cantidad, tipo);
        const total = seguro.cotizarProducto();

        //utilizar el prototype 
            ui.mostrarResultado(total, seguro);
        }


        //Incremental para SELECT
        var select = document.getElementById("cantidad");

        //loop de primera lista
        for (var i = 1; i <= 25; i++) {
            var opt = document.createElement('option');
            opt.value = i;
            opt.innerHTML = i;
            select.appendChild(opt);
        }

