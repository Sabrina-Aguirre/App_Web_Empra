const formulario = document.getElementByTagName("form")[0]

formulario.addEventListener('submit',validarCampos)

var email =document.getElementById("email")
var apellido =document.getElementById("clave")


function validarCampos(event){
    let valido = true
    event.preventDefault()
    if(email.value.trim() === '' || email.value.legth < 20 || email.value.length > 50)
    nombre.classList.add('is-invalid')
    valido = false
}
document.querySelector("#email").addEventListener('blur',(event) =>{
    var reEmail = /^[A-Za-z]+([\.\-_]?\w+)*@[A-Za-z]+([\-_]?\w+)*(\.[A-Za-z]{2,7})+$/
    var emailCadena = evento.target
    mailCadena.classList.add('is-invalid','is-valid')
    if(!regEmail.test(emailCadena.value)){
        emailCadena.classList.add('is-invalid')
    }else{
        emailCadena.classList('is-valid')
    }
})
var clave = document.getElementById("clave")