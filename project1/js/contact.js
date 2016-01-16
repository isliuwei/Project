$(function(){
    var $header = $('#header'),
        $nav = $('#nav'),
        $navIcon = $('.nav-icon',$header),
        $navClose = $('.close',$nav);




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




    // top-top返回顶部
    $().UItoTop({ easingType: 'easeOutQuart' });
    // 锚点跳转
    $(".scroll").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });



    //使用ajax
    $('#submit').on('click',function(){
        var $username = $('#username');
        var $email = $('#email');
        var $content = $('#content');
        if($username.val() == ""){
            $username.css('border','1px solid red').css('background','#ccc');
        }
        if($email.val() == ""){
            $email.css('border','1px solid red').css('background','#ccc');
        }
        if($content.val() == ""){
            $content.css('border','1px solid red').css('background','#ccc');
        }

        // $.post(url, data, callback, type);
        $.post('welcome/message',{
            username: $username.val(),
            email: $email.val(),
            content: $content.val()
        },function(res){
           if(res == 'fail'){
               alert('留言失败!');
               $username.css('border','1px solid red');
               $email.css('border','1px solid red');
               $content.css('border','1px solid red');
           }else if(res == 'success' ){
               alert('感谢您的留言!');
           }
        });
    });


    //使用ajax
    $('#username').on('blur',function(){
        $.get('welcome/check_name',{
            uname: this.value
        },function(res){
            if(res == 'fail'){
                alert('用户名已存在!');
            }
        })
    });


});
