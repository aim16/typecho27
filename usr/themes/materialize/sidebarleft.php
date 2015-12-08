<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="col s12 m4 l3" id="secondary" role="complementary" >
  <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
  <aside id="post_recent" class="card widget wow slideInUp">
    <div class="card-image white-text valign-wrapper">
      <h4 class="card-title valign">
        <?php _e('最新文章'); ?>
      </h4>
    </div>
    <div class="card-content">
      <ul class="widget-list">
        <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a class="collection-item truncate" href="{permalink}">{title}</a></li>'); ?>
      </ul>
    </div>
  </aside>
  <?php endif; ?>
  <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
  <aside id="sb-comments" class="card widget wow slideInUp">
    <div class="card-image white-text valign-wrapper">
      <h4 class="card-title valign">
        <?php _e('最近回复'); ?>
      </h4>
    </div>
    <div class="card-content">
      <ul class="widget-list">
        <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
        <?php while($comments->next()): ?>
        <li><a class="collection-item" href="<?php $comments->permalink(); ?>">
          <?php $comments->author(false); ?>: <span class="" style="color:#000000"><?php $comments->excerpt(35, '...'); ?></span>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
    </div>
  </aside>
  <?php endif; ?>
  <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
  <aside id="category_list" class="card widget wow slideInUp">
    <div class="card-image white-text valign-wrapper">
      <h4 class="card-title valign">
        <?php _e('分类'); ?>
      </h4>
    </div>
    <div class="card-content">
      <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
    </div>
  </aside>
  <?php endif; ?>
  <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
  <aside id="post_date" class="card widget wow slideInUp">
    <div class="card-image white-text valign-wrapper">
      <h4 class="card-title valign">
        <?php _e('归档'); ?>
      </h4>
    </div>
    <div class="card-content">
      <ul class="widget-list">
        <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
            ->parse('<li><a class="collection-item" href="{permalink}">{date}</a></li>'); ?>
      </ul>
    </div>
  </aside>
  <?php endif; ?>
  <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
  <aside class="card widget wow slideInUp">
    <div class="card-image white-text valign-wrapper">
      <h4 class="card-title valign">
        <?php _e('其它'); ?>
      </h4>
    </div>
    <div class="card-content">
      <ul class="widget-list">
        <li><a href="<?php $this->options->feedUrl(); ?>">
          <?php _e('文章 RSS'); ?>
          </a></li>
        <li><a href="<?php $this->options->commentsFeedUrl(); ?>">
          <?php _e('评论 RSS'); ?>
          </a></li>
        <?php if ( !empty($this->options->misc) && in_array('ShowLogin', $this->options->misc) ) : ?>
        <?php if($this->user->hasLogin()): ?>
        <li class="last"><a href="<?php $this->options->adminUrl(); ?>">
          <?php _e('进入后台'); ?>
          (
          <?php $this->user->screenName(); ?>
          )</a></li>
        <li><a href="<?php $this->options->logoutUrl(); ?>">
          <?php _e('退出'); ?>
          </a></li>
        <?php else: ?>
        <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>">
          <?php _e('登录'); ?>
          </a></li>
        <?php endif; ?>
        <?php endif; ?>
      </ul>
    </div>
  </aside>
  <?php endif; ?>
</div>
<!-- end #sidebar --> 
