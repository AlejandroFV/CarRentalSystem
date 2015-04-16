function validateUser() {
	username = document.getElementById("user");
	pass = document.getElementById("password");
	return (username.value == "asdf" && pass.value == "1234");
}

function sendInfo() {
	if(validateUser()) {
		alert("Cuenta valida");
	} else {
		alert("Cuenta inválida");
	}
}

function focusMouseLogIn() {
	user = document.getElementById("user");
	user.focus();
}
