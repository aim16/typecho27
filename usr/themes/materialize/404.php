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
  <div class="error-page card wow fadeInUp hoverable">
    <div class="card-content">
      <h2 class="post-title card-title cyan-text text-lighten-2">404 -
        <?php _e('页面没找到'); ?>
      </h2>

    <div class="page-content " itemprop="articleBody">
      <div style="padding:10px 0;">
        <?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: '); ?>
      </div>
      <form method="post">
        <div class="input-field">
          <input id="search" type="text" name="s" class="text" />
          <label for="search" class="required">
            <?php _e('搜索 ╮(๑•́ ₃•̀๑)╭  '); ?>
          </label>
        </div>
        <div style="text-align: right;">
          <button type="submit" class="submit waves-effect waves-light btn">
          <?php _e('搜索'); ?>
          </button>
        </div>
      </form>
    </div>    </div>
  </div>
</section>
<!-- end #content-->
<?php if($this->options->layoutMode != 0 && $this->options->layoutMode != 1): ?>
<?php $this->need('sidebar.php'); ?>
<?php endif; ?>
<?php $this->need('footer.php'); ?>
