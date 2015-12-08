<?php 
 
//定义一个合理缓存时间。合理值屈居于页面本身、访问者的数量和页面的更新频率，此处为3600秒(1小时)。 
$time = 60 * 60;
  
//发送Last-Modified头标，设置文档的最后的更新日期。 
header ("Last-Modified: " .gmdate("D, d M Y H:i:s", time() )." GMT"); 
 
//发送Expires头标，设置当前缓存的文档过期时间，GMT格式。 
header ("Expires: " .gmdate("D, d M Y H:i:s", time()+$time )." GMT"); 
 
//发送Cache_Control头标，设置xx秒以后文档过时,可以代替Expires，如果同时出现，max-age优先。 
header ("Cache-Control: max-age=$time"); 
  
?>

<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
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
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/animate.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/materialize.min.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/animsition.min.css'); ?>">

<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

<!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<!-- 通过自有函数输出HTML头部信息 -->
<?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<div class="preloader">
    <div class="spinner">
        <div class="pre-bounce1"></div>
        <div class="pre-bounce2"></div>
    </div>
</div>	

<div class="animsition">
<header id="page-header" class="navbar-fixed fixed-header fadeInDown row">
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

<!-- end #header -->
<?php if(isset($this->fields->post_img)): ?>
<?php if($this->is('post')||$this->is('page')): ?>
    <div class="row intro grey lighten-4 wow fadeIn" style="background-image:url(<?php echo $this->fields->post_img;?>);">
    <?php else: ?>
    <div class="row intro grey lighten-4 wow fadeIn">
    <?php endif; ?>
<?php else: ?>
<div class="row intro grey lighten-4 wow fadeIn">
  <?php endif; ?>
  <div class="overlay"></div>
  <div class="col s12 m12 valign-wrapper" style="height:100%">
    <div class="container valign">
      <div class="row">
        <div id="page-title" class="col m12 s12 center white-text ">
          <?php if($this->is('post')||$this->is('page')): ?>
          <h2 class="valign">
            <?php $this->title();?>
          </h2>
          <?php endif; ?>
          <?php if($this->is('post')): ?>
          <div class="meta"> <span class="author"><a href="<?php $this->author->permalink(); ?>">
            <?php $this->author(); ?>
            </a></span> <span class="meta-div"> / </span><time"><a>
            <?php $this->date('F j, Y'); ?>
            </a>
            </time>
            <span class="meta-div"> / </span>
            <?php $this->category(', '); ?>
            <span class="meta-div"> / </span> <span class="comment"><a href="<?php $this->permalink() ?>#comments">
            <?php $this->commentsNum('No Comment', '%d Comment', '%d Comment'); ?>
            </a></span> </div>
          <?php endif; ?>
          <?php if($this->is('category')||$this->is('tag')||$this->is('search')||$this->is('author')): ?>
          <h3 class="valign archive-title">
            <?php $this->archiveTitle(array(
            'category'  =>  _t('分类 “ %s ” 下的文章'),
            'search'    =>  _t('包含关键字 “ %s ” 的文章'),
            'tag'       =>  _t('标签 “ %s ” 下的文章'),
            'author'    =>  _t('%s  发布的文章')
        ), '', ''); ?>
          </h3>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- end #banner -->

<div id="body" class="row">
<div class="col m12 s12">
<div class="container">
<div class="row">
<?php if($this->options->layoutMode == 4): ?>
<?php $this->need('sidebarleft.php'); ?>
<?php endif; ?>
