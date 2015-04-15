function validarUsuario(){
	nombre = document.getElementById("user");
	pass = document.getElementById("password");
	if(nombre.value == "asdf" && pass.value=="1234") return true;
	else return false;
}

function enviarInformacion(){
	if(validarUsuario()) alert("Cuenta valida");
	else alert("Cuenta inválida");
}

function focusMouseLogIn(){
	user = document.getElementById("user");
	user.focus();
}
