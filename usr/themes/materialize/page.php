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
    <article class="page card wow fadeInUp hoverable" itemscope itemtype="http://schema.org/BlogPosting">
        <div class="card-content">
        <h4 class="paeg-title card-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h4>
        <div class="page-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div></div>
    </article>
    <?php $this->need('comments.php'); ?>
</section><!-- end #main-->

<?php if($this->options->layoutMode != 0 && $this->options->layoutMode != 1): ?>
<?php $this->need('sidebar.php'); ?>
<?php endif; ?>
<?php $this->need('footer.php'); ?>
