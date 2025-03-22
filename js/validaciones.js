function validarLogin(){
    document.getElementById("form-login").addEventListener("onsubmit",function(event){
        event.preventDefault();
    
    
        const usuario =document.getElementsByName("usuario").value.trim();
    
        if(usuario===""){
            alert("El nombre de usuario es obligatorio");
        }
        else if(!/^[a-zA-Z0-9_]+$/.test(usuario)){
            alert("el nombre de usuario solo debe incluir letras, numeros o guiones bajos");
        }
    });
}

function validarGuardarTesis(){
    const titulo = document.getElementById("titulo").value;
    const autores = document.getElementById("autor").selectedOptions;
    const tutores = document.getElementById("tutor").selectedOptions;
    const tipo_trabajo = document.getElementById("tipo-trabajo").value;

    if(titulo.length===0){
        alert("Debe introducir un titulo");
        event.preventDefault();
    }

    if(autores.length===0){
        alert("debe seleccionar al menos un autor");
        event.preventDefault()
    }
    if(tutores.length===0){
        alert("debe seleccionar al menos un tutor");
        event.preventDefault()
    }
    if(!tipo_trabajo){
        alert("debe seleccionar un tipo de trabajo");
        event.preventDefault()
    }
    if(!autor){
        alert("debe seleccionar un autor");
        event.preventDefault()
    }

}