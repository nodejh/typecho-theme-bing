<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="am-u-sm-12" id="main" role="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <ul class="post-meta">
            <li class="tips" itemprop="author" itemscope itemtype="http://schema.org/Person"><i class="am-icon-user"></i><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"> <?php $this->author(); ?></a></li>
            <li class="tips"><i class="am-icon-folder-open-o"></i> <?php $this->category(','); ?></li>
            <li class="tips"><i class="am-icon-calendar"></i><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"> <?php $this->date('M j,y'); ?></time></li>
            <li class="tips"><i class="am-icon-eye"></i> <?php $this->views(); ?></li>
            <li class="tips" itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"> <?php $this->commentsNum('<i class="am-icon-edit"></i>', '<i class="am-icon-edit"></i> 1', '<i class="am-icon-edit"></i> %d '); ?></a></li>
        </ul>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
        <p itemprop="keywords" class="tags"><i class="am-icon-tags"></i> <?php $this->tags(', ', true, 'none'); ?></p>
    </article>

    <?php $this->need('comments.php'); ?>

    <ul class="post-near">
        <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
        <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    </ul>
</div><!-- end #main-->


<?php $this->need('footer.php'); ?>
