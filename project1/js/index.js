$(function(){

	var $header = $('#header'),
		$nav = $('#nav'),
		$navIcon = $('.nav-icon',$header),
		$navClose = $('.close',$nav),
		$port = $('#portfolio'),
		$portList = $('.port-list',$port),
		$myblog = $('#myblog'),
		$toTop = $('#toTop');
		//$myblogList = $('.col',$myblog),



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



		// top-top返回顶部
		$().UItoTop({ easingType: 'easeOutQuart' });
		// 锚点跳转
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});


		//瀑布流
		// ?? 2016-01-14  12:27 by liuwei
		////$blogHeadSection = $('.myblog-top',$myblog );
		//$myblogTop = $('.myblog-top',$myblog );
		//var iMyblogTop = $myblogTop.offset().top,
		//	iMyblogHeight = $myblogTop.height();


		$blogHeadSection = $('#myblog .myblog-top');
		var iHeadSectionTop = $blogHeadSection.offset().top,
			iHeadSectionHeight = $blogHeadSection.height();
		var bLoad = true;//判断是否该加载新数据
		var bLoaded = false;//判断本次请求的数据是不是加载完毕
		var isEnd = false;//判断是不是加载完数据库中的所有数据
		var page = 0;//控制分页

		function getMinUl(){
			$blogList = $('#myblog .blog-list');
			var $minUl =  $blogList.eq(0);
			for(var i=1; i<$blogList.length; i++){
				if($blogList.eq(i).height() < $minUl.height()){
					$minUl = $blogList.eq(i);
				}
			}
			return $minUl;
		}

	$(window).on('scroll', function(){

		if($(window).height()+$(window).scrollTop() >= iHeadSectionTop+iHeadSectionHeight && !isEnd){
			if(bLoad){
				bLoad = false;
				$.get('welcome/get_articles?page='+page, function(res){
					if(!res.isEnd){
						for(var i=0; i<res.data.length; i++){
							var blog = res.data[i];
							var html = '<li class="blog-artical">'
									+ '<div class="blog-artical-pic">'
									+ '<a href="welcome/detail?blog_id='+blog.blog_id+'"><img src='+blog.blog_photo+' title="name" /></a>'
									+ '</div>'
									+ '<div class="blog-artical-info">'
									+ '<h3><a href="welcome/detail?blog_id='+blog.blog_id+'">'+blog.blog_title+'</a></h3>'
									+ '<span>'+blog.admin_name+' | <a href="#">13 comments</a></span>'
									+ '<p>'+blog.blog_content+'</p>'
									+ '<a class="more-btn" href="#">See More</a>'
									+ '<div class="clearfix"> </div>'
									+ '</div>'
									+ '</li>';
							var $minUl = getMinUl();
							$minUl.append(html);
						}
						bLoaded = true;
						page += 6;
					}else{
						isEnd = true;
					}
				}, 'json');

			}


			var $minUl = getMinUl();
			if($(window).height()+$(window).scrollTop() >= $minUl.offset().top+$minUl.height() && bLoaded){
				bLoad = true;
				bLoaded = false;
			}
		}


	});

});