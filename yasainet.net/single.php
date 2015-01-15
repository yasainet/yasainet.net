<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()):the_post(); ?>
    <div class="article-header">
      <div class="article-title">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      </div>
      <p class="article-meta"><?php echo get_post_time('F d, Y'); ?> category:<?php the_category(', '); ?> tag:<?php the_tags('',', '); ?></p>
      <ul class="social-box">
        <li class="facebook-button">
          <div class="fb-like" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
        </li>
        <li class="hatena-bookmark-button">
          <a href="http://b.hatena.ne.jp/entry/" class="hatena-bookmark-button" data-hatena-bookmark-layout="standard-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
        </li>
        <li class="twitter-button">
          <a href="https://twitter.com/share" class="twitter-share-button" data-via="yasainet">Tweet</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </li>

      </ul>
    </div><!-- /.article-header -->
    <article id="article">
      <div class="ad">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- header300x250 -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:300px;height:250px"
             data-ad-client="ca-pub-5270638169918182"
             data-ad-slot="9048656157"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div>
      <?php remove_filter ('the_content', 'wpautop'); ?>
      <?php the_content(); ?>
        <div class="ad">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- responseve -->
          <ins class="adsbygoogle"
               style="display:block"
               data-ad-client="ca-pub-5270638169918182"
               data-ad-slot="1525389353"
               data-ad-format="auto"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
          </div>
    </article>
    <?php # comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
