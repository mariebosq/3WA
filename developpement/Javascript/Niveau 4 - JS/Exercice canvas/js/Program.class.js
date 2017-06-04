var Program = function(){
  this.pen = new Pen();
  this.canvas = new Slate(this.pen);
  // this.colorPicker = new ColorPicker();
}


Program.prototype.start = function(){
  $(".pen-color").on("click", this.onClickPickColor.bind(this));
  $(".pen-size").on("click", this.onClickPenSize.bind(this));
  // $("#tool-clear-canvas").on("click", this.canvas.clear.bind(this.canvas));
  $("#tool-color-picker").on("click", this.onClickColourPicker);
  // $(document).on("magical-slate:pick-colour", this.onPickColour.bind(this));
}

Program.prototype.onClickColourPicker = function(event){
  $('#color-palette').removeClass('hide');
}

Program.prototype.onClickPenSize = function(event){
  this.pen.setSize($(event.target).attr("data-size"));
}

Program.prototype.onClickPickColor = function(){
  this.pen.setColour($(event.target).attr("data-color"));
}
