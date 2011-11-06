<?php get_header(); ?>
<!-- Contents -->              
<div id="contents">
    <div id="main">
                   
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="post">
                <h2 class="title">
                    <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <div class="blog_info">
                    <ul>
                        <li class="cal"><?php the_time('Y年m月d日') ?></li>
                        <li class="cat"><?php the_category(', ') ?></li>
                        <li class="tag"><?php the_tags('', ', '); ?></li>
                    </ul>
                    <br class="clear" />
                </div>
                             
                <?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?>
                             
                    <?php the_content('続きを読む'); ?>
                </div><!-- /.post -->
                        
            <?php endwhile; ?>
                       
                <div class="nav-below">
                    <span class="nav-previous"><?php next_posts_link('古い記事へ') ?></span>
                    <span class="nav-next"><?php previous_posts_link('新しい記事へ') ?></span>
                </div><!-- /.nav-below -->
                    
            <?php else : ?>
                    
                <h2 class="title">記事が見つかりませんでした。</h2>
                <p>検索で見つかるかもしれません。</p><br />
                <?php get_search_form(); ?>
                    
            <?php endif; ?>
                        
        </div><!-- /#main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
