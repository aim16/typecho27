					<li class="line">
<div class="tmicon fa-search"></div>
<div class="box">
<form class="form" id="search">
    <input type="text" name="s" id="s" required="true" placeholder="搜索....">
</form>
</div>
					</li>
					<li class="line">
<div class="tmicon fa-heart"></div>
<div class="box">
<blockquote>
    &copy;
    <?php echo date( 'Y'); ?>
        <a href="<?php $this->options->siteUrl(); ?>">
            <?php $this->options->title(); ?>
        </a>
        Powered by
        <a href="http://www.typecho.org" target="_blank">
            Typecho
        </a>
        Azure
        <a href="https://www.dreamspark.com/Product/Product.aspx?productid=99" target="_blank">
        for dreamspark
        </a>
</blockquote>
</div>
					</li>
</ul>
			</div>
</div>
<?php $this->footer(); ?>
</body>
</html>