<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="am-u-md-8 am-u-lg-9 article" id="main" role="main">
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
    			<h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
    			<ul class="post-meta"> 
                    <li class="tips" itemprop="author" itemscope itemtype="http://schema.org/Person"><i class="am-icon-user"></i><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"> <?php $this->author(); ?></a></li>
                    <li class="tips"><i class="am-icon-folder-open-o"></i> <?php $this->category(','); ?></li>
                    <li class="tips"><i class="am-icon-calendar"></i><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"> <?php $this->date('M j,y'); ?></time></li>
                    <li class="tips"><i class="am-icon-eye"></i> <?php $this->views(); ?></li>
                    <li class="tips" itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"> <?php $this->commentsNum('<i class="am-icon-edit"></i>', '<i class="am-icon-edit"></i> 1', '<i class="am-icon-edit"></i> %d '); ?></a></li>
                </ul>
                <div class="post-content" itemprop="articleBody">
        			<?php $this->content('- 阅读剩余部分 -'); ?>
                </div>
    		</article>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    </div><!-- end #main -->

	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
