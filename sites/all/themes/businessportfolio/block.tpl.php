<?php if ($block->region == 'left_menu') { ?>
<div id="center_left_top" class="center_left_top">
<h3><?php print $block->subject; ?></h3>
<?php print str_replace(array('class="menu"','active-trail','active'), array('id="left_nav"','arrow','selected'), str_replace('</a><ul class="menu"', '</a><ul class="menuhide"', $block->content)); ?>
</div>
<?php } elseif ($block->region == 'left') { ?>
<div class="subscribe"><?php print $block->subject; ?></div>
<p><?php print $block->content; ?></p>
<?php } elseif ($block->region == 'footer_1' or $block->region == 'footer_2' or $block->region == 'footer_3') { ?>
<h5><?php print $block->subject; ?></h5>
<div class="hr"></div>
<?php print $block->content; ?>
<?php } elseif ($block->region == 'footer_4') { ?>
<h5><?php print $block->subject; ?></h5>
<div class="hr"></div>
 <div id="tweeter">
<?php print $block->content; ?>
</div>
<?php } elseif ($block->region == 'testimonials' or $block->region == 'home_header' or $block->region == 'home_slider_1' or $block->region == 'home_slider_2' or $block->region == 'home_slider_3' or $block->region == 'home_slider_4') { ?>
<?php print $block->content; ?>
<?php } else { ?>
  <div class="block block-<?php print $block->module; ?>" id="block-<?php print $block->module; ?>-<?php print $block->delta; ?>">
    <h2 class="title"><?php print $block->subject; ?></h2>
    <div class="content"><?php print $block->content; ?></div>
 </div>
<?php } ?>