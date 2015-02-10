<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
	
	</div>
</div><!-- end #body -->

<?php
	//bing 图片抓取。获取地址之后，存入 span 标签的 bing-url 属性，供 jquery 使用
	$bing_con = file_get_contents('http://bing.com');
	$bing_reg = '/{url:\'(.*)\',id:\'bg/';
	preg_match($bing_reg, $bing_con, $bing_res);
?>
<span id="bing-url" bing-url="<?php echo $bing_res[1]; ?>"></span> 

<div data-am-widget="gotop" class="am-gotop am-gotop-fixed gotop">
  <a href="#top" title="回到顶部">
    <i class="am-gotop-icon am-icon-chevron-up"></i>
  </a>
</div>

<footer id="footer" role="contentinfo" class="footer">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>  ·『四川大学 .NET 协会』
</footer><!-- end #footer -->



<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="<?php $this->options->themeUrl('polyfill/rem.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('polyfill/respond.min.js'); ?>"></script>
<script src="http://cdn.amazeui.org/amazeui/2.2.1/js/amazeui.legacy.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.js"></script>
<script src="http://cdn.amazeui.org/amazeui/2.2.1/js/amazeui.min.js"></script>
<!--<![endif]-->

<!-- highlight.js 代码高亮 js 文件 -->
<script src="http://cdn.bootcss.com/highlight.js/8.0/highlight.min.js"></script>
<!-- 使用url函数转换相关路径 -->
<script src="<?php $this->options->themeUrl('style.js'); ?>"></script>

<?php $this->footer(); ?>
</body>
</html>
