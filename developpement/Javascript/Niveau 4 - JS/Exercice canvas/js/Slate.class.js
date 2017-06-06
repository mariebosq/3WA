//propriété canvas on va stocker l'élément html dan slequel on peut écrire dans le bloc
//stocker le contexte (au sens canvas)

//function currentLocation()//
//mémoire l'endroit ou se trouve la souris


//propriété pen qui contiendra une référence à l'objet pen
var Slate = function(pen){
  this.canvas = $("#slate")[0];
  this.context = this.canvas.getContext('2d');
  this.currentLocation = null;
  this.isDrawing = false;

  this.context.lineWidth = 50;
  // this.context.lineJoin = 'round';
  this.context.lineCap = 'round';
  // this.context.strokeStyle = 'blue';

  this.canvas.addEventListener("mousedown", this.onMouseDown.bind(this));
  this.canvas.addEventListener("mousemove", this.onMouseMove.bind(this));
  this.canvas.addEventListener("mouseup", this.onMouseUp.bind(this));
  $("#tool-clear-canvas").on("click", this.clear.bind(this));

  this.pen = pen;
}

Slate.prototype.clear = function(){
  this.context.clearRect(0,0, this.canvas.width, this.canvas.height);
}

Slate.prototype.getMouseLocation = function(event){
  var position = {
    x: event.pageX,
    y: event.pageY
  }
  return position;
}

Slate.prototype.onMouseDown = function(event){
  var position = this.getMouseLocation(event)
  console.log('Position : ' + position.x + ', ' + position.y)

  this.isDrawing = true;
  this.pen.configure(this.context);
  this.currentLocation = this.getMouseLocation(event);
}

Slate.prototype.onMouseMove = function(event){
  if (this.isDrawing) {
    var position = this.getMouseLocation(event);

    this.context.beginPath();
    this.context.moveTo(this.currentLocation.x - this.canvas.offsetLeft, this.currentLocation.y - this.canvas.offsetTop);
    this.context.lineTo(position.x - this.canvas.offsetLeft, position.y - this.canvas.offsetTop);
    this.context.stroke();

    this.currentLocation = position;
  }
}

Slate.prototype.onMouseUp = function() {
  this.isDrawing = false;
}
