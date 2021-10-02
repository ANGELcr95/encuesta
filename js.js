let sendbtn1 = document.getElementById("formulario")
let authUser = document.getElementById("into1")
let inputs = document.querySelectorAll('#formulario input') 

let expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, 
	number: /^.{4,12}$/, 
	password: /^.{4,12}$/, 
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,20}$/,
    vacio: /^[^]+$/
}
                
let validarCampo = (expresion, input, campo) => {
    if(expresion.test(input)){  
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
    } else {
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
    }
}

let validarFormulario = (e) => {
    switch (e.target.name) {  
        case "number":  
			validarCampo(expresiones.number, e.target.value , e.target.name);
        break;
        case "email":  
			validarCampo(expresiones.email, e.target.value , e.target.name);
        break;
        case "telefono":  
			validarCampo(expresiones.telefono, e.target.value , e.target.name);
        break;
        case "vacio":  
			validarCampo(expresiones.vacio, e.target.value , e.target.name);
        break;
        case "vacio1":  
			validarCampo(expresiones.vacio, e.target.value , e.target.name);
        break;
        case "vacio2":  
			validarCampo(expresiones.vacio, e.target.value , e.target.name);
        break;
    }
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario)
    input.addEventListener('blur', validarFormulario)  
    
})

let envioCondiciones = () => {
    if(!expresiones.vacio.test(inputs[0].value)
    || !expresiones.vacio.test(inputs[1].value)
    || !expresiones.vacio.test(inputs[2].value)
    || inputs[0].value == ""
    || inputs[1].value == ""
    || inputs[2].value == ""
    || !document.querySelector('input[name="pregunta1"]:checked')
    || !document.querySelector('input[name="pregunta2"]:checked')
    || !document.querySelector('input[name="pregunta3"]:checked')
    || !document.querySelector('input[name="pregunta4"]:checked')
    || !document.querySelector('input[name="pregunta5"]:checked')
    || !document.querySelector('input[name="pregunta6"]:checked')
    || !document.querySelector('input[name="pregunta7"]:checked')
    || !document.querySelector('input[name="pregunta8"]:checked')
    ){

        return false;

    }
    return true;
    
}

authUser.addEventListener('click', () => {
    if(!envioCondiciones()) {
        mostrar.style.display = "block"
    } 
});

sendbtn1.addEventListener('mouseover', envioCondiciones)
sendbtn1.addEventListener('keyup', envioCondiciones)

sendbtn1.addEventListener('submit', (e) => {
    if(!envioCondiciones()) {
        return e.preventDefault();
    }
});



