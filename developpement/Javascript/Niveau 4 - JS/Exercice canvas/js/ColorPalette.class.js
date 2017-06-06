var ColorPalette = function(pen) {
  this.canvas = document.querySelector('#color-palette');
  this.context = this.canvas.getContext('2d');
  this.getColor ={
    red : 0,
		green : 0,
		blue : 0
  }
  this.build();
  this.pen = pen;
  this.canvas.addEventListener('click', this.onClickChangeGradientColour.bind(this));
}

ColorPalette.prototype.build = function () {

  var horizontalGradient = this.context.createLinearGradient(0,0,this.canvas.width,0);

  horizontalGradient.addColorStop(0,"rgb(255,0,0)");
  horizontalGradient.addColorStop(0.166666667,"rgb(255,255,0)");
  horizontalGradient.addColorStop(0.333333334,"rgb(0,255,0)");
  horizontalGradient.addColorStop(0.500000001,"rgb(0,255,255)");
  horizontalGradient.addColorStop(0.666666668,"rgb(0,0,255)");
  horizontalGradient.addColorStop(0.833333335,"rgb(255,0,255)");
  horizontalGradient.addColorStop(1,"rgb(255,0,0)");

  this.context.fillStyle = horizontalGradient;
  this.context.fillRect(0,0,this.canvas.width,this.canvas.height);

  var verticalGradient = this.context.createLinearGradient(256,0,256,256);

  verticalGradient.addColorStop(0,"rgba(255,255,255,1)");
  verticalGradient.addColorStop(0.5,"rgba(255,255,255,0)");
  verticalGradient.addColorStop(0.5,"rgba(0,0,0,0)");
  verticalGradient.addColorStop(1,"rgba(0,0,0,1)");

  this.context.fillStyle = verticalGradient;
  this.context.fillRect(0,0,this.canvas.width,this.canvas.height);
}

ColorPalette.prototype.onClickChangeGradientColour = function(event) {
  var x = event.offsetX;
  var y = event.offsetY;

  var imageData = this.context.getImageData(x, y, 1, 1).data;
  rgbColor = 'rgb(' + imageData[0] + ',' + imageData[1] + ',' + imageData[2] + ')';
  this.pen.setColourAsRgb(imageData[0], imageData[1], imageData[2]);
}
