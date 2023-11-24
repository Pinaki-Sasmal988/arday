/*****collegelist******/
$(window).resize(function() {
if ($(window).width() < 992) {
	$('#collapseFilters').removeClass('show');
    
} else {
    //$('#menu2').removeClass('f-nav');
    $('#collapseFilters').addClass('show');
}
}).resize();
/*****collegelist******/