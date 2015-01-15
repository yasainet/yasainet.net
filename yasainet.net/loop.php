<?php if(have_posts()):while(have_posts()):the_post(); ?>
    <div class="article-header">
      <div class="article-title">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      </div>
        <p class="article-meta"><?php echo get_post_time('F d, Y'); ?></p>
    </div>
<?php endwhile; endif; ?>
