$(function(){

	var $header = $('#header'),
		$nav = $('#nav'),
		$navIcon = $('.nav-icon',$header),
		$navClose = $('.close',$nav);
		$port = $('#portfolio');
		$portList = $('.port-list',$port);
		$myblog = $('#myblog');
		$myblogList = $('.col',$myblog);
		$toTop = $('#toTop');


		//导航
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
		//portfolio
	var imgWidth = $('li',$portList).find('.port-img').width();
	var imgHeight = $('li',$portList).find('.port-img').height();
	$('li',$portList).hover(function(){
		$(this).find('.mask').show().stop().animate({
			opacity: 0.84
		});
		$(this).find('.port-img').stop().animate({
			width: imgWidth*1.1,
			height: imgHeight*1.1,
			marginTop: -imgHeight*0.1/2,
			marginLeft: -imgWidth*0.1/2
		});
	},function(){
		$(this).find('.mask').stop().animate({
			opacity: 0
		}).hide();
		$(this).find('.port-img').stop().animate({
			width: imgWidth*1,
			height: imgHeight*1,
			marginTop: 0,
			marginLeft: 0
		});
	});


		// myblog

		
		// $.getJSON('js/blogs.json',function(data){
		// 	// console.log(data);
		// 	for(var i=0; i<data.length; i++){
		// 		var blog = data[i];
		// 		var $minUl = getMinUl();
		// 		$minUl.append("<li><img src=img/" + blog.blog_img + " alt=" + "></li>");
		// 		$minUl.append("<li><h3><a href=" + "#" + ">" + blog.blog_title + "</a></h3>");
		// 		$minUl.append("</li><li><span>" + blog.blog_author + " | " + "</span><a href=" + "#" + ">" + blog.blog_comments + "</a></li>");
		// 		$minUl.append("<li><p>" + blog.blog_content + "</p></li>");

		// 	}	

		// });



		// function getMinUl(){
		// 	var $minUl = $myblogList.eq(0);
		// 	for(var i=1; i<3; i++){
		// 		if( $minUl.height() > $myblogList.eq(i).height() ){
		// 			$minUl = $myblogList.eq(i);
		// 		}
		// 	}
		// 	return $minUl;
		// }

		// top-top
		
		// $(window).scroll(function(){
		// 	if( $(window).scrollTop() > 400){
		// 		$toTop.show();
		// 	}else{
		// 		$toTop.hide();
		// 	}
		// })
		// $toTop.click(function(){
		// 	// $(this).animate({
		// 	// 	top: 400
		// 	// },200);
		// 	$(window).animate({
		// 		scrollTop: 400
		// 	},200);

		// })

		// top-top
		$().UItoTop({ easingType: 'easeOutQuart' });
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});


















});