<div id="header">
    <div class="center" id="top_light3">
    	<div class="left_column">
            <h2 class="tagline"><?php print $fields['title']->content ?></h2>
            <p class="big"><?php print $fields['field_big_value']->raw ?></p>
            <p><?php print $fields['body']->raw ?></p>
            <!-- a class="getquote" href="#">Get a qoute</a><a class="portfolio" href="#">View portfolio</a -->
        </div>
		<?php print $fields['field_image_fid']->content ?>
        <!-- img class="right_margin_top" src="images/header_images.png" alt="featured work" width="471" height="370" / -->
    </div>
</div>
<?php //print serialize($fields) ?>