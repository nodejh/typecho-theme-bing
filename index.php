<?php
/**
 * 背景图片为bing首页的图片，每日更新
 * 
 * @package bing
 * @author nodejh
 * @version 0.1
 * @link http://jianghang.name
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="am-u-sm-12 logo" data-am-scrollspy="{animation: 'fade'}">
    <a href="<?php $this->options->siteUrl(); ?>">
        <h1 class="logo-title"><?php $this->options->title() ?></h1>
    </a>
    <p class="description"><?php $this->options->description() ?></p> 
</div>

<div class="am-u-md-8 am-u-lg-9 article">
  <?php while($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting" data-am-scrollspy="{animation: 'fade'}">
      <h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
      <ul class="post-meta">
        <li class="tips" itemprop="author" itemscope itemtype="http://schema.org/Person"><i class="am-icon-user"></i><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"> <?php $this->author(); ?></a></li>
        <li class="tips"><i class="am-icon-folder-open-o"></i> <?php $this->category(','); ?></li>
        <li class="tips"><i class="am-icon-calendar"></i><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"> <?php $this->date('M j,y'); ?></time></li>
        <li class="tips"><i class="am-icon-eye"></i> <?php $this->views(); ?></li>
        <li class="tips" itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"> <?php $this->commentsNum('<i class="am-icon-edit"></i>', '<i class="am-icon-edit"></i> 1', '<i class="am-icon-edit"></i> %d '); ?></a></li>
      </ul>
            <div class="post-content" itemprop="articleBody">
          <?php $this->excerpt(240, '...'); ?>
            </div>
        </article>
  <?php endwhile; ?>  

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
