$(document).ready(function(){

  	$('[data-modal-target]').on('click', function(e){
	    e.preventDefault();

	    var link = $(this),

	    	modalId = link.data('modal-target');

	    $(modalId).fadeIn(500);

	});
	   



	$('.tv-modal__close').on('click', function(){
		$(this).closest('.tv-modal').fadeOut();
	});

});


