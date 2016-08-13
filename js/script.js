$(function() {
	$('#featured').cycle({
		fx: 'scrollLeft',
		speed: 700,
		timeout: 5000
	});
});


$(document).ready(function() {
  
    var cutCount = 2;
  
    $("#testID p").each(function (i) {
        i++;
        if(i == cutCount) {
            $(this).append(' <a href="javascript:void(1)" onclick="$(\'#testID p\').show(); $(this).hide()">Read more</b>')   
        }
        if(i > cutCount) {
           $(this).hide();
        }
    });
    
});



