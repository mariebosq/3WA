'use strict';

/////////////////////////////////////////////////////////////////////////////////////////
// FONCTIONS                                                                           //
/////////////////////////////////////////////////////////////////////////////////////////


function addIngredient(event) {
	event.preventDefault();
	// on recupere l'ingredient selectionné
	var id = $("#ingredients-list option:selected").val();
	var name = $("#ingredients-list option:selected").text();
	var quantities = $("#quantity").val();

	// on l'affiche
	$("#selected-ingredients").append('<li>' + name + '</li>');
	$("#selected-quantity").append('<li>' + quantities + '</li>');

	// on insere l'ingredient dans le formulaire
	var field = $('<input type="hidden" name="ingredients[]" value="' + id + '">');
	$("#hidden-fields").append(field);
	var field = $('<input type="hidden" name="quantity[]" value="' + id + '">');
	$("#hidden-fields").append(field);
}


/////////////////////////////////////////////////////////////////////////////////////////
// CODE PRINCIPAL                                                                      //
/////////////////////////////////////////////////////////////////////////////////////////

$("#add-ingredient").on('click', addIngredient);
