'use strict';   // Mode strict du JavaScript

/*************************************************************************************************/
/* ****************************************** DONNEES ****************************************** */
/*************************************************************************************************/
var slides = [
{ image:'../images/1.jpg', legend:'first image',
 image:'../images/2.jpg', legend:'second image',
 image:'../images/3.jpg', legend:'third image',
 image:'../images/4.jpg', legend:'quatre image',
 image:'../images/5.jpg', legend:'cinq image',
 image:'../images/6.jpg', legend:'six image'
}]


/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/
function onClickButton () {
  button.classList.toggle('hidden');
}


/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/


// Installation d'un gestionnaire d'évènement clic sur le bouton.
var button = document.getElementByClassName('toolbar');
button.addEventListener('click', onClickButton);
