//alert('Hello');

//$('.container').append('<p>SHOW!!!</p>');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$('#opener').on('click', function() {		
		var panel = $('#slide-panel');
		if (panel.hasClass("visible")) {
			panel.removeClass('visible').animate({'margin-left':'-300px'});
		} else {
			panel.addClass('visible').animate({'margin-left':'0px'});
		}	
		return false;	
	});