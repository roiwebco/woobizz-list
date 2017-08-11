<?php
// WOOBIZZ LIST PLUGIN (options.php)
/* 	File Paths
================================================= */
$imgurl = get_stylesheet_directory_uri().'/admin/images/';
//Access the WordPress Pages via an Array
$pages = array();
$pages_obj = get_pages('sort_column=post_parent,menu_order');  
foreach ( $pages_obj as $key ) { 
$pages[$key->ID] = ucwords($key->post_title); 
}
//Access the WordPress Pages via an Array
$tags = array();
$tags_obj = get_tags('orderby=name&hide_empty=false&get=all');
foreach ( $tags_obj as $key ) { 
$tags[$key->term_id ] = ucwords($key->name);
}
//Access the WordPress Categories via an Array
$categories = array();  
$categories_obj = get_categories('hide_empty=0');
foreach ( $categories_obj as $key ) {
$categories[$key->cat_ID] = ucwords($key->cat_name);
}
//---------------------------------------------------------------------------- 
//START GENERAL OPTIONS
//----------------------------------------------------------------------------
$options = array();							
//---------------------------------------------------------------------------- 
//START PRODUCT LIST SECTION
//----------------------------------------------------------------------------
$options[] = array( "name" => __('1- Product List ','woobizz-list'),
				"type" => "section");
$options[] = array( "name" => "", 
				"type" => "html",
				 "std" => "<h1>1 Product List</h1>");				
$options[] = array("type" => "divider");
$options[] = array( "name" => __('1.1 Product List Custom Design','woobizz-list'),
				"type" => "title",
				"class" => "",
				"desc" => __("", "woobizz-list"));
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.1.1 PRODUCT LIST BACKGROUND", 
		"type" => "html",
		 "std" => "");
