<?php
/**
 * Anghunk 是一款基于 Typecho 博客程序的主题，主打写作阅读体验，没有太过多余的色彩，简单而不失细节，已经进入 3.0 版本，作者博客 <a href="https://zburu.com" target="_blank">https://zburu.com</a>
 * @package Anghunk
 * @author 子舒
 * @version 3.0
 * @link https://zburu.com
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<div class="main">
<div class="container">
    <main class="main-content">
       
    
        <section class="post-list">
            <?php while($this->next()): ?>
                <?php if($this->category != "cateslug"): ?>
                    <article>
                        <div class="block-title">
                            <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                            <div class="posttime"><?php $this->date('Y/m/d'); ?></div>
                        </div>
                        <div class="block-content"><?php $this->excerpt(80, '...'); ?></div>
                        <div class="block-time">
                            <em><<a href="<?php $this->author->permalink(); ?>"><?php $this->author() ?></a>></em>  
                            <span class="post-tags"><?php $this->tags('', true, ''); ?></span> / 
                            <span>view: <?php get_post_view($this) ?>  /  <?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></span>
                            
                        </div>
                    </article>
                <?php endif; ?>
            <?php endwhile; ?>
        </section>
       <nav class="blog-nav">
        <?php $this->pageLink('<span>上一页</span>'); ?>
        <?php $this->pageLink('<span>下一页</span>','next'); ?>
       </nav>
    	
    </main>
    <?php $this->need('footer.php'); ?>
</div>
</div>
</body>
</html>
