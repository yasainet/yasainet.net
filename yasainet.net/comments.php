<?php
if ($comments){
foreach ($comments as $comment){
  if($comment->comment_type == "trackback"){
  $responses[trackback][] = $comment;
  }
  elseif($comment->comment_type == "pingback"){
  #$responses[pingback][] = $comment;
  $responses[trackback][] = $comment;
  }
  else{
  $responses[comment][] = $comment;
  }
}
unset($comments);
$comments   = $responses[comment];
$trackbacks = $responses[trackback];
#$pingbacks = $responses[pingback];
}
?>

<div id="comment">
  <h3 id="comments">コメント</h3>
  <?php if ($comments) : ?>
  <ul>
    <?php $i=1; foreach ($comments as $comment) : ?><li><p class="meta"><?php echo $i; ?>.<span class="name"><?php comment_author_link(); ?></span>さん <?php comment_date('Y年m月d日 h:i'); ?></p>
    <p class="text"><?php comment_text(); ?></p></li><?php $i++; endforeach; ?>
  </ul>
  <?php else:?><p class="none">コメントはまだないよ。</p>
  <?php endif;?>
  <div class="form">
    <form method="post" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php">
      <input type="text" name="author" id="author" value="名無しさん" />
      <textarea name="comment" id="comment"></textarea>
      <input name="submit" type="submit" id="send" value="コメントを投稿"/>
      <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" id="cm_send"/>
      <?php do_action('comment_form', $post->ID); ?>
    </form>
  </div>
</div>
