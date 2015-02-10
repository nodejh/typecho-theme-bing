<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

     <link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon">    
    <!-- amazeui -->
    <link rel="stylesheet" href="http://cdn.amazeui.org/amazeui/2.2.1/css/amazeui.min.css">
    <!-- highlight.js代码高量- sublime text 主题 -->
    <link href="http://cdn.bootcss.com/highlight.js/8.0/styles/monokai_sublime.min.css" rel="stylesheet">     
    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    
    <!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->


<header class="am-topbar am-topbar-inverse navbar">
  <h1 class="am-topbar-brand">
    <a href="<?php $this->options->siteUrl(); ?>" class="am-text-ir"><img class="head-pic" src="http://p.qlogo.cn/gh/313359876/313359876/100" alt="<?php $this->options->title() ?>" /></a>
  </h1>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-primary am-show-sm-only button" data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only"><?php $this->options->title() ?></span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav navtitle">
        <li><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
        <?php while($pages->next()): ?>
        <li><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
        <?php endwhile; ?>
    </ul>


    <form class="am-topbar-form am-topbar-left am-form-inline search-form" action="./" role="search">
        <div class="am-input-group am-input-group-primary search-div">
            <input type="text" class="am-form-field am-input-sm" name="s" placeholder="<?php _e('搜索'); ?>">
            <span class="am-input-group-btn">
                <button class="am-btn am-btn-primary am-btn-sm search-btn" type="submit"><span class="am-icon-search am-icon-sm"></span> </button>
            </span>
        </div>  
    </form>

    <div class="am-topbar-right">
        <?php if($this->user->hasLogin()): ?>
        <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm btn-transparency"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></button></li>
        <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm btn-transparency"><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></button></a>
        <?php else: ?>
        <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm btn-transparency"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></button>
        <?php endif; ?> 
    </div>


</header>
<div class="am-g">
<div class="am-container">
