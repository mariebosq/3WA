$(function() {

	$("#zoom").hover(function() {
		$("#zoom img").animate({zoom: '1.3'}, "slow");
	}, function() {
		$("#zoom img").animate({zoom: '1.0'}, "slow");
	});
})