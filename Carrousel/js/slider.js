'use strict';   // Mode strict du JavaScript

/*************************************************************************************************/
/* ****************************************** DONNEES ****************************************** */
/*************************************************************************************************/
var button = document.getElementById('toolbar-toggle');
var nav = document.querySelector('.toolbar');
var previous = document.getElementById('slider-previous');
var next = document.getElementById('slider-next');
var random = document.getElementById('slider-random');
var play = document.getElementById('slider-toggle');

var slides = [
{src:'../images/1.jpg', legend:'first image'},
{src:'../images/2.jpg', legend:'second image'},
{src:'../images/3.jpg', legend:'third image'},
{src:'../images/4.jpg', legend:'quatre image'},
{src:'../images/5.jpg', legend:'cinq image'},
{src:'../images/6.jpg', legend:'six image'}
];

/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/

// Barre de navigation cacher/afficher
function onClickButton () {
  nav.classList.toggle('hidden');
}

function changePreviousImage () {

}

function changeNextImage () {

}

function changeRandomImage () {

}

function playImage () {

}
/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/


// Installation d'un gestionnaire d'évènement clic sur le bouton.
button.addEventListener('click', onClickButton);

previous.addEventListener('click', changePreviousImage);
next.addEventListener('click', changeNextImage);
random.addEventListener('click', changeRandomImage);
play.addEventListener('click', playImage);
