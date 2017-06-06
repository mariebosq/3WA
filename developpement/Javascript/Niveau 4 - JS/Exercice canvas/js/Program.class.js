var Program = function(){
  this.pen = new Pen();
  this.canvas = new Slate(this.pen);
  this.colorPalette = new ColorPalette(this.pen);
}


Program.prototype.start = function(){
  $(".pen-color").on("click", this.onClickPickColor.bind(this));
  $(".pen-size").on("click", this.onClickPenSize.bind(this));
  $("#tool-color-picker").on("click", this.onClickColourPicker);
}

Program.prototype.onClickColourPicker = function(event){
  $('#color-palette').removeClass('hide');

}

Program.prototype.onClickPenSize = function(event){
  this.pen.setSize($(event.target).attr("data-size"));
}

Program.prototype.onClickPickColor = function(event){
  this.pen.setColour($(event.target).attr("data-color"));
}
