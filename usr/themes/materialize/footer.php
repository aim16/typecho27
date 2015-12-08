<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
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
        <div class="row">
          <div class="col m4 s12">
            <h5 class="">TAGS</h5>
            <?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=30')->to($tags); ?>
            <ul class="mdl-mega-footer__link-list">
              <?php while($tags->next()): ?>
              <li class="tags" style="float:left; display:block; margin-right:1em;"><a style="color: rgb(<?php echo(rand(0, 255)); ?>, <?php echo(rand(0,255)); ?>, <?php echo(rand(0, 255)); ?>); font-size:<?php echo(rand(15,15)); ?>px" href="<?php $tags->permalink(); ?>" title='<?php $tags->name(); ?>'>
                <?php $tags->name(); ?>
                </a></li>
              <?php endwhile; ?>
            </ul>
          </div>
          <div class="col m4 s12">
            <h5 class="">友情链接</h5>
            <ul class="widget-list">
       		 <?php Links_Plugin::output(); ?>
      		</ul>
          </div>
          <div class="col m4 s12">
            <h5 class="">Connect</h5>
          </div>
        </div>
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
</div>
<!-- end #footer --> 
<a class="btn-floating btn-large waves-effect waves-light orange" href="#" id="totop"><i class="material-icons">keyboard_arrow_up</i></a>
<?php $this->footer(); ?>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery-2.1.4.min.js');?>"></script> 
<script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.lazyload.js');?>"></script> 
<script>
$("img.lazy").lazyload({
    effect : "fadeIn"
});
</script> 
<script type="text/javascript" src="<?php $this->options->themeUrl('js/materialize.min.js');?>"></script> 
<script type="text/javascript" src="<?php $this->options->themeUrl('js/animsition.min.js');?>"></script> 
<script>
$(document).ready(function() {
  $(".animsition").animsition({
    inClass: 'zoom-in-sm',
    outClass: 'zoom-out-sm',
    inDuration: 800,
    outDuration: 1200,
    linkElement: '.animsition-link',
    // e.g. linkElement: 'a:not([target="_blank"]):not([href^=#])'
    loading: false,
    loadingParentElement: 'body', //animsition wrapper element
    loadingClass: 'animsition-loading',
    loadingInner: '', // e.g '<img src="loading.svg" />'
    timeout: false,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'body',
    transition: function(url){ window.location.href = url; }
  });
});
</script>
<?php if($this->is('post')): ?>
<script></script>
<?php else: ?>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/wow.js');?>"></script> 
<script>
 <!--new WOW().init(); -->
</script>
<?php endif; ?>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/scripts.js');?>"></script>
<?php if($this->options->codeThemeToggle == 1 && ($this->is('post')||$this->is('page'))): ?>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/highlight.pack.js');?>"></script>
<script>hljs.initHighlightingOnLoad();</script>
<?php endif; ?>
</body></html>