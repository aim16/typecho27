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
  <article class="post card wow fadeIn hoverable" itemscope itemtype="http://schema.org/BlogPosting">
    <div class="card-content">
      <h4 class="post-title card-title" itemprop="name headline"><a class="cyan-text text-lighten-2" itemtype="url" href="<?php $this->permalink() ?>">
        <?php $this->title() ?>
        </a></h4>
    <ul class="post-meta" style="display:none;">
      <li itemprop="author" itemscope itemtype="http://schema.org/Person">
        <?php _e('作者: '); ?>
        <a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author">
        <?php $this->author(); ?>
        </a></li>
      <li>
        <?php _e('时间: '); ?>
        <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">
          <?php $this->date('F j, Y'); ?>
        </time>
      </li>
      <li>
        <?php _e('分类: '); ?>
        <?php $this->category(','); ?>
      </li>
    </ul>
    <div class="post-content" itemprop="articleBody">
      <?php $this->content(); ?>
    </div>    </div>

                <div class="card-action">

    <span itemprop="keywords" class="tags">
      <?php _e('标签: '); ?>
      <?php $this->tags(' ', true, 'none'); ?>
    </span>
      <ul class="post-near">
    <li>
      <?php $this->thePrev('%s','<span>没有了</span>'); ?>
    </li>
    <li>
      <?php $this->theNext('%s','<span>没有了</span>'); ?>
    </li>
  </ul></div>
  </article>

  <?php $this->need('comments.php'); ?>
</section>
<!-- end #main-->

<?php if($this->options->layoutMode != 0 && $this->options->layoutMode != 1): ?>
<?php $this->need('sidebar.php'); ?>
<?php endif; ?>
<?php $this->need('footer.php'); ?>
