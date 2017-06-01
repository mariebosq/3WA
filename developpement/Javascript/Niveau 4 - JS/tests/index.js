'use strict'

var canvas = document.getElementById('tutoriel');
if (canvas.getContext){
  var ctx = canvas.getContext('2d');

  ctx.fillStyle = "rgb(200,0,0)";
  ctx.fillRect (10, 10, 55, 50);
  ctx.fillStyle = "rgba(0, 0, 200, 0.5)";
  ctx.fillRect (30, 30, 55, 50);

  ctx.beginPath();
  ctx.arc(75,75,50,0,Math.PI*2,true); // Cercle exterieur
  ctx.moveTo(110,75);
  ctx.arc(75,75,35,0,Math.PI,false);   // Bouche (sens horaire)
  ctx.moveTo(65,65);
  ctx.arc(60,65,5,0,Math.PI*2,true);  // Oeil gauche
  ctx.moveTo(95,65);
  ctx.arc(90,65,5,0,Math.PI*2,true);  // Oeil droit
  ctx.stroke();
  // Exemples de courbes quadratiques
  ctx.beginPath();
  ctx.moveTo(75,25);
  ctx.quadraticCurveTo(25,0,25,62.5);
  ctx.quadraticCurveTo(25,100,50,100);
  ctx.quadraticCurveTo(50,120,30,125);
  ctx.quadraticCurveTo(60,120,65,100);
  ctx.quadraticCurveTo(125,100,125,62.5);
  ctx.quadraticCurveTo(125,25,75,25);
  ctx.stroke();

  ctx.beginPath();
  ctx.moveTo(75,40);
  ctx.bezierCurveTo(75,37,70,25,50,25);
  ctx.bezierCurveTo(20,25,20,62.5,20,62.5);
  ctx.bezierCurveTo(20,80,40,102,75,120);
  ctx.bezierCurveTo(110,102,130,80,130,62.5);
  ctx.bezierCurveTo(130,62.5,130,25,100,25);
  ctx.bezierCurveTo(85,25,75,37,75,40);
  ctx.fill();



} else {

}