$options[] = array("type" => "divider");			 
//Bakground Image 
$options[] = array( "name" => __("Background Image","woobizz-list"),
		"desc" => __("Note: Image will always override color", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_backgroundimage",
		"class" => "medium first",
		"std" => null,
		"type" => "upload");
//Background Color 
$options[] = array( "name" => __("Background Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_backgroundcolor",
		"class" => "medium last",
		"std" => '#2c2d33',
		"type" => "color");	
//Background Size
$options[] = array( "name" => __("Background Size","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_backgroundsize",
		"class" => "short first",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Contain",
			1 => "Cover",
			2 => "Inherit",
			3 => "Initial",
			));
$options[] = array( "name" => __("Background Position","woobizz-list"), 
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_backgroundposition",
		"class" => "short",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Left Top",
			1 => "Left Center",
			2 => "Left Bottom",
			3 => "Right Top",
			4 => "Right Center",
			5 => "Right Bottom",
			6 => "Center Top",
			7 => "Center Center",
			8 => "Center Bottom",
			9 => "Inherit",
			10=> "Initial",
		));	
//Background repeat 
$options[] = array( "name" => __("Background Repeat","woobizz-list"),
		"desc" => __("X = Horizontal Y= Vertical", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_backgroundrepeat",
		"class" => "short last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "No-Repeat",
			1 => "Repeat X & Y",
			2 => "Repeat X Only",
			3 => "Repeat Y Only",
			4 => "Repeat Round",
			5 => "Repeat Space",
			4 => "Inherit",
			5 => "Initial",
		));	
$options[] = array("type" => "divider");			
$options[] = array( "name" => "1.1.2 PRODUCT LIST GRADIENTS", 
		"type" => "html",
		 "std" => "");	
$options[] = array("type" => "divider");				 
$options[] = array( "name" => __("Gradient Color 1","woobizz-list"), 
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_backgroundgradient1",
		"class" => "medium first",
		"std" => '#2c2d33',
		"type" => "color");
//Gradient1 Opacity
$options[] = array( "name" => __("Gradient Opacity 1","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_backgroundgradient1opacity",
		"class" => "medium last",
		"std" => 0,
		"min" => 0,
		"max" => 1,
		"suffix" => "",
		"increment" => 0.01,
		"type" => "number");
$options[] = array( "name" => __("Gradient Color 2","woobizz-list"), 
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_backgroundgradient2",
		"class" => "medium first",
		"std" => '#2c2d33',
		"type" => "color");
//Gradient 2 Opacity
$options[] = array( "name" => __("Gradient Opacity 2","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_backgroundgradient2opacity",
		"class" => "medium last",
		"std" => 0,
		"min" => 0,
		"max" => 1,
		"suffix" => "",
		"increment" => 0.01,
		"type" => "number");	
//2.3 Page Box Shadow 
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.1.3 PRODUCT LIST SHADOWS",
		"type" => "html",
		"std" => "");
$options[] = array("type" => "divider");
$options[] = array( "name" => __("Apply Shadow?","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_shadowapply",
		"class" => "short first",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));
$options[] = array( "name" => __("Shadow Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_shadowcolor",
		"class" => "short",
		"std" => '#2c2d33',
		"type" => "color");
$options[] = array( "name" => __("Shadow Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_shadowrightdistance",
		"class" => "short last",
		"std" => 0,
		"min" => -200,
		"max" => 200,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Shadow Bottom","woobizz-list"),
			"desc" => __("", "woobizz-list"),
			"id" => WOOBIZZLIST."_woobizz_productlist_shadowbottomdistance",
			"class" => "short first",
			"std" => 0,
			"min" => -200,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");
$options[] = array( "name" => __("Shadow Spread","woobizz-list"),
			"desc" => __("", "woobizz-list"),
			"id" => WOOBIZZLIST."_woobizz_productlist_shadowspread",
			"class" => "short",
			"std" => 0,
			"min" => 0,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");
$options[] = array( "name" => __("Shadow Size","woobizz-list"),
			"desc" => __("", "woobizz-list"),
			"id" => WOOBIZZLIST."_woobizz_productlist_shadowsize",
			"class" => "short last",
			"std" => 0,
			"min" => 0,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.1.4 PRODUCT LIST BORDER",
		"type" => "html",
		"std" => "");
$options[] = array("type" => "divider");							
$options[] = array( "name" => __("Border Size","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_bordersize",
		"class" => "tiny first",
		"std" => 0,
		"min" => 0,
		"max" => 50,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Border Style","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_borderstyle",
		"class" => "tiny ",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "dotted",
			1 => "dashed",
			2 => "solid",
			3 => "none",
			));			
$options[] = array( "name" => __("Border Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_bordercolor",
		"class" => "tiny",
		"std" => '#2c2d33',
		"type" => "color");	
$options[] = array( "name" => __("Border Radius","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_borderradius",
		"class" => "tiny last",
		"std" => 0,
		"min" => 0,
		"max" => 50,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");				
// 1.2 MARGINGS 
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.1.5 PRODUCT LIST GRID",
		"type" => "html",
		 "std" => "Top & Bottom only left and right will be apply on the responsive option");
$options[] = array("type" => "divider");
$options[] = array( "name" => __("Margin Top","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_margintopsize",
		"class" => "tiny first",
		"std" => 42,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Top","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_marginunittop",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Margin Bottom","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_marginbottomsize",
		"class" => "tiny",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Bottom","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_marginunitbottom",
		"class" => "tiny last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));

// 1.2 PADDINGS 
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.1.6 PRODUCT LIST PADDINGS",
		"type" => "html",
		 "std" => "");
$options[] = array("type" => "divider");
$options[] = array( "name" => __("Padding Top","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_paddingtopsize",
		"class" => "tiny first",
		"std" => 42,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Top","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_paddingunittop",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_paddingrightsize",
		"class" => "tiny",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_paddingunitright",
		"class" => "tiny last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Bottom","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_paddingbottomsize",
		"class" => "tiny first",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Bottom","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_paddingunitbottom",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_paddingleftsize",
		"class" => "tiny",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_paddingunitleft",
		"class" => "tiny last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array("type" => "divider");
//---------------------------------------------------------------------------- 
//END PRODUCT LIST OPTIONS
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START SHOW/HIDE PRODUCT OPTIONS
//----------------------------------------------------------------------------
$options[] = array( "name" => __('1.2 Product List Content Options','woobizz-list'),
				"type" => "title",
				"class" => "",
				"desc" => __("", "woobizz-list"));
$options[] = array("type" => "divider");
//---------------------------------------------------------------------------- 
//START PRODUCT LIST IMAGE
//----------------------------------------------------------------------------
$options[] = array( "name" => "1.2.1 PRODUCT LIST IMAGE", 
		"type" => "html",
		 "std" => "");				
$options[] = array("type" => "divider");
$options[] = array( "name" => __("Hide Image?","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_thumbsbghide",
		"class" => "short first",
		"std" => 0,
		"type" => "radio",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));	
$options[] = array( "name" => __("Expand Image?","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_thumbsbgexpand",
		"class" => "short",
		"std" => 0,
		"type" => "radio",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));	
$options[] = array( "name" => __("Image Border Radius","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_thumbsbgborderradius",
		"class" => "short last",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 1,
		"type" => "number");				
$options[] = array( "name" => __("Image Border Size","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_thumbsbgbordersize",
		"class" => "short first",
		"std" => 0,
		"min" => 0,
		"max" => 50,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Image Border Style","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_thumbsbgborderstyle",
		"class" => "short ",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "dotted",
			1 => "dashed",
			2 => "solid",
			3 => "none",
			));			
$options[] = array( "name" => __("Image Border Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_thumbsbgbordercolor",
		"class" => "short last",
		"std" => '#2c2d33',
		"type" => "color");	
$options[] = array( "name" => __("Apply Image Shadow?","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_thumbsbgshadowapply",
		"class" => "short first",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));
$options[] = array( "name" => __("Image Shadow Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_thumbsbgshadowcolor",
		"class" => "short",
		"std" => '#2c2d33',
		"type" => "color");
$options[] = array( "name" => __("Image Shadow Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_thumbsbgshadowrightdistance",
		"class" => "short last",
		"std" => 0,
		"min" => -200,
		"max" => 200,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Image Shadow Bottom","woobizz-list"),
			"desc" => __("", "woobizz-list"),
			"id" => WOOBIZZLIST."_woobizz_productlist_thumbsbgshadowbottomdistance",
			"class" => "short first",
			"std" => 0,
			"min" => -200,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");
$options[] = array( "name" => __("Image Shadow Spread","woobizz-list"),
			"desc" => __("", "woobizz-list"),
			"id" => WOOBIZZLIST."_woobizz_productlist_thumbsbgshadowspread",
			"class" => "short",
			"std" => 0,
			"min" => 0,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");
$options[] = array( "name" => __("Image Shadow Size","woobizz-list"),
			"desc" => __("", "woobizz-list"),
			"id" => WOOBIZZLIST."_woobizz_productlist_thumbsbgshadowsize",
			"class" => "short last",
			"std" => 0,
			"min" => 0,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");	
			

//Background Padding
	$options[] = array( "name" => __("Image Padding","woobizz-list"),
		"desc" => __("Padding is required if background image is used", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_thumbsbgpadding",
		"class" => "medium first",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 1,
		"type" => "number");			
//Bakground Image 
$options[] = array( "name" => __("Background Image","woobizz-list"),
		"desc" => __("Note: Image will always override color", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_thumbsbgimage",
		"class" => "medium last",
		"std" => null,
		"type" => "upload");
//Background Color 
$options[] = array( "name" => __("Background Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_thumbsbgcolor",
		"class" => "medium first",
		"std" => '#2c2d33',
		"type" => "color");	
//Background Size
$options[] = array( "name" => __("Background Size","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_thumbsbgsize",
		"class" => "medium last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Contain",
			1 => "Cover",
			2 => "Inherit",
			3 => "Initial",
			));
$options[] = array( "name" => __("Background Position","woobizz-list"), 
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_thumbsbgposition",
		"class" => "medium first",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Left Top",
			1 => "Left Center",
			2 => "Left Bottom",
			3 => "Right Top",
			4 => "Right Center",
			5 => "Right Bottom",
			6 => "Center Top",
			7 => "Center Center",
			8 => "Center Bottom",
			9 => "Inherit",
			10=> "Initial",
		));	
//Background repeat 
$options[] = array( "name" => __("Background Repeat","woobizz-list"),
		"desc" => __("X = Horizontal Y= Vertical", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_thumbsbgrepeat",
		"class" => "medium last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "No-Repeat",
			1 => "Repeat X & Y",
			2 => "Repeat X Only",
			3 => "Repeat Y Only",
			4 => "Repeat Round",
			5 => "Repeat Space",
			4 => "Inherit",
			5 => "Initial",
		));			
$options[] = array( "name" => __("Gradient Color 1","woobizz-list"), 
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_thumbsbggradient1",
		"class" => "medium first",
		"std" => '#2c2d33',
		"type" => "color");
//Gradient1 Opacity
$options[] = array( "name" => __("Gradient Opacity 1","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_thumbsbggradient1opacity",
		"class" => "medium last",
		"std" => 0,
		"min" => 0,
		"max" => 1,
		"suffix" => "",
		"increment" => 0.01,
		"type" => "number");
$options[] = array( "name" => __("Gradient Color 2","woobizz-list"), 
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_thumbsbggradient2",
		"class" => "medium first",
		"std" => '#2c2d33',
		"type" => "color");
//Gradient 2 Opacity
$options[] = array( "name" => __("Gradient Opacity 2","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_thumbsbggradient2opacity",
		"class" => "medium last",
		"std" => 0,
		"min" => 0,
		"max" => 1,
		"suffix" => "",
		"increment" => 0.01,
		"type" => "number");	
		
$options[] = array("type" => "divider");			
//---------------------------------------------------------------------------- 
//END PRODUCT LIST IMAGE
//----------------------------------------------------------------------------		
//---------------------------------------------------------------------------- 
//START PRODUCT LIST TITLE
//----------------------------------------------------------------------------
$options[] = array( "name" => "1.2.2 PRODUCT LIST TITLE", 
		"type" => "html",
		 "std" => "");
$options[] = array("type" => "divider");
//Hide Title
$options[] = array( "name" => __("Hide Title?","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_titlehide",
		"class" => "tiny first",
		"std" => 0,
		"type" => "radio",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));	
//Title Size			
$options[] = array( "name" => __("Title Size","woobizz-list"), 
				"desc" => __("", "woobizz-list"),
				"id" => WOOBIZZLIST."_woobizz_productlist_titlesize",
				"class" => "tiny",
				"std" => 18,
				"min" => 0,
				"max" => 100,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
//Title Color
$options[] = array( "name" => __("Title Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_titlecolor",
		"class" => "tiny",
		"std" => '#2c2d33',
		"type" => "color");	
//Title Weight		
$options[] = array( "name" => __("Title Weight","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_titleweight",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "100",
			1 => "200",
			2 => "300",
			3 => "400",
			4 => "500",
			5 => "600",
			6 => "700",			
			));
//Title paddings
$options[] = array( "name" => __("Padding Top","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_titlepaddingtopsize",
		"class" => "tiny first",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Top","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_titlepaddingunittop",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_titlepaddingrightsize",
		"class" => "tiny",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_titlepaddingunitright",
		"class" => "tiny last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Bottom","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_titlepaddingbottomsize",
		"class" => "tiny first",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Bottom","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_titlepaddingunitbottom",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_titlepaddingleftsize",
		"class" => "tiny",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_titlepaddingunitleft",
		"class" => "tiny last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));			
//---------------------------------------------------------------------------- 
//END PRODUCT LIST TITLE
//----------------------------------------------------------------------------	
//---------------------------------------------------------------------------- 
//START PRODUCT LIST DESCRIPTION
//----------------------------------------------------------------------------		
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.2.3 PRODUCT LIST DESCRIPTION", 
		"type" => "html",
		 "std" => "");
//Hide Description
$options[] = array( "name" => __("Hide Description?","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_descriptionhide",
		"class" => "short first",
		"std" => 0,
		"type" => "radio",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));	
//Description Size			
$options[] = array( "name" => __("Description Size","woobizz-list"), 
				"desc" => __("", "woobizz-list"),
				"id" => WOOBIZZLIST."_woobizz_productlist_descriptionsize",
				"class" => "short",
				"std" => 18,
				"min" => 0,
				"max" => 100,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
//Description Color
$options[] = array( "name" => __("Description Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_descriptioncolor",
		"class" => "short last",
		"std" => '#2c2d33',
		"type" => "color");	
//Description Weight		
$options[] = array( "name" => __("Description Weight","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_descriptionweight",
		"class" => "short first",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "100",
			1 => "200",
			2 => "300",
			3 => "400",
			4 => "500",
			5 => "600",
			6 => "700",
			));
//Description Limit
$options[] = array( "name" => __("Description Limit","woobizz-list"), 
				"desc" => __("", "woobizz-list"),
				"id" => WOOBIZZLIST."_woobizz_productlist_descriptionlimit",
				"class" => "short last",
				"std" => 18,
				"min" => 0,
				"max" => 20,
				"suffix" => "words",
				"increment" => 1,
				"type" => "number");				
// Description Paddings
$options[] = array( "name" => __("Padding Top","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_descriptionpaddingtopsize",
		"class" => "tiny first",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Top","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_descriptionpaddingunittop",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_descriptionpaddingrightsize",
		"class" => "tiny",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_descriptionpaddingunitright",
		"class" => "tiny last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Bottom","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_descriptionpaddingbottomsize",
		"class" => "tiny first",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Bottom","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_descriptionpaddingunitbottom",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_descriptionpaddingleftsize",
		"class" => "tiny",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_descriptionpaddingunitleft",
		"class" => "tiny last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));		
//---------------------------------------------------------------------------- 
//END PRODUCT LIS DESCRIPTION
//----------------------------------------------------------------------------			
//---------------------------------------------------------------------------- 
//START PRODUCT LIST RATING
//----------------------------------------------------------------------------	
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.2.4 PRODUCT LIST RATING", 
		"type" => "html",
		 "std" => "");
$options[] = array("type" => "divider");
//Hide Ratings?			
$options[] = array( "name" => __("Hide Ratings?","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_hiderating",
		"class" => "tiny first",
		"std" => 0,
		"type" => "radio",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));
//Rating Size			
$options[] = array( "name" => __("Rating Size","woobizz-list"), 
				"desc" => __("", "woobizz-list"),
				"id" => WOOBIZZLIST."_woobizz_productlist_ratingsize",
				"class" => "tiny",
				"std" => 13,
				"min" => 0,
				"max" => 100,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
//Rating Positive Color				
$options[] = array( "name" => __("Rate Positive Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_ratingpcolor",
		"class" => "tiny",
		"std" => '#2c2d33',
		"type" => "color");	
//Rating Negative Color		
$options[] = array( "name" => __("Rate Negative Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_ratingncolor",
		"class" => "tiny",
		"std" => '#2c2d33',
		"type" => "color");			
//---------------------------------------------------------------------------- 
//END PRODUCT LIST RATING
//----------------------------------------------------------------------------	
//---------------------------------------------------------------------------- 
//START ON SALE
//----------------------------------------------------------------------------		
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.2.5 PRODUCT LIST ONSALE", 
		"type" => "html",
		 "std" => "");
$options[] = array("type" => "divider");
$options[] = array( "name" => __("Hide Onsale?","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_onsalehide",
		"class" => "tiny first",
		"std" => 0,
		"type" => "radio",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));	
$options[] = array( "name" => "Custom Text", 
				"desc" => "",
				"id" => WOOBIZZLIST."_woobizz_productlist_onsaletext",
				"class" => "tiny",
				"std" => null,
				"type" => "text");				
$options[] = array( "name" => __("Text Color","woobizz-list"),
				"desc" => __("", "woobizz-list"),
				"id" => WOOBIZZLIST."_woobizz_productlist_onsaletextcolor",
				"class" => "tiny",
				"std" => '#2c2d33',
				"type" => "color");		
$options[] = array( "name" => __("Background Color","woobizz-list"),
				"desc" => __("", "woobizz-list"),
				"id" => WOOBIZZLIST."_woobizz_productlist_onsalebackgroundcolor",
				"class" => "tiny last",
				"std" => '#2c2d33',
				"type" => "color");					
$options[] = array( "name" => __("Border Size","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_onsalebordersize",
		"class" => "tiny first",
		"std" => 0,
		"min" => 0,
		"max" => 50,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Border Style","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_onsaleborderstyle",
		"class" => "tiny ",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "dotted",
			1 => "dashed",
			2 => "solid",
			3 => "none",
			));			
$options[] = array( "name" => __("Border Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_onsalebordercolor",
		"class" => "tiny",
		"std" => '#2c2d33',
		"type" => "color");	
$options[] = array( "name" => __("Border Radius","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_onsaleborderradius",
		"class" => "tiny last",
		"std" => 0,
		"min" => 0,
		"max" => 50,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Apply Onsale Shadow?","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_onsaleshadowapply",
		"class" => "short first",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));
$options[] = array( "name" => __("Onsale Shadow Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_onsaleshadowcolor",
		"class" => "short",
		"std" => '#2c2d33',
		"type" => "color");
$options[] = array( "name" => __("Onsale Shadow Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_onsaleshadowrightdistance",
		"class" => "short last",
		"std" => 0,
		"min" => -200,
		"max" => 200,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Image Shadow Bottom","woobizz-list"),
			"desc" => __("", "woobizz-list"),
			"id" => WOOBIZZLIST."_woobizz_productlist_onsaleshadowbottomdistance",
			"class" => "short first",
			"std" => 0,
			"min" => -200,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");
$options[] = array( "name" => __("Image Shadow Spread","woobizz-list"),
			"desc" => __("", "woobizz-list"),
			"id" => WOOBIZZLIST."_woobizz_productlist_onsaleshadowspread",
			"class" => "short",
			"std" => 0,
			"min" => 0,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");
$options[] = array( "name" => __("Image Shadow Size","woobizz-list"),
			"desc" => __("", "woobizz-list"),
			"id" => WOOBIZZLIST."_woobizz_productlist_onsaleshadowsize",
			"class" => "short last",
			"std" => 0,
			"min" => 0,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");	
$options[] = array("type" => "divider");		
//---------------------------------------------------------------------------- 
//END ON SALE
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START PRODUCT LIST PRICE
//----------------------------------------------------------------------------	
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.2.6 PRODUCT LIST PRICE", 
		"type" => "html",
		 "std" => "");
$options[] = array("type" => "divider");				
//Hide regular price?
$options[] = array( "name" => __("Hide regular price?","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_regularpricehide",
		"class" => "tiny first",
		"std" => 0,
		"type" => "radio",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));	
//Regular price size			
$options[] = array( "name" => __("Title Size","woobizz-list"), 
				"desc" => __("", "woobizz-list"),
				"id" => WOOBIZZLIST."_woobizz_productlist_regularpricesize",
				"class" => "tiny",
				"std" => 18,
				"min" => 0,
				"max" => 100,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
//Regular price color
$options[] = array( "name" => __("Title Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_regularpricecolor",
		"class" => "tiny",
		"std" => '#2c2d33',
		"type" => "color");	
//Regular title weight	
$options[] = array( "name" => __("Title Weight","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_regularpriceweight",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "100",
			1 => "200",
			2 => "300",
			3 => "400",
			4 => "500",
			5 => "600",
			6 => "700",
			
			));		
$options[] = array("type" => "divider");	
//Sale price title
$options[] = array( "name" => __("Hide sale price?","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_salepricehide",
		"class" => "tiny first",
		"std" => 0,
		"type" => "radio",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));	
//Sale price size		
$options[] = array( "name" => __("Title Size","woobizz-list"), 
				"desc" => __("", "woobizz-list"),
				"id" => WOOBIZZLIST."_woobizz_productlist_salepricesize",
				"class" => "tiny",
				"std" => 18,
				"min" => 0,
				"max" => 100,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
//Sale price color
$options[] = array( "name" => __("Title Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_salepricecolor",
		"class" => "tiny",
		"std" => '#2c2d33',
		"type" => "color");	
//Sale price weight		
$options[] = array( "name" => __("Title Weight","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_salepriceweight",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "100",
			1 => "200",
			2 => "300",
			3 => "400",
			4 => "500",
			5 => "600",
			6 => "700",
			
			));
//---------------------------------------------------------------------------- 
//END PRODUCT LIST PRICE
//----------------------------------------------------------------------------			
//---------------------------------------------------------------------------- 
//END SHOW/HIDE PRODUCT OPTIONS
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START 1.3 HOOKS
//----------------------------------------------------------------------------
$options[] = array("type" => "divider");
$options[] = array( "name" => __('1.3 Product List Buttons','woobizz-list'),
				"type" => "title",
				"class" => "",
				"desc" => __("", "woobizz-list"));
$options[] = array("type" => "divider");
$options[] = array( "name" => __('1.3.1.- READ MORE BUTTON','woobizz-list'), 
						"type" => "html",
						"class" => "medium first",
						"desc" => __("", "woobizz-list"));
$options[] = array("type" => "divider");						
$options[] = array( "name" => __("Hide Read More?","woobizz-list"), 
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_readmorehide",
		"class" => "tiny first",
		"std" => 0,
		"type" => "radio",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));								
$options[] = array( "name" => "Custom Text", 
				"desc" => "",
				"id" => WOOBIZZLIST."_woobizz_productlist_readmoretext",
				"class" => "tiny",
				"std" => null,
				"type" => "text");
$options[] = array( "name" => __("Text Color","woobizz-list"),
				"desc" => __("", "woobizz-list"),
				"id" => WOOBIZZLIST."_woobizz_productlist_readmoretextcolor",
				"class" => "tiny",
				"std" => '#2c2d33',
				"type" => "color");		
$options[] = array( "name" => __("Background Color","woobizz-list"),
				"desc" => __("", "woobizz-list"),
				"id" => WOOBIZZLIST."_woobizz_productlist_readmorebackgroundcolor",
				"class" => "tiny last",
				"std" => '#2c2d33',
				"type" => "color");					
$options[] = array("type" => "divider");		
//---------------------------------------------------------------------------- 
//START PRODUCT ADD TO CART
//----------------------------------------------------------------------------
$options[] = array( "name" => __('1.3.2.- ADD TO CAR BUTTON','woobizz-list'), 
						"type" => "html",
						"class" => "medium first",
						"desc" => __("", "woobizz-list"));
$options[] = array("type" => "divider");						
$options[] = array( "name" => __("Hide Add to Cart?","woobizz-list"), 
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_addtocarthide",
		"class" => "tiny first",
		"std" => 0,
		"type" => "radio",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));								
$options[] = array( "name" => "Custom Text", 
				"desc" => "",
				"id" => WOOBIZZLIST."_woobizz_productlist_addtocarttext",
				"class" => "tiny",
				"std" => null,
				"type" => "text");
$options[] = array( "name" => __("Text Color","woobizz-list"),
				"desc" => __("", "woobizz-list"),
				"id" => WOOBIZZLIST."_woobizz_productlist_addtocarttextcolor",
				"class" => "tiny",
				"std" => '#2c2d33',
				"type" => "color");	
$options[] = array( "name" => __("Background Color","woobizz-list"),
				"desc" => __("", "woobizz-list"),
				"id" => WOOBIZZLIST."_woobizz_productlist_addtocartbackgroundcolor",
				"class" => "tiny last",
				"std" => '#2c2d33',
				"type" => "color");				
$options[] = array("type" => "divider");		
//---------------------------------------------------------------------------- 
//END PRODUCT ADD TO CART
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START PRODUCT SEE OPTIONS
//----------------------------------------------------------------------------
$options[] = array( "name" => __('1.3.3.- SEE OPTIONS BUTTON','woobizz-list'), 
						"type" => "html",
						"class" => "medium first",
						"desc" => __("", "woobizz-list"));
$options[] = array("type" => "divider");						
$options[] = array( "name" => __("Hide See Options?","woobizz-list"), 
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_seeoptionshide",
		"class" => "tiny first",
		"std" => 0,
		"type" => "radio",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));								
$options[] = array( "name" => "Custom Text", 
				"desc" => "",
				"id" => WOOBIZZLIST."_woobizz_productlist_seeoptionstext",
				"class" => "tiny",
				"std" => null,
				"type" => "text");
$options[] = array( "name" => __("Text Color","woobizz-list"),
				"desc" => __("", "woobizz-list"),
				"id" => WOOBIZZLIST."_woobizz_productlist_seeoptionstextcolor",
				"class" => "tiny",
				"std" => '#2c2d33',
				"type" => "color");	
$options[] = array( "name" => __("Background Color","woobizz-list"),
				"desc" => __("", "woobizz-list"),
				"id" => WOOBIZZLIST."_woobizz_productlist_seeoptionsbackgroundcolor",
				"class" => "tiny last",
				"std" => '#2c2d33',
				"type" => "color");				
$options[] = array("type" => "divider");		
//---------------------------------------------------------------------------- 
//END PRODUCT SEE OPTIONS
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START PRODUCT SEE CART
//----------------------------------------------------------------------------
$options[] = array( "name" => __('1.3.3.- SEE CART BUTTON','woobizz-list'), 
						"type" => "html",
						"class" => "medium first",
						"desc" => __("", "woobizz-list"));
$options[] = array("type" => "divider");						
$options[] = array( "name" => __("Hide See Options?","woobizz-list"), 
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_seecarthide",
		"class" => "tiny first",
		"std" => 0,
		"type" => "radio",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));								
$options[] = array( "name" => "Custom Text", 
				"desc" => "",
				"id" => WOOBIZZLIST."_woobizz_productlist_seecarttext",
				"class" => "tiny",
				"std" => null,
				"type" => "text");
$options[] = array( "name" => __("Text Color","woobizz-list"),
				"desc" => __("", "woobizz-list"),
				"id" => WOOBIZZLIST."_woobizz_productlist_seecarttextcolor",
				"class" => "tiny",
				"std" => '#2c2d33',
				"type" => "color");	
$options[] = array( "name" => __("Background Color","woobizz-list"),
				"desc" => __("", "woobizz-list"),
				"id" => WOOBIZZLIST."_woobizz_productlist_seecartbackgroundcolor",
				"class" => "tiny last",
				"std" => '#2c2d33',
				"type" => "color");				
$options[] = array("type" => "divider");		
//---------------------------------------------------------------------------- 
//END PRODUCT SEE CART
//----------------------------------------------------------------------------						
//START PRODUCT BUTTON OPTIONS
//---------------------------------------------------------------------------- 
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.3.3 BUTTONS SHADOWS",
		"type" => "html",
		"std" => "");
$options[] = array("type" => "divider");
$options[] = array( "name" => __("Apply Shadow?","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonshadowapply",
		"class" => "short first",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));
$options[] = array( "name" => __("Shadow Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonshadowcolor",
		"class" => "short",
		"std" => '#2c2d33',
		"type" => "color");
$options[] = array( "name" => __("Shadow Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonshadowrightdistance",
		"class" => "short last",
		"std" => 0,
		"min" => -200,
		"max" => 200,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Shadow Bottom","woobizz-list"),
			"desc" => __("", "woobizz-list"),
			"id" => WOOBIZZLIST."_woobizz_productlist_buttonshadowbottomdistance",
			"class" => "short first",
			"std" => 0,
			"min" => -200,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");
$options[] = array( "name" => __("Shadow Spread","woobizz-list"),
			"desc" => __("", "woobizz-list"),
			"id" => WOOBIZZLIST."_woobizz_productlist_buttonshadowspread",
			"class" => "short",
			"std" => 0,
			"min" => 0,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");
$options[] = array( "name" => __("Shadow Size","woobizz-list"),
			"desc" => __("", "woobizz-list"),
			"id" => WOOBIZZLIST."_woobizz_productlist_buttonshadowsize",
			"class" => "short last",
			"std" => 0,
			"min" => 0,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.3.4 BUTTONS BORDER",
		"type" => "html",
		"std" => "");
$options[] = array("type" => "divider");							
$options[] = array( "name" => __("Border Size","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonbordersize",
		"class" => "tiny first",
		"std" => 0,
		"min" => 0,
		"max" => 50,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Border Style","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonborderstyle",
		"class" => "tiny ",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "dotted",
			1 => "dashed",
			2 => "solid",
			3 => "none",
			));			
$options[] = array( "name" => __("Border Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonbordercolor",
		"class" => "tiny",
		"std" => '#2c2d33',
		"type" => "color");	
$options[] = array( "name" => __("Border Radius","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonborderradius",
		"class" => "tiny last",
		"std" => 0,
		"min" => 0,
		"max" => 50,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");				
// 1.2 MARGINGS 
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.3.5 BUTTONS MARGINS",
		"type" => "html",
		 "std" => "Top & Bottom only left and right will be apply on the responsive option");
$options[] = array("type" => "divider");
$options[] = array( "name" => __("Margin Top","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonmargintopsize",
		"class" => "tiny first",
		"std" => 42,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Top","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonmarginunittop",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Margin Bottom","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonmarginbottomsize",
		"class" => "tiny",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Bottom","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonmarginunitbottom",
		"class" => "tiny last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
			$options[] = array( "name" => __("Margin Left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonmarginleftsize",
		"class" => "tiny first",
		"std" => 42,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonmarginunitleft",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",
			4 => "auto",));
$options[] = array( "name" => __("Margin Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonmarginrightsize",
		"class" => "tiny",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonmarginunitright",
		"class" => "tiny last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",
			4 => "auto",));
// 1.2 PADDINGS 
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.3.6 BUTTONS PADDINGS",
		"type" => "html",
		 "std" => "");
$options[] = array("type" => "divider");
$options[] = array( "name" => __("Padding Top","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonpaddingtopsize",
		"class" => "tiny first",
		"std" => 42,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Top","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonpaddingunittop",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonpaddingrightsize",
		"class" => "tiny",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonpaddingunitright",
		"class" => "tiny last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Bottom","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonpaddingbottomsize",
		"class" => "tiny first",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Bottom","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonpaddingunitbottom",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonpaddingleftsize",
		"class" => "tiny",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonpaddingunitleft",
		"class" => "tiny last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => "WordPress Editor Field",
				"desc" => "Sed haec quis possit intrepidus aestimare tellus",
				"id" => WOOBIZZLIST."_editor",
				"type" => "editor");
$options[] = array("type" => "divider");
//---------------------------------------------------------------------------- 
//END PRODUCT BUTTON OPTIONS
//----------------------------------------------------------------------------
//-----------------------------------------------------------------------------
//START PRODUCT BUTTON WIDTH
//-----------------------------------------------------------------------------
$options[] = array( "name" => "1.3.7 BUTTONS WIDTH",
		"type" => "html",
		 "std" => "");
$options[] = array("type" => "divider");
$options[] = array( "name" => __("Button Width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonwidthsize",
		"class" => "medium first",
		"std" => 42,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Width Unit","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonwidthunits",
		"class" => "medium last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",
			4 => "auto",
			));
//Min-width
$options[] = array( "name" => __("Button Min-Width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonminwidthsize",
		"class" => "medium first",
		"std" => 42,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Min-Width Unit","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonminwidthunits",
		"class" => "medium last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",
			4 => "initial",
			5 => "inherit",
			));
//Max-width
$options[] = array( "name" => __("Button Max-Width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonmaxwidthsize",
		"class" => "medium first",
		"std" => 42,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Max-Width Unit","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_buttonmaxwidthunits",
		"class" => "medium last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",
			4 => "initial",
			5 => "inherit",
			6 => "none",
			));		

//----------------------------------------------------------------------------- 
//END PRODUCT BUTTON WIDTH
//----------------------------------------------------------------------------
//----------------------------------------------------------------------------- 
//START PRODUCT RESPONSIVE NO SIDEBAR
//----------------------------------------------------------------------------
$options[] = array("type" => "divider");
$options[] = array( "name" => __('1.4 Product List Grid Fullwidth','woobizz-list'),
				"type" => "title",
				"class" => "",
				"desc" => __("", "woobizz-list"));
$options[] = array("type" => "divider");
$options[] = array( "name" => __('1.4.1.- RESPONSIVE OPTIONS','woobizz-list'), 
						"type" => "html",
						"class" => "full",
						"desc" => __("", "woobizz-list"));
$options[] = array("type" => "divider");	
//Responsive 1					
$options[] = array( "name" => __("Min-width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns1_minwidth",
		"class" => "tiny first",
		"std" => 0,
		"min" => 0,
		"max" => 1920,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Thumb.width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns1_width",
		"class" => "tiny ",
		"std" => 97.9,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns1_marginleft",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns1_marginright",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
//Responsive2
$options[] = array( "name" => __("Min-width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns2_minwidth",
		"class" => "tiny first",
		"std" => 469,
		"min" => 0,
		"max" => 1920,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Thumb.width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns2_width",
		"class" => "tiny ",
		"std" => 46.9,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns2_marginleft",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns2_marginright",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");
//Responsive3
$options[] = array( "name" => __("Min-width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns3_minwidth",
		"class" => "tiny first",
		"std" => 682,
		"min" => 0,
		"max" => 1920,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Thumb.width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns3_width",
		"class" => "tiny ",
		"std" => 30.7,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns3_marginleft",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns3_marginright",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");
//Responsive4
$options[] = array( "name" => __("Min-width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns4_minwidth",
		"class" => "tiny first",
		"std" => 1024,
		"min" => 0,
		"max" => 1920,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Thumb.width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns4_width",
		"class" => "tiny ",
		"std" => 19.6,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns4_marginleft",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns4_marginright",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");
//Responsive5
$options[] = array( "name" => __("Min-width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns5_minwidth",
		"class" => "tiny first",
		"std" => 1366,
		"min" => 0,
		"max" => 1920,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Thumb.width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns5_width",
		"class" => "tiny ",
		"std" => 17.9,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns5_marginleft",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns5_marginright",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");
//Responsive6
$options[] = array( "name" => __("Min-width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns6_minwidth",
		"class" => "tiny first",
		"std" => 1620,
		"min" => 0,
		"max" => 1920,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Thumb.width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns6_width",
		"class" => "tiny ",
		"std" => 14.5,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns6_marginleft",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rns6_marginright",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");
//---------------------------------------------------------------------------- 
//END RESPONSIVE NO SIDEBAR
//----------------------------------------------------------------------------
//----------------------------------------------------------------------------- 
//START PRODUCT RESPONSIVE WITH SIDEBAR
//----------------------------------------------------------------------------
$options[] = array("type" => "divider");
$options[] = array( "name" => __('1.5 Product List Grid Sidebar','woobizz-list'),
				"type" => "title",
				"class" => "",
				"desc" => __("", "woobizz-list"));
$options[] = array("type" => "divider");
$options[] = array( "name" => __('1.5.1.- RESPONSIVE OPTIONS','woobizz-list'), 
						"type" => "html",
						"class" => "full",
						"desc" => __("", "woobizz-list"));
$options[] = array("type" => "divider");	
//Responsive 1					
$options[] = array( "name" => __("Min-width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws1_minwidth",
		"class" => "tiny first",
		"std" => 0,
		"min" => 0,
		"max" => 1920,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Thumb.width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws1_width",
		"class" => "tiny ",
		"std" => 97.9,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws1_marginleft",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws1_marginright",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
//Responsive2
$options[] = array( "name" => __("Min-width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws2_minwidth",
		"class" => "tiny first",
		"std" => 469,
		"min" => 0,
		"max" => 1920,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Thumb.width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws2_width",
		"class" => "tiny ",
		"std" => 46.9,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws2_marginleft",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws2_marginright",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");
//Responsive3
$options[] = array( "name" => __("Min-width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws3_minwidth",
		"class" => "tiny first",
		"std" => 682,
		"min" => 0,
		"max" => 1920,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Thumb.width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws3_width",
		"class" => "tiny ",
		"std" => 30.7,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws3_marginleft",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws3_marginright",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");
//Responsive4
$options[] = array( "name" => __("Min-width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws4_minwidth",
		"class" => "tiny first",
		"std" => 1024,
		"min" => 0,
		"max" => 1920,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Thumb.width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws4_width",
		"class" => "tiny ",
		"std" => 19.6,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws4_marginleft",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws4_marginright",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");
//Responsive5
$options[] = array( "name" => __("Min-width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws5_minwidth",
		"class" => "tiny first",
		"std" => 1366,
		"min" => 0,
		"max" => 1920,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Thumb.width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws5_width",
		"class" => "tiny ",
		"std" => 17.9,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws5_marginleft",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws5_marginright",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");
//Responsive6
$options[] = array( "name" => __("Min-width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws6_minwidth",
		"class" => "tiny first",
		"std" => 1620,
		"min" => 0,
		"max" => 1920,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Thumb.width","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws6_width",
		"class" => "tiny ",
		"std" => 14.5,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws6_marginleft",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");	
$options[] = array( "name" => __("Margin right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_rws6_marginright",
		"class" => "tiny ",
		"std" => 1,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 0.1,
		"type" => "number");
//---------------------------------------------------------------------------- 
//END RESPONSIVE WITH SIDEBAR
//----------------------------------------------------------------------------	
//---------------------------------------------------------------------------- 
//START PRODUCTS PER PAGE
//----------------------------------------------------------------------------
$options[] = array("type" => "divider");	
$options[] = array( "name" => __('1.6 Responsive Products Per Page'),
				"type" => "title",
				"class" => "",
				"desc" => __("", "woobizz-list"));
$options[] = array("type" => "divider");
$options[] = array( "name" => __("Total products with sidebar","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_totalproductsidebar",
		"class" => "medium first",
		"std" => 0,
		"min" => 0,
		"max" => 50,
		"suffix" => " products",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Total products fullwidth","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_productlist_totalproductnosidebar",
		"class" => "medium last",
		"std" => 0,
		"min" => 0,
		"max" => 50,
		"suffix" => " products",
		"increment" => 1,
		"type" => "number");
//---------------------------------------------------------------------------- 
//END PRODUCTS PER PAGE
//----------------------------------------------------------------------------	
		
//---------------------------------------------------------------------------- 
//START CATEGORY LIST SECTION
//----------------------------------------------------------------------------
$options[] = array( "name" => __('2- Category List ','woobizz-list'),
				"type" => "section");
$options[] = array( "name" => "", 
				"type" => "html",
				 "std" => "<h1 style='text-decoration:underline;color:#00a0d2;'>1- Category List</h1>");				
$options[] = array("type" => "divider");
$options[] = array( "name" => __('1.1 Category List Background Options','woobizz-list'),
				"type" => "title",
				"class" => "",
				"desc" => __("", "woobizz-list"));
$options[] = array("type" => "divider");

$options[] = array( "name" => "1.1.1 CATEGORY LIST BACKGROUND", 
		"type" => "html",
		 "std" => "");
$options[] = array("type" => "divider");			 
//Bakground Image 
$options[] = array( "name" => __("Background Image","woobizz-list"),
		"desc" => __("Note: Image will always override color", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_backgroundimage",
		"class" => "medium first",
		"std" => null,
		"type" => "upload");
//Background Color 
$options[] = array( "name" => __("Background Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_backgroundcolor",
		"class" => "medium last",
		"std" => '#2c2d33',
		"type" => "color");	
//Background Size
$options[] = array( "name" => __("Background Size","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_backgroundsize",
		"class" => "short first",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Contain",
			1 => "Cover",
			2 => "Inherit",
			3 => "Initial",
			));
$options[] = array( "name" => __("Background Position","woobizz-list"), 
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_backgroundposition",
		"class" => "short",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Left Top",
			1 => "Left Center",
			2 => "Left Bottom",
			3 => "Right Top",
			4 => "Right Center",
			5 => "Right Bottom",
			6 => "Center Top",
			7 => "Center Center",
			8 => "Center Bottom",
			9 => "Inherit",
			10=> "Initial",
		));	
//Background repeat 
$options[] = array( "name" => __("Background Repeat","woobizz-list"),
		"desc" => __("X = Horizontal Y= Vertical", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_backgroundrepeat",
		"class" => "short last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "No-Repeat",
			1 => "Repeat X & Y",
			2 => "Repeat X Only",
			3 => "Repeat Y Only",
			4 => "Repeat Round",
			5 => "Repeat Space",
			4 => "Inherit",
			5 => "Initial",
		));	
$options[] = array("type" => "divider");			
$options[] = array( "name" => "1.1.2 CATEGORY LIST GRADIENTS", 
		"type" => "html",
		 "std" => "");	
$options[] = array("type" => "divider");				 
$options[] = array( "name" => __("Gradient Color 1","woobizz-list"), 
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_backgroundgradient1",
		"class" => "medium first",
		"std" => '#2c2d33',
		"type" => "color");
//Gradient1 Opacity
$options[] = array( "name" => __("Gradient Opacity 1","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_backgroundgradient1opacity",
		"class" => "medium last",
		"std" => 0,
		"min" => 0,
		"max" => 1,
		"suffix" => "",
		"increment" => 0.01,
		"type" => "number");
$options[] = array( "name" => __("Gradient Color 2","woobizz-list"), 
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_backgroundgradient2",
		"class" => "medium first",
		"std" => '#2c2d33',
		"type" => "color");
//Gradient 2 Opacity
$options[] = array( "name" => __("Gradient Opacity 2","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_backgroundgradient2opacity",
		"class" => "medium last",
		"std" => 0,
		"min" => 0,
		"max" => 1,
		"suffix" => "",
		"increment" => 0.01,
		"type" => "number");	
//2.3 Page Box Shadow 
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.1.3 CATEGORY LIST SHADOWS",
		"type" => "html",
		"std" => "");
$options[] = array("type" => "divider");
$options[] = array( "name" => __("Apply Shadow?","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_shadowapply",
		"class" => "short first",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));
$options[] = array( "name" => __("Shadow Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_shadowcolor",
		"class" => "short",
		"std" => '#2c2d33',
		"type" => "color");
$options[] = array( "name" => __("Shadow Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_shadowrightdistance",
		"class" => "short last",
		"std" => 0,
		"min" => -200,
		"max" => 200,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Shadow Bottom","woobizz-list"),
			"desc" => __("", "woobizz-list"),
			"id" => WOOBIZZLIST."_woobizz_categorylist_shadowbottomdistance",
			"class" => "short first",
			"std" => 0,
			"min" => -200,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");
$options[] = array( "name" => __("Shadow Spread","woobizz-list"),
			"desc" => __("", "woobizz-list"),
			"id" => WOOBIZZLIST."_woobizz_categorylist_shadowspread",
			"class" => "short",
			"std" => 0,
			"min" => 0,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");
$options[] = array( "name" => __("Shadow Size","woobizz-list"),
			"desc" => __("", "woobizz-list"),
			"id" => WOOBIZZLIST."_woobizz_categorylist_shadowsize",
			"class" => "short last",
			"std" => 0,
			"min" => 0,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.1.4 CATEGORY LIST BORDER",
		"type" => "html",
		"std" => "");
$options[] = array("type" => "divider");							
$options[] = array( "name" => __("Border Size","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_bordersize",
		"class" => "tiny first",
		"std" => 0,
		"min" => 0,
		"max" => 50,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Border Style","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_borderstyle",
		"class" => "tiny ",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "dotted",
			1 => "dashed",
			2 => "solid",
			3 => "none",
			));			
$options[] = array( "name" => __("Border Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_bordercolor",
		"class" => "tiny",
		"std" => '#2c2d33',
		"type" => "color");	
$options[] = array( "name" => __("Border Radius","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_borderradius",
		"class" => "tiny last",
		"std" => 0,
		"min" => 0,
		"max" => 50,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");				
// 1.2 MARGINGS 
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.1.5 CATEGORY LIST MARGINS",
		"type" => "html",
		 "std" => "Top & Bottom only left and right will be apply on the responsive option");
$options[] = array("type" => "divider");
$options[] = array( "name" => __("Margin Top","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_margintopsize",
		"class" => "tiny first",
		"std" => 42,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Top","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_marginunittop",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Margin Bottom","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_marginbottomsize",
		"class" => "tiny",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Bottom","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_marginunitbottom",
		"class" => "tiny last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
// 1.2 PADDINGS 
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.1.6 CATEGORY LIST PADDINGS",
		"type" => "html",
		 "std" => "");
$options[] = array("type" => "divider");
$options[] = array( "name" => __("Padding Top","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_paddingtopsize",
		"class" => "tiny first",
		"std" => 42,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Top","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_paddingunittop",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_paddingrightsize",
		"class" => "tiny",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_paddingunitright",
		"class" => "tiny last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Bottom","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_paddingbottomsize",
		"class" => "tiny first",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Bottom","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_paddingunitbottom",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_paddingleftsize",
		"class" => "tiny",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_paddingunitleft",
		"class" => "tiny last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array("type" => "divider");
//---------------------------------------------------------------------------- 
//START SHOW/HIDE CATEGORY OPTIONS
//----------------------------------------------------------------------------
$options[] = array( "name" => __('1.2 Category List Content Options','woobizz-list'),
				"type" => "title",
				"class" => "",
				"desc" => __("", "woobizz-list"));
$options[] = array("type" => "divider");
//---------------------------------------------------------------------------- 
//START CATEGORY LIST IMAGE
//----------------------------------------------------------------------------
$options[] = array( "name" => "1.2.1 CATEGORY LIST IMAGE", 
		"type" => "html",
		 "std" => "");				
$options[] = array("type" => "divider");
$options[] = array( "name" => __("Hide Image?","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_thumbsbghide",
		"class" => "short first",
		"std" => 0,
		"type" => "radio",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));	
$options[] = array( "name" => __("Expand Image?","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_thumbsbgexpand",
		"class" => "short",
		"std" => 0,
		"type" => "radio",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));	
$options[] = array( "name" => __("Image Border Radius","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_thumbsbgborderradius",
		"class" => "short last",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 1,
		"type" => "number");				
$options[] = array( "name" => __("Image Border Size","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_thumbsbgbordersize",
		"class" => "short first",
		"std" => 0,
		"min" => 0,
		"max" => 50,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Image Border Style","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_thumbsbgborderstyle",
		"class" => "short ",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "dotted",
			1 => "dashed",
			2 => "solid",
			3 => "none",
			));			
$options[] = array( "name" => __("Image Border Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_thumbsbgbordercolor",
		"class" => "short last",
		"std" => '#2c2d33',
		"type" => "color");	
$options[] = array( "name" => __("Apply Image Shadow?","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_thumbsbgshadowapply",
		"class" => "short first",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));
$options[] = array( "name" => __("Image Shadow Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_thumbsbgshadowcolor",
		"class" => "short",
		"std" => '#2c2d33',
		"type" => "color");
$options[] = array( "name" => __("Image Shadow Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_thumbsbgshadowrightdistance",
		"class" => "short last",
		"std" => 0,
		"min" => -200,
		"max" => 200,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Image Shadow Bottom","woobizz-list"),
			"desc" => __("", "woobizz-list"),
			"id" => WOOBIZZLIST."_woobizz_categorylist_thumbsbgshadowbottomdistance",
			"class" => "short first",
			"std" => 0,
			"min" => -200,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");
$options[] = array( "name" => __("Image Shadow Spread","woobizz-list"),
			"desc" => __("", "woobizz-list"),
			"id" => WOOBIZZLIST."_woobizz_categorylist_thumbsbgshadowspread",
			"class" => "short",
			"std" => 0,
			"min" => 0,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");
$options[] = array( "name" => __("Image Shadow Size","woobizz-list"),
			"desc" => __("", "woobizz-list"),
			"id" => WOOBIZZLIST."_woobizz_categorylist_thumbsbgshadowsize",
			"class" => "short last",
			"std" => 0,
			"min" => 0,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");	
			

//Background Padding
	$options[] = array( "name" => __("Image Padding","woobizz-list"),
		"desc" => __("Padding is required if background image is used", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_thumbsbgpadding",
		"class" => "medium first",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "%",
		"increment" => 1,
		"type" => "number");			
//Bakground Image 
$options[] = array( "name" => __("Background Image","woobizz-list"),
		"desc" => __("Note: Image will always override color", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_thumbsbgimage",
		"class" => "medium last",
		"std" => null,
		"type" => "upload");
//Background Color 
$options[] = array( "name" => __("Background Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_thumbsbgcolor",
		"class" => "medium first",
		"std" => '#2c2d33',
		"type" => "color");	
//Background Size
$options[] = array( "name" => __("Background Size","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_thumbsbgsize",
		"class" => "medium last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Contain",
			1 => "Cover",
			2 => "Inherit",
			3 => "Initial",
			));
$options[] = array( "name" => __("Background Position","woobizz-list"), 
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_thumbsbgposition",
		"class" => "medium first",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Left Top",
			1 => "Left Center",
			2 => "Left Bottom",
			3 => "Right Top",
			4 => "Right Center",
			5 => "Right Bottom",
			6 => "Center Top",
			7 => "Center Center",
			8 => "Center Bottom",
			9 => "Inherit",
			10=> "Initial",
		));	
//Background repeat 
$options[] = array( "name" => __("Background Repeat","woobizz-list"),
		"desc" => __("X = Horizontal Y= Vertical", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_thumbsbgrepeat",
		"class" => "medium last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "No-Repeat",
			1 => "Repeat X & Y",
			2 => "Repeat X Only",
			3 => "Repeat Y Only",
			4 => "Repeat Round",
			5 => "Repeat Space",
			4 => "Inherit",
			5 => "Initial",
		));			
$options[] = array( "name" => __("Gradient Color 1","woobizz-list"), 
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_thumbsbggradient1",
		"class" => "medium first",
		"std" => '#2c2d33',
		"type" => "color");
//Gradient1 Opacity
$options[] = array( "name" => __("Gradient Opacity 1","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_thumbsbggradient1opacity",
		"class" => "medium last",
		"std" => 0,
		"min" => 0,
		"max" => 1,
		"suffix" => "",
		"increment" => 0.01,
		"type" => "number");
$options[] = array( "name" => __("Gradient Color 2","woobizz-list"), 
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_thumbsbggradient2",
		"class" => "medium first",
		"std" => '#2c2d33',
		"type" => "color");
//Gradient 2 Opacity
$options[] = array( "name" => __("Gradient Opacity 2","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_thumbsbggradient2opacity",
		"class" => "medium last",
		"std" => 0,
		"min" => 0,
		"max" => 1,
		"suffix" => "",
		"increment" => 0.01,
		"type" => "number");	
		
$options[] = array("type" => "divider");			
//---------------------------------------------------------------------------- 
//END CATEGORY LIST IMAGE
//----------------------------------------------------------------------------		
//---------------------------------------------------------------------------- 
//START CATEGORY LIST TITLE
//----------------------------------------------------------------------------
$options[] = array( "name" => "1.2.2 CATEGORY LIST TITLE", 
		"type" => "html",
		 "std" => "");
$options[] = array("type" => "divider");
//Hide Title
$options[] = array( "name" => __("Hide Title?","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_titlehide",
		"class" => "tiny first",
		"std" => 0,
		"type" => "radio",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));	
//Title Size			
$options[] = array( "name" => __("Title Size","woobizz-list"), 
				"desc" => __("", "woobizz-list"),
				"id" => WOOBIZZLIST."_woobizz_categorylist_titlesize",
				"class" => "tiny",
				"std" => 18,
				"min" => 0,
				"max" => 100,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
//Title Color
$options[] = array( "name" => __("Title Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_titlecolor",
		"class" => "tiny",
		"std" => '#2c2d33',
		"type" => "color");	
//Title Weight		
$options[] = array( "name" => __("Title Weight","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_titleweight",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "100",
			1 => "200",
			2 => "300",
			3 => "400",
			4 => "500",
			5 => "600",
			6 => "700",
			
			));
//Title paddings
$options[] = array( "name" => __("Padding Top","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_titlepaddingtopsize",
		"class" => "tiny first",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Top","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_titlepaddingunittop",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_titlepaddingrightsize",
		"class" => "tiny",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_titlepaddingunitright",
		"class" => "tiny last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Bottom","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_titlepaddingbottomsize",
		"class" => "tiny first",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Bottom","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_titlepaddingunitbottom",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_titlepaddingleftsize",
		"class" => "tiny",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_titlepaddingunitleft",
		"class" => "tiny last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));			
//---------------------------------------------------------------------------- 
//END CATEGORY LIST TITLE
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START CATEGORY LIST COUNTER
//----------------------------------------------------------------------------
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.2.2 CATEGORY LIST COUNTER", 
		"type" => "html",
		 "std" => "");
$options[] = array("type" => "divider");
//Hide Counter
$options[] = array( "name" => __("Hide Counter?","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_counterhide",
		"class" => "tiny first",
		"std" => 0,
		"type" => "radio",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));	
//Counter Size			
$options[] = array( "name" => __("Counter Size","woobizz-list"), 
				"desc" => __("", "woobizz-list"),
				"id" => WOOBIZZLIST."_woobizz_categorylist_countersize",
				"class" => "tiny",
				"std" => 18,
				"min" => 0,
				"max" => 100,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
//Counter Color
$options[] = array( "name" => __("Counter Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_countercolor",
		"class" => "tiny",
		"std" => '#2c2d33',
		"type" => "color");	
//Counter Weight		
$options[] = array( "name" => __("Counter Weight","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_counterweight",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "100",
			1 => "200",
			2 => "300",
			3 => "400",
			4 => "500",
			5 => "600",
			6 => "700",
			
			));

//---------------------------------------------------------------------------- 
//END CATEGORY LIST COUNTER
//----------------------------------------------------------------------------		
//---------------------------------------------------------------------------- 
//START CATEGORY LIST DESCRIPTION
//----------------------------------------------------------------------------		
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.2.4 CATEGORY LIST DESCRIPTION", 
		"type" => "html",
		 "std" => "");
 $options[] = array("type" => "divider");
//Hide Description
$options[] = array( "name" => __("Hide Description?","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_descriptionhide",
		"class" => "short first",
		"std" => 0,
		"type" => "radio",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));	
//Description Size			
$options[] = array( "name" => __("Description Size","woobizz-list"), 
				"desc" => __("", "woobizz-list"),
				"id" => WOOBIZZLIST."_woobizz_categorylist_descriptionsize",
				"class" => "short",
				"std" => 18,
				"min" => 0,
				"max" => 100,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
//Description Color
$options[] = array( "name" => __("Description Color","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_descriptioncolor",
		"class" => "short last",
		"std" => '#2c2d33',
		"type" => "color");	
//Description Weight		
$options[] = array( "name" => __("Description Weight","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_descriptionweight",
		"class" => "short first",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "100",
			1 => "200",
			2 => "300",
			3 => "400",
			4 => "500",
			5 => "600",
			6 => "700",
			
			));
//Description Limit
$options[] = array( "name" => __("Description Limit","woobizz-list"), 
				"desc" => __("", "woobizz-list"),
				"id" => WOOBIZZLIST."_woobizz_categorylist_descriptionlimit",
				"class" => "short last",
				"std" => 18,
				"min" => 0,
				"max" => 20,
				"suffix" => "words",
				"increment" => 1,
				"type" => "number");				
// Description Paddings
$options[] = array( "name" => __("Padding Top","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_descriptionpaddingtopsize",
		"class" => "tiny first",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Top","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_descriptionpaddingunittop",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_descriptionpaddingrightsize",
		"class" => "tiny",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Right","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_descriptionpaddingunitright",
		"class" => "tiny last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Bottom","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_descriptionpaddingbottomsize",
		"class" => "tiny first",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Bottom","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_descriptionpaddingunitbottom",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_descriptionpaddingleftsize",
		"class" => "tiny",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Units Left","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_categorylist_descriptionpaddingunitleft",
		"class" => "tiny last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));	
$options[] = array("type" => "divider");			
//---------------------------------------------------------------------------- 
//END CATEGORY LIS DESCRIPTION
//----------------------------------------------------------------------------	
//---------------------------------------------------------------------------- 
//END CATEGORY LIST CATEGORY
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START RELATED PRODUCTS
//----------------------------------------------------------------------------	
$options[] = array( "name" => __('3- Related Products','woobizz-list'),
				"type" => "section");
$options[] = array( "name" => __('3 Related Products Options'),
				"type" => "title",
				"class" => "",
				"desc" => __("", "woobizz-list"));
$options[] = array("type" => "divider");
$options[] = array( "name" => __("Total with sidebar","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_related_totalproductsidebar",
		"class" => "medium first",
		"std" => 0,
		"min" => 0,
		"max" => 50,
		"suffix" => " products",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Total without sidebar","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_woobizz_related_totalproductnosidebar",
		"class" => "medium last",
		"std" => 0,
		"min" => 0,
		"max" => 50,
		"suffix" => " products",
		"increment" => 1,
		"type" => "number");
//---------------------------------------------------------------------------- 
//END RELATED PRODUCTS
//----------------------------------------------------------------------------	
//---------------------------------------------------------------------------- 
//START BACKUP & IMPORT
//----------------------------------------------------------------------------
$options[] = array( "name" => __('list Back-up & Reset','woobizz-list'),
				"type" => "section");
// Backup Field					
$options[] = array( "name" => __("list Back-up & Reset","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"id" => WOOBIZZLIST."_textarea",
		"class" => "first",
		"type" => "backup");
// Reset					
$options[] = array( "name" => __("Reset All Options","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"class" => "first",
		"type" => "reset");			
$options[] = array( "name" => __('list Import & Export','woobizz-list'),
				"type" => "section");			
$options[] = array( "name" => __("Export Options","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"class" => "first",
		"type" => "export");			
// Import Field					
$options[] = array( "name" => __("Import Options","woobizz-list"),
		"desc" => __("", "woobizz-list"),
		"class" => "first",
		"placeholder" => "Paste your export code here",
		"type" => "import");
//---------------------------------------------------------------------------- 
//END BACKUP & IMPORT
//----------------------------------------------------------------------------		
?>