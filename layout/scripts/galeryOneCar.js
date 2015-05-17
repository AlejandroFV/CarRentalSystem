

var images;
var cont;
var first;
var last;

function inicializarVariables(){
	images = new Array(6);
	images[0] = "../images/PopularCarOne/one-01.png";
	images[1] = "../images/PopularCarOne/one-02.png";
	images[2] = "../images/PopularCarOne/one-03.png";
	images[3] = "../images/PopularCarOne/one-04.png";
	images[4] = "../images/PopularCarOne/one-05.png";
	images[5] = "../images/PopularCarOne/one-06.png";
	cont = 0;
	first = 0;
	last = images.length-1;
}

function lastImage(){
	cont = last;
	document.getElementById("galeryImage").src = images[cont];
}

function firstImage(){
	cont = first;
	document.getElementById("galeryImage").src = images[cont];
}

function nextImage(){
	if (cont<last) {
		cont++;
		document.getElementById("galeryImage").src = images[cont];
	}
}

function previousImage(){
	if (cont>first) {
		cont--;
		document.getElementById("galeryImage").src = images[cont];
	}
}