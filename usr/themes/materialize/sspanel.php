<?php
/**
 * sspanel页面
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<section class="col s12 m12 l12" id="main" role="main">
  <?php $this->content(); ?>
</section>
<?php $this->need('footer.php'); ?>
