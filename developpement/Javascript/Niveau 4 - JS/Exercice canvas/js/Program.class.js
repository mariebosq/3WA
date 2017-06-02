var Program = function(){
  this.canvas = new Slate();
  this.pen = new Pen();
  this.colorPicker = new ColorPicker();
}

//affecter une couleur prédéfinie au pinceau
Program.prototype.onClickColourPicker = function(event) {

}

Program.prototype.start = function(){
  $(".pen-color").on("click", this.onClickPenColor.bind(this));
  $(".pen-size").on("click", this.onClickPenSize.bind(this));
  $("#tool-clear-canvas").on("click", this.canvas.clear.bind(this.canvas));
  $("#tool-color-picker").on("click", this.onClickColourPicker.bind(this));
  $(document).on("magical-slate:pick-colour", this.onPickColour.bind(this));
}

Program.prototype.onClickColorPicker = function(){
  $('#color-palette').toggleClass('hide');
}

Program.prototype.onClickPenSize = function(event){
  this.Pen.setSize($(event.target).attr("data-size"));
}

function onClickPickColor(){
  this.Pen.setColor($(event.target).attr("data-color"));
}
