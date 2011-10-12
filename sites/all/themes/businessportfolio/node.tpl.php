  <div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
    <?php if ($picture) {
      print $picture;
    }?>
    <?php if ($page == 0) { ?><h2 class="blog"><a href="<?php print $node_url?>"><?php print $title?></a></h2><?php }; ?>
    <div class="publish"><?php print $submitted?> <?php if ($terms) print 'Tags: '.$terms; ?></div>
    <div class="blog_p"><?php print $content?></div>
    <?php if ($links) { ?><div class="links">&raquo; <?php print $links?></div><?php }; ?>
  </div>
  <div class="blog_line"></div>
