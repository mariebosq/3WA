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

var mainImage = document.getElementById('main-image');
var index = 0;
var mainLegend = document.getElementById('main-legend');

var slides = [
{src:'images/1.jpg', legend:'first image'},
{src:'images/2.jpg', legend:'second image'},
{src:'images/3.jpg', legend:'third image'},
{src:'images/4.jpg', legend:'quatre image'},
{src:'images/5.jpg', legend:'cinq image'},
{src:'images/6.jpg', legend:'six image'}
];

/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/

// Barre de navigation cacher/afficher

function onClickButton () {
  nav.classList.toggle('hidden');
}
//bouton previous pour la légende et l'image
function changeMainImageSource(url) {
  mainImage.src = url
}
function changeMainImageLegend(text) {
  mainLegend.innerHTML = text
}

function changePreviousImage () {
  var currentImage = slides[index]
  if (currentImage == slides[0]) {
    index = 5;
    changeMainImageSource(slides[index].src)
    changeMainImageLegend(slides[index].legend)
  } else {
    index--;
    changeMainImageSource(slides[index].src)
    changeMainImageLegend(slides[index].legend)
  }
}

//bouton next pour l alégende et l'image
function changeNextImage () {
  var currentImage = slides[index]
  if (currentImage == slides[0] - 1) {
    index = 5;
    changeMainImageSource(slides[index].src)
    changeMainImageLegend(slides[index].legend)
  } else {
    index++;
    changeMainImageSource(slides[index].src)
    changeMainImageLegend(slides[index].legend)
  }
}

function changeRandomImage () {
  var currentImage = slides[index];
  index = Math.floor(Math.random() * slides.length);
  changeMainImageSource(slides[index].src);
  changeMainImageLegend(slides[index].legend);
}

function playImage () {
  var intervalId = setInterval(changeNextImage, 1000);
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
