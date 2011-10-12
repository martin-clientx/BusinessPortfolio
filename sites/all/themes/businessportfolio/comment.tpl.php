  <div class="comment<?php print ' '. $status; ?>">
  <div id="div-comment-13" class="comment-body"><div class="comment-author vcard">
  <?php if ($picture) {
    print $picture;
  } ?>
<cite class="fn"><?php print $title; ?></cite><span class="new"><?php print $new; ?></span></div>
    <div class="comment-meta commentmetadata"><?php print $submitted; ?></div>
    <p>
     <?php print $content; ?>
     <?php if ($signature): ?>
      <div class="clear-block">
       <div>—</div>
       <?php print $signature ?>
      </div>
     <?php endif; ?>
    </p>
    <div class="reply"><?php print $links; ?></div>
  </div>
  </div>