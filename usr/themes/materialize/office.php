<?php
/**
 * Office页面
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
<meta charset="<?php $this->options->charset(); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>
<?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?>
<?php $this->options->title(); ?>
|
<?php $this->options->description() ?>
</title>
<?php if ($this->options->siteIcon): ?>
<link rel="Shortcut Icon" href="<?php $this->options->siteIcon() ?>" />
<link rel="Bootmark" href="<?php $this->options->siteIcon() ?>" />
<?php endif; ?>

<!-- 使用url函数转换相关路径 -->
<?php if($this->options->codeThemeToggle == 1 && ($this->is('post')||$this->is('page'))): ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/style'); ?>/<?php $this->options->codeTheme() ?>">
<?php endif; ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/animate.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/materialize.min.css'); ?>">

<!--<link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">-->
<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
<!--<link rel="stylesheet" href="<?php $this->options->themeUrl('css/color'); ?>/<?php $this->options->colorTheme() ?>">-->

<!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<!-- 通过自有函数输出HTML头部信息 -->
<?php $this->header(); ?>
</head>
<body style="min-height:100%">
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<div class="preloader">
  <div class="spinner">
    <div class="pre-bounce1"></div>
    <div class="pre-bounce2"></div>
  </div>
</div>
<header id="custom-page-header" class="navbar-fixed fadeInDown row">
  <nav class="col m12 s12">
    <div class="nav-wrapper ">
      <div class="container"> <a id="logo" href="<?php $this->options->siteUrl(); ?>" class="brand-logo">
        <?php if ($this->options->logoUrl): ?>
        <?php endif; ?>
        <?php $this->options->title() ?>
        </a>
        <form id="search" method="post" action="./" role="search" class="right">
          <div class="input-field" style="width:0px;">
            <input id="search" type="search" name="s" required class="">
            <label for="s"><a><i class="material-icons" style="">search</i></a> </label>
          </div>
        </form>
        <ul id="nav-menu" class="right hide-on-med-and-down" role="navigation">
          <li><a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>">
            <?php _e('首页'); ?>
            </a></li>
          <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
          <?php while($pages->next()): ?>
          <li><a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>">
            <?php $pages->title(); ?>
            </a></li>
          <?php endwhile; ?>
        </ul>
        <div id="slide-out" class="side-nav"> <span id="side-title" class="mdl-layout-title"><a id="logo" href="<?php $this->options->siteUrl(); ?>">
          <?php if ($this->options->logoUrl): ?>
          <img class="side-logo" src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
          <?php endif; ?>
          </a></span>
          <ul>
            <?php $this->widget('Widget_Metas_Category_List')->to($pages); ?>
            <?php while($pages->next()): ?>
            <li><a class="collapsible-header waves-effect waves-teal" href="<?php $pages->permalink(); ?>" title="<?php $pages->name(); ?>">
              <?php $pages->name(); ?>
              </a></li>
            <?php endwhile;?>
          </ul>
        </div>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a> </div>
    </div>
  </nav>
</header>
<div id="body" class="row">
  <div class="col m12 s12">
    <div class="container">
      <div class="row">
        <?php $this->content(); ?>
        <div class="col m8 s12" style="float:none; margin:0 auto;">
          <div class="card row">
            <div class="card-content"> <span class="card-title">提交你的注册申请。</span>
              <form action="" autocomplete="off" method="POST">
                <div class="input-field col m6 s12">
                  <input id="firstname" type="text" name="firstname" class="validate" required="">
                  <label for="firstname">姓氏 FirstName</label>
                </div>
                <div class="input-field col m6 s12">
                  <input id="lastname" type="text" name="lastname" class="validate" required="">
                  <label for="lastname">名字 LastName</label>
                </div>
                <div class="input-field col m6 s12">
                  <input id="username" type="text" name="username" class="validate" required="">
                  <label for="username">用户名 UserName</label>
                </div>
                <div class="input-field col m6 s12">
                  <select>
                    <option value="" disabled>选择后缀</option>
                    <option value="1" selected>@dotedu.cn</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                  <label> </label>
                </div>
                <div class="input-field col m12 s12">
                  <input id="password" type="password" name="password" class="validate" required="">
                  <label for="password">密码 PassWord</label>
                </div>
                <div class="input-field col m12 s12">
                  <input id="email" type="email" name="email" class="validate" maxlength="30" required="">
                  <label for="email">邮箱 Email</label>
                </div>
                <div class="col m12 s12" style="margin-bottom:15px;">
                  <button type="submit" class="waves-effect waves-light btn right" id="login"><i class="material-icons left">send</i>提交</button>
                </div>
              </form>
              <div><p></p></div>
            </div>
          </div>
        </div>
      </div>
      <!-- end .row --> 
    </div>
  </div>
</div>
<!-- end #body -->
<footer id="footer" class="page-footer cyan"> 
  <!-- footer-container -->
  <div class="row footer-container white-text">
    <div class="col m12 s12">
      <div class="container">
        <div class="row"></div>
      </div>
    </div>
  </div>
  <!-- footer-copyright -->
  <div class="row footer-copyright">
    <div class="col m12 s12">
      <div class="container">
        <div class="row">
          <div class="col m9 s12 icons-preview-code"> <i id="icon" class="material-icons md-18">copyright</i> <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>">
            <?php $this->options->title(); ?>
            </a>.
            <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>
            .
            <?php if($this->options->miibeian) : ?>
            <a href="http://www.miibeian.gov.cn" rel="nofollow"><?php echo $this->options->miibeian; ?></a>
            <?php endif; ?>
          </div>
          <div class="col m3 s12">
            <?php if ( !empty($this->options->misc) && in_array('ShowLoadTime', $this->options->misc) ) : ?>
            加载耗时：<?php echo timer_stop(), ' s'; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery-2.1.4.min.js');?>"></script> 
<script type="text/javascript" src="<?php $this->options->themeUrl('js/materialize.min.js');?>"></script> 
<script type="text/javascript" src="<?php $this->options->themeUrl('js/scripts.js');?>"></script> 
<script>
$(document).ready(function() {
    $('select').material_select();
  });
</script>
</body>
</html>
