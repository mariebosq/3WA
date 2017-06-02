//propriété canvas on va stocker l'élément html dan slequel on peut écrire dans le bloc
//stocker le contexte (au sens canvas)

//function currentLocation()//
//mémoire l'endroit ou se trouve la souris


//propriété pen qui contiendra une référence à l'objet pen
var Slate = function(){
  this.canvas = $("#slate");
  this.context = canvas.getContext('2d');
  this.currentLocation =  0;
  this.pen = pen;
  this.isDrawing = false;
}

this.clear = function(){
  this.context = clearRect(0,0, this.canvas.width(), this.canvas.height());
}

this.getMouseLocation = function(event){
  var position = {
    x: event.pageX,
    y: event.pageY
  }
return position;
}

this.onMouseDown = function(){
  this.isDrawing = true;
  this.currentLocation = this.getMouseLocation(event);
}

this.onMouseMove = function(){
  if (this.isDrawing) {
    this.currentLocation = this.getMouseLocation(event);

    var cursorX = this.currentLocation.x;
    var cursorY = this.currentLocation.y;

    this.context.beginPath();
    this.context.moveTo(cursorX, cursorY);
    this.context.lineCap = "round";
    this.context.lineTo(cursorX, cursorY);
    this.context.stroke();
  }
}

this.OnMouseUp = function() {
  this.isDrawing = false;
  this.currentLocation = this.getMouseLocation(event);
}

(this.canvas).addEventListener("mousedown", this.onMouseDown.bind(this));
(this.canvas).addEventListener("mousemove", this.onMouseMove.bind(this));

}
