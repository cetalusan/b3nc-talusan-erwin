// $('p').hide();

// $('.para-to-hide').hide();

// $('#paraToHideWithId').hide();

// $('p').click(function() {
// 	$(this).hide();
// });

// function hideThisElement() {
// 	$(this).hide();
// }

// $('p').click(hideThisElement);

// $("#paraToHideWithId").hover(function(){
// 	$(this).html("I am a changed paragraph.");
// });

$("p").click( function() {
	$(this).attr("height", "100px")
	$(this).css("color", "red");
});

