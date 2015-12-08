<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php
switch ($this->options->layoutMode) {
    case 0:
        echo '<section class="col s12 m12 l12" id="main" role="main">';
        break;
    case 1:
        echo '<section class="col s12 m12 l12" id="main" role="main">';
        break;
    case 2:
        echo '<section class="col s12 m8 l9 right" id="main" role="main">';
        break;
    case 3:
        echo '<section class="col s12 m8 l9" id="main" role="main">';
        break;
    case 4:
        echo '<section class="col s12 m6 l6" id="main" role="main">';
        break;
    default:
        echo '<section class="col s12 m8 l9" id="main" role="main">';
}
?>
  <?php if ($this->have()): ?>
  <?php while($this->next()): ?>
  <article class="post-list card wow fadeInUp hoverable" itemscope itemtype="http://schema.org/BlogPosting">
    <div class="card-image cyan">
    <?php if(isset($this->fields->post_img)): ?>
    <img class="lazy" data-original="<?php echo $this->fields->post_img;?>" style="height:100%"> 
    <?php else: ?>
	<img class="lazy" data-original="usr/themes/materialize/img/bg<?php echo(rand(1, 8)); ?>.jpg"  style="height:100%"> 
    <?php endif; ?><div class="overlay"></div> 
        <span class="card-title " itemprop="name headline">
    <a class="white-text" itemtype="url" href="<?php $this->permalink() ?>">
      <?php $this->title() ?>
      </a></span> <span class="card-title blog-category right"></span>
        </div>
    
    <div class="post-content card-content" itemprop="articleBody">
      <?php $this->content(); ?>
    </div>
    
    
    <div class="card-action">
      <ul class="post-meta">
        <li><i class="material-icons">account_circle</i> <a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author">
          <?php $this->author(); ?>
          </a></li>
        <li><i class="material-icons">access_time</i> <a itemprop="time" href="" rel="time">
          <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">
            <?php $this->date('F j, Y'); ?>
          </time>
          </a></li>
        <li><i class="material-icons">class</i>
          <?php $this->category(','); ?>
        </li>
        <li><i class="material-icons">chat</i> <a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments">
          <?php $this->commentsNum('无评论', '1 条评论', '%d 条评论'); ?>
          </a></li>
        <li class="right"><a href="<?php $this->permalink() ?>" class="right">更多内容 &gt;</a></li>
      </ul>
    </div>
  </article>
  <?php endwhile; ?>
  <?php else: ?>
  <article class="post card wow fadeInUp hoverable">
  <div class="card-content">
    <h2 class="post-title card-title">
      <?php _e('没有找到内容'); ?>
    </h2>
    </div>
  </article>
  <?php endif; ?>
  <div class="wow fadeInUp">

    <?php $this->pageNav('<i class="material-icons">chevron_left</i>', '<i class="material-icons">chevron_right</i>', 3, '...', array('wrapTag' => 'ul', 'wrapClass' => 'pagination center-align', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
    </div>
</section>
<!-- end #main -->

<?php if($this->options->layoutMode != 0 && $this->options->layoutMode != 1): ?>
<?php $this->need('sidebar.php'); ?>
<?php endif; ?>
<?php $this->need('footer.php'); ?>
