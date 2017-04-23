'use strict'

/*************************************************************************************************/
/* ****************************************** DONNEES ****************************************** */
/*************************************************************************************************/

var images = document.querySelectorAll('img');

/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/
function getSelectedImagesCount() {
	return document.querySelectorAll('img.selected').length
}

function onImageClick () {
	this.classList.toggle('selected');
	document.querySelector('em').innerHTML = getSelectedImagesCount();
}

/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/


for (var i = 0; i < images.length; i++) {
	images[i].addEventListener('click', onImageClick);
}

// tout sélectionner

function selectAllImages () {
	var allimages = document.querySelectorAll('img');
	
	for (var i = 0; i < allimages.length; i++) {
		allimages[i].classList.add('selected');
	}


}

function deselectAllImages () {
	var allimages = document.querySelectorAll('img');

	for (var i = 0; i < allimages.length; i++) {
		allimages[i].classList.remove('selected');
	}
}

var buttonOn = document.getElementById('selectionall');
buttonOn.addEventListener('click', selectAllImages);

var buttonOff = document.getElementById('selectionnone');
buttonOff.addEventListener('click', deselectAllImages);