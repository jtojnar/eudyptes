$(function() {
	$('.pin-spoiler').popover({trigger: 'click', placement: 'top'});
	$('#pinslist img').popover({trigger: 'hover', container: 'body'});
	$('input.nospam').val('nospam');
	$('.nospam').css('display', 'none');
	$('details').details();

	$.nette.init();
});
