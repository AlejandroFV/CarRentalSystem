

var images;
var cont;
var first;
var last;

function inicializarVariables(){
	images = new Array(8);
	images[0] = "../images/PopularCarTwo/two-01.png";
	images[1] = "../images/PopularCarTwo/two-02.png";
	images[2] = "../images/PopularCarTwo/two-03.png";
	images[3] = "../images/PopularCarTwo/two-04.png";
	images[4] = "../images/PopularCarTwo/two-05.png";
	images[5] = "../images/PopularCarTwo/two-06.png";
	images[6] = "../images/PopularCarTwo/two-07.png";
	images[7] = "../images/PopularCarTwo/two-08.png";
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