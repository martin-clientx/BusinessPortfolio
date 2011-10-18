<?php global $user; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $scripts ?>
<?php print $styles ?>
<link href="<?php print base_path().path_to_theme();?>/css/main.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if IE 6]><link rel="stylesheet" href="<?php print base_path().path_to_theme();?>/css/ie6.css" type="text/css" ><![endif]-->
<!--[if IE 7]><link rel="stylesheet" href="<?php print base_path().path_to_theme();?>/css/ie7.css" type="text/css" ><![endif]-->
<script src='<?php print base_path().path_to_theme();?>/js/jquery-1.2.6.min.js' type='text/javascript'></script>
<script src="<?php print base_path().path_to_theme();?>/js/jquery-easing.1.2.js" type='text/javascript'></script>
<script src="<?php print base_path().path_to_theme();?>/js/jquery-easing-compatibility.1.2.js" type='text/javascript'></script>
<script src="<?php print base_path().path_to_theme();?>/js/coda-slider.1.1.1.js" type='text/javascript'></script>
<!-- script src="<?php print base_path().path_to_theme();?>/js/init.js" type='text/javascript'></script -->	
	<script type='text/javascript'>
		$(function () {
			$("#blogSlider").codaSlider();
		});
	</script>
<!--[if IE 6]>
 <script src="<?php print base_path().path_to_theme();?>/js/DD_belatedPNG_0.0.7a.js" type="text/javascript"></script>
 <script src="<?php print base_path().path_to_theme();?>/js/png_fix_elements.js" type="text/javascript"></script>
<![endif]-->
</head> 
<body>
<div id="top_content">
    <div class="center" id="top_light1">
    	<h1><a href="<?php print $front_page ?>" title="<?php print $site_name ?>"><?php print $site_name ?></a></h1>
        <form method="post" action="" id="searchform" accept-charset="UTF-8">
			<fieldset class="search">
				<input type="text" class="box" value="Search" name="search_theme_form" id='edit-search_theme_form_keys'/>
				<button class="btn" title="Submit Search" name="op" value="Search">Search</button>
			</fieldset>
			<input type="hidden" name="form_token" id="edit-search-theme-form-form-token" value="<?php print drupal_get_token('search_theme_form')?>"  />
			<input type="hidden" name="form_id" id="edit-search-theme-form" value="search_theme_form"  />
		</form>  
	</div>
</div>
<script language="Javascript">
 $(document).ready(function(){
   $("#edit-search_theme_form_keys").focus( function() { this.value = "" } );
   $("#edit-search_theme_form_keys").blur( function() { if(this.value == "") this.value = "Search" } );
   $("#searchform").submit( function() {
      if($("input", this).val().length > 0 && $("input", this).val() != "Search"){
        return true;
      }else{
        return false;
      }
    });
 });

</script>
<div id="nav_content">
    <div class="center" id="top_light2">
    	<div class="nav">
		<?php if (isset($primary_links)) { ?><?php print phptemplate_primarylinks($primary_links, array('id' => 'nav')) ?><?php } ?>
        </div>
		<?php if ($user->uid > 0) { ?>
			<p class="login"><strong class="gray">[<?php print $user->name;?>]</strong> | <a class="fat" href="<?php print url('user/'.$user->uid);?>">Account</a> | <a class="fat" href="<?php print url('logout');?>">Log out</a></p>
		<?php } //else { ?>
		<!--	<p class="login"><a class="fat" href="<?php// print url('user');?>"><!--Log in-</a></p> -->
		<?php// } ?>
     </div>
</div>

<?php if ($home_header) { print $home_header; } ?>

<div id="main_content">
	<div id="main_content_index">
	    <div class="center1" id="top_light4">
				<?php if ($home_slider_1 or $home_slider_2 or $home_slider_3 or $home_slider_4) { ?>
		        <div id="blogSliderWrap">
		            <div id="blogSlider">
		                <div class="innerWrap">
		                    <div class="panelContainer" >
		                        
		                        <div class="panel" title="Web design">
		                            <div class="wrapper">
										<?php if ($home_slider_1) { print $home_slider_1; } ?>
		                            </div>
		                        </div>
		        
		                        <div class="panel" title="Marketing">
		                            <div class="wrapper">
		                            	<?php if ($home_slider_2) { print $home_slider_2; } ?>
		                            </div>
		                        </div>
		                    
		                        <div class="panel" title="Consulting">
		                            <div class="wrapper">
		                            	<?php if ($home_slider_3) { print $home_slider_3; } ?>
		                            </div>
		                        </div>
		                    
		                        <!--<div class="panel" title="Support">
		                            <div class="wrapper">
		                            	<?//php if ($home_slider_4) { print $home_slider_4; } ?>
		                            </div>
		                        </div>
                            -->
		                    </div>
		                </div>
		            </div>
				</div>
		        <?php } ?>
		<?php if ($show_messages) { ?>
		<div id="testimonials">
			<div id="testimonials_inner">
				<?php print $testimonials ?>
				<?php //<a class="logo" href="#">Awesomeness</a><p class="sig"><span>said</span> <strong>John Doe</strong> <span>of</span></p> ?>
				<a class="all" href="<?php print url('testimonials');?>">SEE WHAT OTHERS ARE SAYING</a>
			</div>
		</div> 
		<?php } ?>
		    
		    </div>
	</div>
</div>



<div id="footer">
    <div class="center" id="top_light5">
        <div class="column">
        	<?php print $footer_1 ?>
        </div>
        <div class="column">
        	<?php print $footer_2 ?>
        </div>
        <div class="column">
        	<?php print $footer_3 ?>
        </div>
        <div class="column_odd">
        	<?php print $footer_4 ?>
        </div>
    </div>
</div>
<div id="footer_nav">
	<div class="center">
	<?php print $footer_message ?><a href="http://www.themesnap.com" class="footer-style">ThemeSnap.com Drupal Themes</a>
	<?php if (isset($primary_links)) { ?><?php print phptemplate_footerlinks($primary_links, array()) ?><?php } ?>
    </div>
</div>
<?php print $footer ?>
<?php print $closure ?>
</body>
</html>
