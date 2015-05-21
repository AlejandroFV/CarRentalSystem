function validateEmail(email) {
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}

function validateForgotForm() {
	var email = document.forms["form"]["email"].value;
	if (validateEmail(email)) {
		alert("Se han enviado instrucciones al correo: " + email);
	} else {
		alert("Por favor escriba una dirección de correo válida");
	}
	return false;
}

function validateLoginForm() {
	var email = document.forms["form"]["email"].value;
	var password = document.forms["form"]["password"].value;
	if (email == "" || password == "") {
		alert("Debe de llenar todos los campos");
		return false;
	}else{
		if (!validateEmail(email)) {
			alert("Por favor escriba una dirección de correo válida");
			return false;
		}
		document.getElementById("login").submit();
	}
}

function validateRegisterForm() {
	var name = document.forms["form"]["name"].value;
	var email = document.forms["form"]["email"].value;
	var password = document.forms["form"]["password"].value;
	var confirmPassword = document.forms["form"]["confirmPassword"].value;

	if (name == "" || email == "" || password == "" || confirmPassword == "") {
		alert("Debe de llenar todos los campos");
		return false;
	}else{
		if (!validateEmail(email)) {
			alert("Por favor escriba una dirección de correo válida");
			return false;
		}
		if (password != confirmPassword) {
			alert("Los passwords no coinciden");
			return false;
		}
		document.getElementById("register").submit();
	}

}
