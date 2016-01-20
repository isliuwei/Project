<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Amaze UI Admin form Examples</title>
  <meta name="description" content="这是一个form页面">
  <meta name="keywords" content="form">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <base href="<?php echo site_url();?>">
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->


<?php include 'admin-header.php'; ?>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <?php include 'admin-sidebar.php'; ?>
  <!-- sidebar end -->

<!-- content start -->
<div class="admin-content">

  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">新增信息管理界面</strong> / <small>Add</small></div>
  </div>

  <div class="am-tabs am-margin" data-am-tabs>
    <ul class="am-tabs-nav am-nav am-nav-tabs">
      <li class="am-active"><a href="#tab1">新增用户</a></li>
      <li><a href="#tab2">新增文章</a></li>
      <li><a href="#tab3">新增XXXX</a></li>
    </ul>

    <div class="am-tabs-bd">
      <div class="am-tab-panel am-fade am-in am-active" id="tab1">
        <form action="admin/save_admin" method="post" class="am-form am-form-inline">
          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">用户名</div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <input type="text" name="name" >
            </div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">用户密码</div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <input type="password" name="pwd">
            </div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">用户头像</div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <input type="text" name="photo" value="default">
            </div>
            <div class="am-hide-sm-only am-u-md-6">选填</div>
          </div>

          <div class="am-margin">
            <input type="reset" class="am-btn am-btn-primary am-btn-xs" value="重置">
            <input type="submit" class="am-btn am-btn-primary am-btn-xs" value="提交保存">
            <button type="button" class="am-btn am-btn-primary am-btn-xs">放弃保存</button>
          </div>

        </form>
      </div>

      <div class="am-tab-panel am-fade" id="tab2">
        <form class="am-form" action="admin/save_article" method="post">
          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">文章类型</div>
            <div class="am-u-sm-8 am-u-md-10" style="margin-bottom: 20px;">
              <select name="type" data-am-selected="{btnSize: 'sm'}">
                <option value="原创">原创</option>
                <option value="转载">转载</option>
                <option value="小说">小说</option>
                <option value="散文">散文</option>
                <option value="随笔">随笔</option>
              </select>
            </div>

            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              文章标题
            </div>
            <div class="am-u-sm-8 am-u-md-4">
              <input type="text" name="title" class="am-input-sm">
            </div>
            <div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              文章作者
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
              <input type="text" name="author" class="am-input-sm">
            </div>
            <div class="am-hide-sm-only am-u-md-6">*必填，不可重复，必须填写作者的ID</div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              文章插图
            </div>
            <div class="am-u-sm-8 am-u-md-4">
              <input type="text" name="photo" class="am-input-sm" value="img/default.gif">
              <input type="file">
            </div>
            <div class="am-hide-sm-only am-u-md-6">选填</div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              内容摘要
            </div>
            <div class="am-u-sm-8 am-u-md-4">
              <input type="text" name="summary" class="am-input-sm">
            </div>
            <div class="am-u-sm-12 am-u-md-6">不填写则自动截取内容前255字符</div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
             文章内容
            </div>
            <div class="am-u-sm-12 am-u-md-10">
<!--              使用百度富文本编辑器UEditor-->
<!--              textarea的id值传给var ue = UE.getEditor('editor');-->
              <textarea rows="10" name="content" id="editor">这里写你的文章内容</textarea>
            </div>
          </div>

          <div class="am-margin">
            <input type="reset" class="am-btn am-btn-primary am-btn-xs" value="重置">
            <input type="submit" class="am-btn am-btn-primary am-btn-xs" value="提交保存">
            <button type="button" class="am-btn am-btn-primary am-btn-xs">放弃保存</button>
          </div>

        </form>
      </div>

      <div class="am-tab-panel am-fade" id="tab3">
        <form class="am-form">
          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              XXXX 标题
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <input type="text" class="am-input-sm">
            </div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              XXXX 关键字
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <input type="text" class="am-input-sm">
            </div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              XXXX 描述
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <textarea rows="4"></textarea>
            </div>
          </div>

          <div class="am-margin">
            <button type="button" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
            <input type="reset" class="am-btn am-btn-primary am-btn-xs">
            <button type="button" class="am-btn am-btn-primary am-btn-xs">放弃保存</button>
          </div>

        </form>
      </div>

    </div>
  </div>

<!--  <div class="am-margin">-->
<!--    <button type="button" class="am-btn am-btn-primary am-btn-xs">提交保存</button>-->
<!--    <button type="button" class="am-btn am-btn-primary am-btn-xs">放弃保存</button>-->
<!--  </div>-->
</div>
<!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
  <hr>
  <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer>

<script id="editor" type="text/plain" style="width:1024px;height:500px;"></script>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>

<!--百度富文本编辑器 UEditor-->
<script type="text/javascript" charset="utf-8" src="assets/UEditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="assets/UEditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="assets/UEditor/lang/zh-cn/zh-cn.js"></script>

<script type="text/javascript">

  //实例化编辑器
  var ue = UE.getEditor('editor');

</script>

<!--百度富文本编辑器 UEditor-->





</body>
</html>
