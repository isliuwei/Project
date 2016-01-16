<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>detail</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/single.css">
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar(){
            window.scrollTo(0,1);
        }
    </script>
    <!-- webfonts -->
<!--    <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,300,600,500,900,700,100,800' rel='stylesheet' type='text/css'>-->
<!--    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>-->
    <!-- // webfonts -->
</head>
<body>
<div id="header" class="contact-header">
    <span class="nav-icon"></span>
    <div id="nav">
        <div class="nav-wrap"></div>
        <ul class="nav-menu-list">
            <li><a href="index.php">HOME</a></li>
            <li><a href="#aboutme">ABOUT</a></li>
            <li><a href="#myservice">SERVICES</a></li>
            <li><a href="#portfolio">PORTFOLIO</a></li>
            <li><a href="#myblog">BLOG</a></li>
            <li><a href="#contact">CONTACT</a></li>
        </ul>
        <span class="close"></span>
    </div>
</div>
<div id="single-container">
    <div class="wrap">
        <img src="<?php echo $blog_article -> blog_photo; ?>" alt="">
        <p><?php echo $blog_article -> blog_content; ?></p>
        <div class="comment">
            <h5 class="post-author_head">Written by <a href="#" title="Posts by admin" rel="author"><?php echo $blog_article -> admin_name; ?></a></h5>
            <img src="<?php echo $blog_article -> admin_photo; ?>" class="img-responsive" alt="">
            <p>View all posts by: <a href="#" title="Posts by admin" rel="author"><?php echo $blog_article -> admin_name; ?></a></p>
        </div>
        <div class="comment-list">
            <h3 class="comment-title">所有评论</h3>

            <?php
                 foreach ($comments as $comment){
            ?>
                 <div class="comment-wrap">
                     <div class="comment-info">
                         <span class="comment-floor">1楼 | </span>
                         <span class="comment-username">评论用户:<?php echo $comment -> username; ?> | </span>
                         <span class="comment_time">评论时间:<?php echo $comment -> add_time; ?></span>
                     </div>
                     <div class="comment-content">
                         <div  class="comment-user-photo" >
                             <img src="img/comment-user-bg.gif" alt="">
                         </div>
                         <div class="comment-text">
                             <p><?php echo $comment -> subject; ?></p>
                         </div>
                     </div>
                 </div>
            <?php
                }
            ?>
<!--            <div class="comment-wrap">-->
<!--                <div class="comment-info">-->
<!--                    <span class="comment-floor">1楼 | </span>-->
<!--                    <span class="comment-username">评论用户:admin1 | </span>-->
<!--                    <span class="comment_time">评论时间:2016-01-12 19:05</span>-->
<!--                </div>-->
<!--                <div class="comment-content">-->
<!--                    <div  class="comment-user-photo" >-->
<!--                        <img src="img/comment-user-bg.gif" alt="">-->
<!--                    </div>-->
<!--                    <div class="comment-text">-->
<!--                        <p>【马云：要能重新选择，我一定不做马云】知名媒体人吴小莉在7月曾对话阿里巴巴创始人马云，马云在台上语出惊人的表示“要能重新选择，我一定不做马云，太辛苦了”。马云甚至公开说后悔在美国上市，事业爬升太高，自己相当“缺氧”</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="comment-wrap">-->
<!--                <div class="comment-info">-->
<!--                    <span class="comment-floor">2楼 | </span>-->
<!--                    <span class="comment-username">评论用户:admin2 | </span>-->
<!--                    <span class="comment_time">评论时间:2016-01-12 12:35</span>-->
<!--                </div>-->
<!--                <div class="comment-content">-->
<!--                    <div  class="comment-user-photo" >-->
<!--                        <img src="img/comment-user-bg.gif" alt="">-->
<!--                    </div>-->
<!--                    <div class="comment-text">-->
<!--                        <p>【李彦宏：IT大佬都掉水里，我会救雷军】李彦宏10月参加了央视节目《开讲啦》，在节目中撒贝宁问李彦宏：“如果马云、马化腾、刘强东和雷军同时掉水里，你只能救一个?你会救谁?”李彦宏笑称会救雷军，因为雷军最近送了他一部小米手机!</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="comment-wrap">-->
<!--                <div class="comment-info">-->
<!--                    <span class="comment-floor">3楼 | </span>-->
<!--                    <span class="comment-username">评论用户:admin3 | </span>-->
<!--                    <span class="comment_time">评论时间:2016-01-11 23:10</span>-->
<!--                </div>-->
<!--                <div class="comment-content">-->
<!--                    <div  class="comment-user-photo" >-->
<!--                        <img src="img/comment-user-bg.gif" alt="">-->
<!--                    </div>-->
<!--                    <div class="comment-text">-->
<!--                        <p>【周鸿祎：一觉醒来，整个世界都变了】12月17日，世界互联网大会第二天，一张雷军“深情对视”酣睡着的周鸿祎的照片瞬间刷爆朋友圈，不少网友还配上了有趣的台词，各种版本，各种剧情，各种YY，但当事人貌似还不明就里。直到第二天周鸿祎才回应，“一觉醒来，整个世界都变了。”</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

        </div>

        <div class="new-comment">
            <h3>Add New Comment</h3>
            <form action="welcome/comment" method="post">
                <input type="hidden" name="blog_id" value="<?php echo $this -> input -> get('blog_id'); ;?>">
                <p>
                    <label>Name</label>
                    <span>*</span>
                    <input name="name" type="text" class="text" value="">
                </p>
                <p>
                    <label>Email</label>
                    <span>*</span>
                    <input name="email" type="text" class="text" value="">
                </p>
                <p>
                    <label>Website</label>
                    <input name="website" type="text" class="text" value="">
                </p>
                <p>
                    <label>Subject</label>
                    <span>*</span>
                    <textarea name="subject"></textarea>
                </p>
                <p>
                    <input type="submit" value="Submit Comment" id="submit"  class="submit-btn">
                </p>
            </form>
        </div>
    </div>
</div>

<div id="footer">
    <div class="wrap">
        <div class="bbs">
            <div class="bbs-left">
                <p>Template by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
            </div>
            <div class="bbs-right">
                <ul>
                    <li><a href="#"><span class="facebook"></span></a></li>
                    <li><a href="#"><span class="twitter"> </span></a></li>
                    <li><a href="#"><span class="dribbble"></span></a></li>
                    <li><a href="#"><span class="tech"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>






















<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>






<script src="js/jquery-1.11.3.min.js"></script>
<!--<script src="js/index.js"></script>-->
<script src="js/detail.js"></script>

<!-- start-smoth-scrolling-->
<script src="js/easing.js"></script>
<script src="js/move-top.js"></script>
<!-- // start-smoth-scrolling-->

<!-- light-box-script -->
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css"/>
<script type="text/javascript" charset="utf-8">
    $(function() {
        $('.port-list a').Chocolat({linkImages:false});
    });
</script>
<!-- // light-box-script -->

</body>
</html>