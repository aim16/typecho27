<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div id="comments" class="card wow fadeIn hoverable">
  <?php $this->comments()->to($comments); ?>
  <?php if ($comments->have()): ?>
  <div class="card-content">
    <h4 class="post-title card-title cyan-text text-lighten-2">
      <?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?>
    </h4>
  <div class="row">
    <div class="col s12 m12 l12">
      <?php $comments->listComments(); ?>
    </div>
    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
   <?php else: ?>
  <div class="card-content">
    <h4 class="post-title card-title cyan-text text-lighten-2">
      <?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?>
    </h4>
  <div class="row">
 
   <?php endif; ?>
    <?php if($this->allow('comment')): ?>
    <div class="col s12 m12 l12">
      <div id="<?php $this->respondId(); ?>" class="respond row">
        <div class="cancel-comment-reply">
          <?php $comments->cancelReply(); ?>
        </div>
        <h5 id="response">
          <?php _e('新的评论(●´∀｀●)'); ?>
        </h5>
        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
          <?php if($this->user->hasLogin()): ?>
          <p>
            <?php _e('登录身份: '); ?>
            <a href="<?php $this->options->profileUrl(); ?>">
            <?php $this->user->screenName(); ?>
            </a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout">
            <?php _e('退出'); ?>
            &raquo;</a></p>
          <?php else: ?>
          <div class="input-field col s12 m4 l4">
            <input type="text" name="author" id="author" class="text validate" value="<?php $this->remember('author'); ?>" required />
            <label for="author" class="required ">
              <?php _e('昵称 (´・ω・`)'); ?>
            </label>
          </div>
          <div class="input-field col s12 m4 l4">
            <input type="email" name="mail" id="mail" class="text validate" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
            <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>>
              <?php _e('邮箱 ╮(๑•́ ₃•̀๑)╭  '); ?>
            </label>
          </div>
          <div class="input-field col s12 m4 l4">
            <input type="url" name="url" id="url" class="text" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
            <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>>
              <?php _e('网址 ヾ(*´▽‘*)ﾉ '); ?>
            </label>
          </div>
          <?php endif; ?>
          <div class="input-field col s12 m12 l12">
            <textarea rows="8" cols="50" name="text" id="textarea" class="materialize-textarea" required ><?php $this->remember('text'); ?>
</textarea>
            <label for="textarea" class="required">
              <?php _e('评论内容'); ?>
            </label>
          </div>
          <div class="col s12 m12 l12" style="text-align: right;">
            <button type="submit" class="submit waves-effect waves-light btn cyan">
            <?php _e('提交评论'); ?><i class="material-icons left">send</i>
            </button>
          </div>
        </form>
      </div>
    </div>
    <?php else: ?>
    <div class="col s12 m12 l12">
      <h5>
        <?php _e('评论已关闭'); ?>
      </h5>
    </div>
    <?php endif; ?>
  </div>
  </div>
</div>
