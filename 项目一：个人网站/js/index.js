$(function(){

	var $header = $('#header'),
		$nav = $('#nav'),
		$navIcon = $('.nav-icon',$header),
		$navClose = $('.close',$nav);
	$navIcon.on('click',function(){
		$nav.animate({
			top: 0
		});
	});
	$navClose.on('click',function(){
		$nav.animate({
			top: -192
		});
	});
});