<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="am-u-md-4 am-u-lg-3 side">

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
    <section class="am-panel am-panel-default side-panel" data-am-scrollspy="{animation: 'fade'}">
        <h3 class="am-panel-hd"><?php _e('分类'); ?></h3>
        <ul class="am-panel-bd"> 
        <?php $this->widget('Widget_Metas_Category_List')->parse('<li><a href="{permalink}">{name}</a> <span class="am-badge am-round">{count}</span></li>'); ?>
        </ul>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <section class="am-panel am-panel-default side-panel" data-am-scrollspy="{animation: 'fade'}">
		<h3 class="am-panel-hd"><?php _e('最新文章'); ?></h3>
        <ul class="am-panel-bd">
            <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
    <section class="am-panel am-panel-default side-panel" data-am-scrollspy="{animation: 'fade'}">
		<h3 class="am-panel-hd"><?php _e('归档'); ?></h3>
        <ul class="am-panel-bd">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
            ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
	</section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
	<section class="am-panel am-panel-default side-panel" data-am-scrollspy="{animation: 'fade'}">
		<h3 class="am-panel-hd"><?php _e('其它'); ?></h3>
        <ul class="am-panel-bd">
            <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
            <li><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a></li>
            <li><a href="http://www.jianghang.name">nodejh</a></li>
        </ul>
	</section>
    <?php endif; ?>

</div><!-- end #sidebar -->
