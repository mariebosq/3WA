var Pen = function(){
  this.colour = "black";
  this.size = 1;
}

Pen.prototype.setSize = function(size) {
  this.size = size;
}

Pen.prototype.setColour = function(c) {
  this.colour = c;
}

Pen.prototype.configure = function(context) {
  context.lineWidth = this.size;
  context.strokeStyle = this.colour;
}

Pen.prototype.setColourAsRgb = function(red, green, blue) {
  this.colour = 'rgb(' + red + ',' + green + ',' + blue + ')';
}
