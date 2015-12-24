

$( document ).ready(function() {
    var $modal = $('#exampleModal1');

	$.ajax("auth/register")   
	  .done(function(resp){
	    $modal.html(resp.html).foundation('open');  
	});

});












//# sourceMappingURL=app.js.map
