<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;


function themeConfig($form) {

    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, 'http://www.dotedu.me/usr/themes/materialize/img/logo.png', _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $form->addInput($logoUrl);
	
    $bannerUrl = new Typecho_Widget_Helper_Form_Element_Text('bannerUrl', NULL, 'http://www.dotedu.me/usr/themes/materialize/img/transparent.jpg', _t('顶部大图'), _t('在这里填入一个图片URL地址, 以显示网站默认大图'));
    $form->addInput($bannerUrl);
	
    $siteIcon = new Typecho_Widget_Helper_Form_Element_Text('siteIcon', NULL, NULL, _t('标题栏和书签栏Icon'), _t('在这里填入一个图片URL地址, 作为标题栏和书签栏Icon, 默认不显示'));
    $form->addInput($siteIcon);
	
	$colorstyle = array_map('basename', glob(dirname(__FILE__) . '/css/color/*.css'));
	$colorThemeOptions = array_combine($colorstyle, $colorstyle);

	$colorTheme = new Typecho_Widget_Helper_Form_Element_Select('colorTheme', $colorThemeOptions, 'default', _t('主题配色'));	
	$form->addInput($colorTheme);
	
	$layoutMode = new Typecho_Widget_Helper_Form_Element_Radio('layoutMode', array(
		0   =>  _t('GRID'),
		1   =>  _t('单栏'),
		2   =>  _t('双栏-左侧边栏'),
		3   =>  _t('双栏-右侧边栏'),
		4   =>  _t('三栏')
	), 3, _t('页面布局'), _t('选择对应的主题风格'));
	$form->addInput($layoutMode->addRule('enum', _t('必须选择一个模式'), array(0, 1, 2, 3, 4)));


    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowLinks' => _t('友情链接'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowLinks', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
	
    $misc = new Typecho_Widget_Helper_Form_Element_Checkbox('misc', array(
        'ShowLogin' => _t('前台显示登录入口'),
        'ShowLoadTime' => _t('页脚显示加载耗时')
        ),
    array('ShowLogin'), _t('杂项'));
    $form->addInput($misc->multiMode());

	$codeThemeToggle = new Typecho_Widget_Helper_Form_Element_Radio('codeThemeToggle', array(
		0   =>  _t('关闭'),
		1   =>  _t('开启')
	), 0, _t('代码高亮'), _t('开启/关闭代码高亮功能'));
	$form->addInput($codeThemeToggle->addRule('enum', _t('必须选择一个模式'), array(0, 1,)));
	
	
    $miibeian = new Typecho_Widget_Helper_Form_Element_Text('miibeian', NULL, _t('粤ICP备00000000号'), _t('备案号'), _t('在这里填入天朝备案号，不显示则留空'));
    $form->addInput($miibeian);

}
function timer_start() {
    global $timestart;
    $mtime = explode( ' ', microtime() );
    $timestart = $mtime[1] + $mtime[0];
    return true;
}
timer_start();
 
function timer_stop( $display = 0, $precision = 3 ) {
    global $timestart, $timeend;
    $mtime = explode( ' ', microtime() );
    $timeend = $mtime[1] + $mtime[0];
    $timetotal = $timeend - $timestart;
    $r = number_format( $timetotal, $precision );
    if ( $display )
    echo $r;
    return $r;
}







