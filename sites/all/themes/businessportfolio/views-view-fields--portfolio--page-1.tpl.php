<?php 
if ($fields['field_featured_value']->content) {
	print '<div class="portofolio"><div class="featured2"></div><div class="portofolio_main"><div class="div_image">'.$fields['field_image_fid_1']->content.'</div><h3>'.$fields['title']->content.'</h3><div class="publish"> '.$fields['name']->content.'  '.$fields['created']->content.'</div><p>'.$fields['body']->content.'</p></div></div>';
} else {
	print '<div class="blog_thumb">'.$fields['field_image_fid']->content.'<h2>'.$fields['title']->content.'</h2><p>'.$fields['body']->content.'</p></div>'; 
}
?>