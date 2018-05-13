<?php
//----------------------------------------------------------------------------
//WOOBIZZ CATEGORY LIST SECTION
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START HEX TO RGB FUNCTION
//----------------------------------------------------------------------------
function woobizz_categorylist_hextorgb($hex){
	$hex = str_replace("#", "", $hex);
if(strlen($hex) == 3){
	$r = hexdec(substr($hex,0,1).substr($hex,0,1));
	$g = hexdec(substr($hex,1,1).substr($hex,1,1));
	$b = hexdec(substr($hex,2,1).substr($hex,2,1));
}else{
	$r = hexdec(substr($hex,0,2));
	$g = hexdec(substr($hex,2,2));
	$b = hexdec(substr($hex,4,2));
}
$rgb = array($r, $g, $b);
return implode(",", $rgb); 
}
//---------------------------------------------------------------------------- 
//END HEX TO RGB FUNCTION
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START ALL CSS OPTIONS FUNCTION
//----------------------------------------------------------------------------
function woobizz_categorylist_allcssoptions(){
//----------------------------------------------------------------------------
//START BACKGROUND
//----------------------------------------------------------------------------
$woobizz_categorylist_backgroundimage= get_option(WOOBIZZLIST.'_woobizz_categorylist_backgroundimage');
$woobizz_categorylist_backgroundcolor= get_option(WOOBIZZLIST.'_woobizz_categorylist_backgroundcolor');
$woobizz_categorylist_backgroundsize= get_option(WOOBIZZLIST.'_woobizz_categorylist_backgroundsize');
if ($woobizz_categorylist_backgroundsize==0){
		$woobizz_categorylist_backgroundsize="contain";
	} elseif($woobizz_categorylist_backgroundsize==1) {
		$woobizz_categorylist_backgroundsize="cover";
	} elseif($woobizz_categorylist_backgroundsize==2) {
		$woobizz_categorylist_backgroundsize="inherit";
	} elseif($woobizz_categorylist_backgroundsize==3) {
		$woobizz_categorylist_backgroundsize="initial";
	} else {
		$woobizz_categorylist_backgroundsize="initial";
}
$woobizz_categorylist_backgroundrepeat= get_option(WOOBIZZLIST.'_woobizz_categorylist_backgroundrepeat');
if ($woobizz_categorylist_backgroundrepeat==0){
		$woobizz_categorylist_backgroundrepeat="no-repeat";
	} elseif($woobizz_categorylist_backgroundrepeat==1) {
		$woobizz_categorylist_backgroundrepeat="repeat";
	} elseif($woobizz_categorylist_backgroundrepeat==2) {
		$woobizz_categorylist_backgroundrepeat="repeat-x";
	} elseif($woobizz_categorylist_backgroundrepeat==3) {
		$woobizz_categorylist_backgroundrepeat="repeat-y";
	} elseif($woobizz_categorylist_backgroundrepeat==4) {
		$woobizz_categorylist_backgroundrepeat="round";
	} elseif($woobizz_categorylist_backgroundrepeat==5) {
		$woobizz_categorylist_backgroundrepeat="space";
	} elseif($woobizz_categorylist_backgroundrepeat==6) {
		$woobizz_categorylist_backgroundrepeat="inherit";
	} elseif($woobizz_categorylist_backgroundrepeat==5) {
		$woobizz_categorylist_backgroundrepeat="initial";
	} else {
		$woobizz_categorylist_backgroundrepeat="initial";
}
$woobizz_categorylist_backgroundposition= get_option(WOOBIZZLIST.'_woobizz_categorylist_backgroundposition');
if ($woobizz_categorylist_backgroundposition==0){
		$woobizz_categorylist_backgroundposition="left top";
	} elseif($woobizz_categorylist_backgroundposition==1) {
		$woobizz_categorylist_backgroundposition="left center";
	} elseif($woobizz_categorylist_backgroundposition==2) {
		$woobizz_categorylist_backgroundposition="left bottom";
	} elseif($woobizz_categorylist_backgroundposition==3) {
		$woobizz_categorylist_backgroundposition="right top";
	} elseif($woobizz_categorylist_backgroundposition==4) {
		$woobizz_categorylist_backgroundposition="right center";
	} elseif($woobizz_categorylist_backgroundposition==5) {
		$woobizz_categorylist_backgroundposition="right bottom";
	} elseif($woobizz_categorylist_backgroundposition==6) {
		$woobizz_categorylist_backgroundposition="center top";
	} elseif($woobizz_categorylist_backgroundposition==7) {
		$woobizz_categorylist_backgroundposition="center center";
	} elseif($woobizz_categorylist_backgroundposition==8) {
		$woobizz_categorylist_backgroundposition="center bottom";
	} elseif($woobizz_categorylist_backgroundposition==9) {
		$woobizz_categorylist_backgroundposition="initial";
	} elseif($woobizz_categorylist_backgroundposition==10) {
		$woobizz_categorylist_backgroundposition="initial";
	} else {
		$woobizz_categorylist_backgroundposition="initial";
}
//----------------------------------------------------------------------------
//END BACKGROUND
//----------------------------------------------------------------------------
//----------------------------------------------------------------------------
//START GRADIENTS
//----------------------------------------------------------------------------
$woobizz_categorylist_backgroundgradient1= get_option(WOOBIZZLIST.'_woobizz_categorylist_backgroundgradient1');
$woobizz_categorylist_backgroundgradient1opacity= get_option(WOOBIZZLIST.'_woobizz_categorylist_backgroundgradient1opacity');
$trasnform_woobizz_categorylist_backgroundgradient1=woobizz_categorylist_hextorgb($woobizz_categorylist_backgroundgradient1);
$woobizz_categorylist_backgroundfullgradient1=$trasnform_woobizz_categorylist_backgroundgradient1.",".$woobizz_categorylist_backgroundgradient1opacity;
$woobizz_categorylist_backgroundgradient2= get_option(WOOBIZZLIST.'_woobizz_categorylist_backgroundgradient2');
$woobizz_categorylist_backgroundgradient2opacity= get_option(WOOBIZZLIST.'_woobizz_categorylist_backgroundgradient2opacity');
$trasnform_woobizz_categorylist_backgroundgradient2=woobizz_categorylist_hextorgb($woobizz_categorylist_backgroundgradient2);
$woobizz_categorylist_backgroundfullgradient2=$trasnform_woobizz_categorylist_backgroundgradient2.",".$woobizz_categorylist_backgroundgradient2opacity;
//----------------------------------------------------------------------------
//END GRADIENTS
//----------------------------------------------------------------------------
//----------------------------------------------------------------------------
//START SHADOWS
//----------------------------------------------------------------------------
$woobizz_categorylist_shadowcolor= get_option(WOOBIZZLIST.'_woobizz_categorylist_shadowcolor');
$woobizz_categorylist_shadowrightdistance= get_option(WOOBIZZLIST.'_woobizz_categorylist_shadowrightdistance');
$woobizz_categorylist_shadowbottomdistance= get_option(WOOBIZZLIST.'_woobizz_categorylist_shadowbottomdistance');
$woobizz_categorylist_shadowspread= get_option(WOOBIZZLIST.'_woobizz_categorylist_shadowspread');
$woobizz_categorylist_shadowsize= get_option(WOOBIZZLIST.'_woobizz_categorylist_shadowsize');
$woobizz_categorylist_shadowapply= get_option(WOOBIZZLIST.'_woobizz_categorylist_shadowapply');
if ($woobizz_categorylist_shadowapply==0){
		$woobizz_categorylist_shadowfull=$woobizz_categorylist_shadowrightdistance."px "
											.$woobizz_categorylist_shadowbottomdistance."px "
											.$woobizz_categorylist_shadowspread."px "
											.$woobizz_categorylist_shadowsize."px "
											.$woobizz_categorylist_shadowcolor;
	} elseif($woobizz_categorylist_shadowapply==1) {
		$woobizz_categorylist_shadowfull="none";
	} else {
		$woobizz_categorylist_shadowfull="none";
} 
//----------------------------------------------------------------------------
//END SHADOW
//----------------------------------------------------------------------------
//----------------------------------------------------------------------------
//START BORDER
//----------------------------------------------------------------------------
$woobizz_categorylist_bordersize= get_option(WOOBIZZLIST.'_woobizz_categorylist_bordersize');
$woobizz_categorylist_bordercolor= get_option(WOOBIZZLIST.'_woobizz_categorylist_bordercolor');
$woobizz_categorylist_borderstyle= get_option(WOOBIZZLIST.'_woobizz_categorylist_borderstyle');
if ($woobizz_categorylist_borderstyle==0){
		$woobizz_categorylist_borderstyle="dotted";
	} elseif($woobizz_categorylist_borderstyle==1) {
		$woobizz_categorylist_borderstyle="dashed";
	} elseif($woobizz_categorylist_borderstyle==2) {
		$woobizz_categorylist_borderstyle="solid";
	} elseif($woobizz_categorylist_borderstyle==3) {
		$woobizz_categorylist_borderstyle="none";
	} else {$woobizz_categorylist_borderstyle="none";
}
$woobizz_categorylist_borderradius= get_option(WOOBIZZLIST.'_woobizz_categorylist_borderradius'); 
$woobizz_categorylist_borderfull=$woobizz_categorylist_bordersize."px "
								.$woobizz_categorylist_borderstyle." "
								.$woobizz_categorylist_bordercolor." ";
//----------------------------------------------------------------------------
//END BORDER
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START MARGINS
//----------------------------------------------------------------------------
//Padding Top
$woobizz_categorylist_margintopsize= get_option(WOOBIZZLIST.'_woobizz_categorylist_margintopsize');
$woobizz_categorylist_marginunittop= get_option(WOOBIZZLIST.'_woobizz_categorylist_marginunittop');
if ($woobizz_categorylist_marginunittop==0){
	$woobizz_categorylist_marginunittop="px";
} elseif($woobizz_categorylist_marginunittop==1) {
	$woobizz_categorylist_marginunittop="%";
} elseif($woobizz_categorylist_marginunittop==2) {
	$woobizz_categorylist_marginunittop="em";
} elseif($woobizz_categorylist_marginunittop==3) {
	$woobizz_categorylist_marginunittop="pt";
} else {
	$woobizz_categorylist_marginunittop="initial";
} 
//Padding Right
$woobizz_categorylist_marginrightsize= get_option(WOOBIZZLIST.'_woobizz_categorylist_marginrightsize');
$woobizz_categorylist_marginunitright= get_option(WOOBIZZLIST.'_woobizz_categorylist_marginunitright');
if ($woobizz_categorylist_marginunitright==0){
	$woobizz_categorylist_marginunitright="px";
} elseif($woobizz_categorylist_marginunitright==1) {
	$woobizz_categorylist_marginunitright="%";
} elseif($woobizz_categorylist_marginunitright==2) {
	$woobizz_categorylist_marginunitright="em";
} elseif($woobizz_categorylist_marginunitright==3) {
	$woobizz_categorylist_marginunitright="pt";
} else {
	$woobizz_categorylist_marginunitright="initial";
}	
//Padding Bottom
$woobizz_categorylist_marginbottomsize= get_option(WOOBIZZLIST.'_woobizz_categorylist_marginbottomsize');
$woobizz_categorylist_marginunitbottom= get_option(WOOBIZZLIST.'_woobizz_categorylist_marginunitbottom');
if ($woobizz_categorylist_marginunitbottom==0){
	$woobizz_categorylist_marginunitbottom="px";
} elseif($woobizz_categorylist_marginunitbottom==1) {
	$woobizz_categorylist_marginunitbottom="%";
} elseif($woobizz_categorylist_marginunitbottom==2) {
	$woobizz_categorylist_marginunitbottom="em";
} elseif($woobizz_categorylist_marginunitbottom==3) {
	$woobizz_categorylist_marginunitbottom="pt";
} else {
	$woobizz_categorylist_marginunitbottom="initial";
}	
//Padding Left
$woobizz_categorylist_marginleftsize= get_option(WOOBIZZLIST.'_woobizz_categorylist_marginleftsize');
$woobizz_categorylist_marginunitleft= get_option(WOOBIZZLIST.'_woobizz_categorylist_marginunitleft');
if ($woobizz_categorylist_marginunitleft==0){
	$woobizz_categorylist_marginunitleft="px";
} elseif($woobizz_categorylist_marginunitleft==1) {
	$woobizz_categorylist_marginunitleft="%";
} elseif($woobizz_categorylist_marginunitleft==2) {
	$woobizz_categorylist_marginunitleft="em";
} elseif($woobizz_categorylist_marginunitleft==3) {
	$woobizz_categorylist_marginunitleft="pt";
} else {
	$woobizz_categorylist_marginunitleft="initial";
}
$woobizz_categorylist_marginfull=$woobizz_categorylist_margintopsize.$woobizz_categorylist_marginunittop." "
							   .$woobizz_categorylist_marginrightsize.$woobizz_categorylist_marginunitright." "
							   .$woobizz_categorylist_marginbottomsize.$woobizz_categorylist_marginunitbottom." "
							   .$woobizz_categorylist_marginleftsize.$woobizz_categorylist_marginunitleft." ";							   	
//---------------------------------------------------------------------------- 
//END MARGIN
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START PADDING
//----------------------------------------------------------------------------
//Padding Top
$woobizz_categorylist_paddingtopsize= get_option(WOOBIZZLIST.'_woobizz_categorylist_paddingtopsize');
$woobizz_categorylist_paddingunittop= get_option(WOOBIZZLIST.'_woobizz_categorylist_paddingunittop');
if ($woobizz_categorylist_paddingunittop==0){
	$woobizz_categorylist_paddingunittop="px";
} elseif($woobizz_categorylist_paddingunittop==1) {
	$woobizz_categorylist_paddingunittop="%";
} elseif($woobizz_categorylist_paddingunittop==2) {
	$woobizz_categorylist_paddingunittop="em";
} elseif($woobizz_categorylist_paddingunittop==3) {
	$woobizz_categorylist_paddingunittop="pt";
} else {
	$woobizz_categorylist_paddingunittop="initial";
} 
//Padding Right
$woobizz_categorylist_paddingrightsize= get_option(WOOBIZZLIST.'_woobizz_categorylist_paddingrightsize');
$woobizz_categorylist_paddingunitright= get_option(WOOBIZZLIST.'_woobizz_categorylist_paddingunitright');
if ($woobizz_categorylist_paddingunitright==0){
	$woobizz_categorylist_paddingunitright="px";
} elseif($woobizz_categorylist_paddingunitright==1) {
	$woobizz_categorylist_paddingunitright="%";
} elseif($woobizz_categorylist_paddingunitright==2) {
	$woobizz_categorylist_paddingunitright="em";
} elseif($woobizz_categorylist_paddingunitright==3) {
	$woobizz_categorylist_paddingunitright="pt";
} else {
	$woobizz_categorylist_paddingunitright="initial";
}	
//Padding Bottom
$woobizz_categorylist_paddingbottomsize= get_option(WOOBIZZLIST.'_woobizz_categorylist_paddingbottomsize');
$woobizz_categorylist_paddingunitbottom= get_option(WOOBIZZLIST.'_woobizz_categorylist_paddingunitbottom');
if ($woobizz_categorylist_paddingunitbottom==0){
	$woobizz_categorylist_paddingunitbottom="px";
} elseif($woobizz_categorylist_paddingunitbottom==1) {
	$woobizz_categorylist_paddingunitbottom="%";
} elseif($woobizz_categorylist_paddingunitbottom==2) {
	$woobizz_categorylist_paddingunitbottom="em";
} elseif($woobizz_categorylist_paddingunitbottom==3) {
	$woobizz_categorylist_paddingunitbottom="pt";
} else {
	$woobizz_categorylist_paddingunitbottom="initial";
}	
//Padding Left
$woobizz_categorylist_paddingleftsize= get_option(WOOBIZZLIST.'_woobizz_categorylist_paddingleftsize');
$woobizz_categorylist_paddingunitleft= get_option(WOOBIZZLIST.'_woobizz_categorylist_paddingunitleft');
if ($woobizz_categorylist_paddingunitleft==0){
	$woobizz_categorylist_paddingunitleft="px";
} elseif($woobizz_categorylist_paddingunitleft==1) {
	$woobizz_categorylist_paddingunitleft="%";
} elseif($woobizz_categorylist_paddingunitleft==2) {
	$woobizz_categorylist_paddingunitleft="em";
} elseif($woobizz_categorylist_paddingunitleft==3) {
	$woobizz_categorylist_paddingunitleft="pt";
} else {
	$woobizz_categorylist_paddingunitleft="initial";
}
$woobizz_categorylist_paddingfull=$woobizz_categorylist_paddingtopsize.$woobizz_categorylist_paddingunittop." "
							   .$woobizz_categorylist_paddingrightsize.$woobizz_categorylist_paddingunitright." "
							   .$woobizz_categorylist_paddingbottomsize.$woobizz_categorylist_paddingunitbottom." "
							   .$woobizz_categorylist_paddingleftsize.$woobizz_categorylist_paddingunitleft." ";							   	
//---------------------------------------------------------------------------- 
//END PADDING
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START CATEGORY LIST TITLE
//----------------------------------------------------------------------------
//Hide Title?
$woobizz_categorylist_titlehide=get_option(WOOBIZZLIST.'_woobizz_categorylist_titlehide');
if ($woobizz_categorylist_titlehide==0){
	$woobizz_categorylist_titlehide="none";
} elseif($woobizz_categorylist_titlehide==1) {
	$woobizz_categorylist_titlehide="inherit";
} else {
	$woobizz_categorylist_titlehide="inherit";
}
//Title Size
$woobizz_categorylist_titlesize=get_option(WOOBIZZLIST.'_woobizz_categorylist_titlesize');
//Title Color
$woobizz_categorylist_titlecolor=get_option(WOOBIZZLIST.'_woobizz_categorylist_titlecolor');
//Title Weight
$woobizz_categorylist_titleweight=get_option(WOOBIZZLIST.'_woobizz_categorylist_titleweight');
if ($woobizz_categorylist_titleweight==0){
		$woobizz_categorylist_titleweight="100";
	} elseif($woobizz_categorylist_titleweight==1) {
		$woobizz_categorylist_titleweight="200";
	} elseif($woobizz_categorylist_titleweight==2) {
		$woobizz_categorylist_titleweight="300";
	} elseif($woobizz_categorylist_titleweight==3) {
		$woobizz_categorylist_titleweight="400";
	} elseif($woobizz_categorylist_titleweight==4) {
		$woobizz_categorylist_titleweight="500";
	} elseif($woobizz_categorylist_titleweight==5) {
		$woobizz_categorylist_titleweight="600";
	} elseif($woobizz_categorylist_titleweight==6) {
		$woobizz_categorylist_titleweight="700";
	} else {$woobizz_categorylist_titleweight="400";
}
//Padding Top
$woobizz_categorylist_titlepaddingtopsize= get_option(WOOBIZZLIST.'_woobizz_categorylist_titlepaddingtopsize');
$woobizz_categorylist_titlepaddingunittop= get_option(WOOBIZZLIST.'_woobizz_categorylist_titlepaddingunittop');
if ($woobizz_categorylist_titlepaddingunittop==0){
	$woobizz_categorylist_titlepaddingunittop="px";
} elseif($woobizz_categorylist_titlepaddingunittop==1) {
	$woobizz_categorylist_titlepaddingunittop="%";
} elseif($woobizz_categorylist_titlepaddingunittop==2) {
	$woobizz_categorylist_titlepaddingunittop="em";
} elseif($woobizz_categorylist_titlepaddingunittop==3) {
	$woobizz_categorylist_titlepaddingunittop="pt";
} else {
	$woobizz_categorylist_titlepaddingunittop="initial";
} 
//Padding Right
$woobizz_categorylist_titlepaddingrightsize= get_option(WOOBIZZLIST.'_woobizz_categorylist_titlepaddingrightsize');
$woobizz_categorylist_titlepaddingunitright= get_option(WOOBIZZLIST.'_woobizz_categorylist_titlepaddingunitright');
if ($woobizz_categorylist_titlepaddingunitright==0){
	$woobizz_categorylist_titlepaddingunitright="px";
} elseif($woobizz_categorylist_titlepaddingunitright==1) {
	$woobizz_categorylist_titlepaddingunitright="%";
} elseif($woobizz_categorylist_titlepaddingunitright==2) {
	$woobizz_categorylist_titlepaddingunitright="em";
} elseif($woobizz_categorylist_titlepaddingunitright==3) {
	$woobizz_categorylist_titlepaddingunitright="pt";
} else {
	$woobizz_categorylist_titlepaddingunitright="initial";
}	
//Padding Bottom
$woobizz_categorylist_titlepaddingbottomsize= get_option(WOOBIZZLIST.'_woobizz_categorylist_titlepaddingbottomsize');
$woobizz_categorylist_titlepaddingunitbottom= get_option(WOOBIZZLIST.'_woobizz_categorylist_titlepaddingunitbottom');
if ($woobizz_categorylist_titlepaddingunitbottom==0){
	$woobizz_categorylist_titlepaddingunitbottom="px";
} elseif($woobizz_categorylist_titlepaddingunitbottom==1) {
	$woobizz_categorylist_titlepaddingunitbottom="%";
} elseif($woobizz_categorylist_titlepaddingunitbottom==2) {
	$woobizz_categorylist_titlepaddingunitbottom="em";
} elseif($woobizz_categorylist_titlepaddingunitbottom==3) {
	$woobizz_categorylist_titlepaddingunitbottom="pt";
} else {
	$woobizz_categorylist_titlepaddingunitbottom="initial";
}	
//Padding Left
$woobizz_categorylist_titlepaddingleftsize= get_option(WOOBIZZLIST.'_woobizz_categorylist_titlepaddingleftsize');
$woobizz_categorylist_titlepaddingunitleft= get_option(WOOBIZZLIST.'_woobizz_categorylist_titlepaddingunitleft');
if ($woobizz_categorylist_titlepaddingunitleft==0){
	$woobizz_categorylist_titlepaddingunitleft="px";
} elseif($woobizz_categorylist_titlepaddingunitleft==1) {
	$woobizz_categorylist_titlepaddingunitleft="%";
} elseif($woobizz_categorylist_titlepaddingunitleft==2) {
	$woobizz_categorylist_titlepaddingunitleft="em";
} elseif($woobizz_categorylist_titlepaddingunitleft==3) {
	$woobizz_categorylist_titlepaddingunitleft="pt";
} else {
	$woobizz_categorylist_titlepaddingunitleft="initial";
}
$woobizz_categorylist_titlepaddingfull=$woobizz_categorylist_titlepaddingtopsize.$woobizz_categorylist_titlepaddingunittop." "
							   .$woobizz_categorylist_titlepaddingrightsize.$woobizz_categorylist_titlepaddingunitright." "
							   .$woobizz_categorylist_titlepaddingbottomsize.$woobizz_categorylist_titlepaddingunitbottom." "
							   .$woobizz_categorylist_titlepaddingleftsize.$woobizz_categorylist_titlepaddingunitleft." ";
//---------------------------------------------------------------------------- 
//END CATEGORY LIST TITLE
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START CATEGORY LIST COUNTER
//----------------------------------------------------------------------------
//Hide Counter?
$woobizz_categorylist_counterhide=get_option(WOOBIZZLIST.'_woobizz_categorylist_counterhide');
if ($woobizz_categorylist_counterhide==0){
	$woobizz_categorylist_counterhide="none";
} elseif($woobizz_categorylist_counterhide==1) {
	$woobizz_categorylist_counterhide="inherit";
} else {
	$woobizz_categorylist_counterhide="inherit";
}
//Counter Size
$woobizz_categorylist_countersize=get_option(WOOBIZZLIST.'_woobizz_categorylist_countersize');
//Counter Color
$woobizz_categorylist_countercolor=get_option(WOOBIZZLIST.'_woobizz_categorylist_countercolor');
//Counter Weight
$woobizz_categorylist_counterweight=get_option(WOOBIZZLIST.'_woobizz_categorylist_counterweight');
if ($woobizz_categorylist_counterweight==0){
		$woobizz_categorylist_counterweight="100";
	} elseif($woobizz_categorylist_counterweight==1) {
		$woobizz_categorylist_counterweight="200";
	} elseif($woobizz_categorylist_counterweight==2) {
		$woobizz_categorylist_counterweight="300";
	} elseif($woobizz_categorylist_counterweight==3) {
		$woobizz_categorylist_counterweight="400";
	} elseif($woobizz_categorylist_counterweight==4) {
		$woobizz_categorylist_counterweight="500";
	} elseif($woobizz_categorylist_counterweight==5) {
		$woobizz_categorylist_counterweight="600";
	} elseif($woobizz_categorylist_counterweight==6) {
		$woobizz_categorylist_counterweight="700";
	} else {$woobizz_categorylist_counterweight="400";
}
//---------------------------------------------------------------------------- 
//END CATEGORY LIST COUNTER
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START CATEGORY LIST DESCRIPTION
//----------------------------------------------------------------------------
//See hide description at the end of this page
//Description Size
$woobizz_categorylist_descriptionsize=get_option(WOOBIZZLIST.'_woobizz_categorylist_descriptionsize');
//Description Color
$woobizz_categorylist_descriptioncolor=get_option(WOOBIZZLIST.'_woobizz_categorylist_descriptioncolor');
//Description Weight
$woobizz_categorylist_descriptionweight=get_option(WOOBIZZLIST.'_woobizz_categorylist_descriptionweight');
if ($woobizz_categorylist_descriptionweight==0){
		$woobizz_categorylist_descriptionweight="100";
	} elseif($woobizz_categorylist_descriptionweight==1) {
		$woobizz_categorylist_descriptionweight="200";
	} elseif($woobizz_categorylist_descriptionweight==2) {
		$woobizz_categorylist_descriptionweight="300";
	} elseif($woobizz_categorylist_descriptionweight==3) {
		$woobizz_categorylist_descriptionweight="400";
	} elseif($woobizz_categorylist_descriptionweight==4) {
		$woobizz_categorylist_descriptionweight="500";
	} elseif($woobizz_categorylist_descriptionweight==5) {
		$woobizz_categorylist_descriptionweight="600";
	} elseif($woobizz_categorylist_descriptionweight==6) {
		$woobizz_categorylist_descriptionweight="700";
	} else {$woobizz_categorylist_descriptionweight="400";
}
//Padding Top
$woobizz_categorylist_descriptionpaddingtopsize= get_option(WOOBIZZLIST.'_woobizz_categorylist_descriptionpaddingtopsize');
$woobizz_categorylist_descriptionpaddingunittop= get_option(WOOBIZZLIST.'_woobizz_categorylist_descriptionpaddingunittop');
if ($woobizz_categorylist_descriptionpaddingunittop==0){
	$woobizz_categorylist_descriptionpaddingunittop="px";
} elseif($woobizz_categorylist_descriptionpaddingunittop==1) {
	$woobizz_categorylist_descriptionpaddingunittop="%";
} elseif($woobizz_categorylist_descriptionpaddingunittop==2) {
	$woobizz_categorylist_descriptionpaddingunittop="em";
} elseif($woobizz_categorylist_descriptionpaddingunittop==3) {
	$woobizz_categorylist_descriptionpaddingunittop="pt";
} else {
	$woobizz_categorylist_descriptionpaddingunittop="initial";
} 
//Padding Right
$woobizz_categorylist_descriptionpaddingrightsize= get_option(WOOBIZZLIST.'_woobizz_categorylist_descriptionpaddingrightsize');
$woobizz_categorylist_descriptionpaddingunitright= get_option(WOOBIZZLIST.'_woobizz_categorylist_descriptionpaddingunitright');
if ($woobizz_categorylist_descriptionpaddingunitright==0){
	$woobizz_categorylist_descriptionpaddingunitright="px";
} elseif($woobizz_categorylist_descriptionpaddingunitright==1) {
	$woobizz_categorylist_descriptionpaddingunitright="%";
} elseif($woobizz_categorylist_descriptionpaddingunitright==2) {
	$woobizz_categorylist_descriptionpaddingunitright="em";
} elseif($woobizz_categorylist_descriptionpaddingunitright==3) {
	$woobizz_categorylist_descriptionpaddingunitright="pt";
} else {
	$woobizz_categorylist_descriptionpaddingunitright="initial";
}	
//Padding Bottom
$woobizz_categorylist_descriptionpaddingbottomsize= get_option(WOOBIZZLIST.'_woobizz_categorylist_descriptionpaddingbottomsize');
$woobizz_categorylist_descriptionpaddingunitbottom= get_option(WOOBIZZLIST.'_woobizz_categorylist_descriptionpaddingunitbottom');
if ($woobizz_categorylist_descriptionpaddingunitbottom==0){
	$woobizz_categorylist_descriptionpaddingunitbottom="px";
} elseif($woobizz_categorylist_descriptionpaddingunitbottom==1) {
	$woobizz_categorylist_descriptionpaddingunitbottom="%";
} elseif($woobizz_categorylist_descriptionpaddingunitbottom==2) {
	$woobizz_categorylist_descriptionpaddingunitbottom="em";
} elseif($woobizz_categorylist_descriptionpaddingunitbottom==3) {
	$woobizz_categorylist_descriptionpaddingunitbottom="pt";
} else {
	$woobizz_categorylist_descriptionpaddingunitbottom="initial";
}	
//Padding Left
$woobizz_categorylist_descriptionpaddingleftsize= get_option(WOOBIZZLIST.'_woobizz_categorylist_descriptionpaddingleftsize');
$woobizz_categorylist_descriptionpaddingunitleft= get_option(WOOBIZZLIST.'_woobizz_categorylist_descriptionpaddingunitleft');
if ($woobizz_categorylist_descriptionpaddingunitleft==0){
	$woobizz_categorylist_descriptionpaddingunitleft="px";
} elseif($woobizz_categorylist_descriptionpaddingunitleft==1) {
	$woobizz_categorylist_descriptionpaddingunitleft="%";
} elseif($woobizz_categorylist_descriptionpaddingunitleft==2) {
	$woobizz_categorylist_descriptionpaddingunitleft="em";
} elseif($woobizz_categorylist_descriptionpaddingunitleft==3) {
	$woobizz_categorylist_descriptionpaddingunitleft="pt";
} else {
	$woobizz_categorylist_descriptionpaddingunitleft="initial";
}
$woobizz_categorylist_descriptionpaddingfull=$woobizz_categorylist_descriptionpaddingtopsize.$woobizz_categorylist_descriptionpaddingunittop." "
							   .$woobizz_categorylist_descriptionpaddingrightsize.$woobizz_categorylist_descriptionpaddingunitright." "
							   .$woobizz_categorylist_descriptionpaddingbottomsize.$woobizz_categorylist_descriptionpaddingunitbottom." "
							   .$woobizz_categorylist_descriptionpaddingleftsize.$woobizz_categorylist_descriptionpaddingunitleft." ";
//---------------------------------------------------------------------------- 
//END CATEGORY LIST DESCRIPTION
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START 1.2.1 CATEGORY LIST THUMBNAIL
//----------------------------------------------------------------------------
//Hide Thumnail?
$woobizz_categorylist_thumbsbghide=get_option(WOOBIZZLIST.'_woobizz_categorylist_thumbsbghide');
if ($woobizz_categorylist_thumbsbghide==0){
	$woobizz_categorylist_thumbsbghide="none";
} elseif($woobizz_categorylist_thumbsbghide==1) {
	$woobizz_categorylist_thumbsbghide="inherit";
} else {
	$woobizz_categorylist_thumbsbghide="inherit";
}
//Expand Thumbnail?
$woobizz_categorylist_thumbsbgexpand=get_option(WOOBIZZLIST.'_woobizz_categorylist_thumbsbgexpand');
if ($woobizz_categorylist_thumbsbgexpand==0){
	$woobizz_categorylist_thumbsbgexpand="100%";
} elseif($woobizz_categorylist_thumbsbgexpand==1) {
	$woobizz_categorylist_thumbsbgexpand="auto";
} else {
	$woobizz_categorylist_thumbsbgexpand="auto";
}
//Borders
$woobizz_categorylist_thumbsbgbordersize= get_option(WOOBIZZLIST.'_woobizz_categorylist_thumbsbgbordersize');
$woobizz_categorylist_thumbsbgbordercolor= get_option(WOOBIZZLIST.'_woobizz_categorylist_thumbsbgbordercolor');
$woobizz_categorylist_thumbsbgborderstyle= get_option(WOOBIZZLIST.'_woobizz_categorylist_thumbsbgborderstyle');
if ($woobizz_categorylist_thumbsbgborderstyle==0){
		$woobizz_categorylist_thumbsbgborderstyle="dotted";
	} elseif($woobizz_categorylist_thumbsbgborderstyle==1) {
		$woobizz_categorylist_thumbsbgborderstyle="dashed";
	} elseif($woobizz_categorylist_thumbsbgborderstyle==2) {
		$woobizz_categorylist_thumbsbgborderstyle="solid";
	} elseif($woobizz_categorylist_thumbsbgborderstyle==3) {
		$woobizz_categorylist_thumbsbgborderstyle="none";
	} else {$woobizz_categorylist_thumbsbgborderstyle="none";
}
$woobizz_categorylist_thumbsbgborderradius= get_option(WOOBIZZLIST.'_woobizz_categorylist_thumbsbgborderradius'); 
$woobizz_categorylist_thumbsbgborderfull=$woobizz_categorylist_thumbsbgbordersize."px "
								.$woobizz_categorylist_thumbsbgborderstyle." "
								.$woobizz_categorylist_thumbsbgbordercolor." ";
//Shadows
$woobizz_categorylist_thumbsbgshadowcolor= get_option(WOOBIZZLIST.'_woobizz_categorylist_thumbsbgshadowcolor');
$woobizz_categorylist_thumbsbgshadowrightdistance= get_option(WOOBIZZLIST.'_woobizz_categorylist_thumbsbgshadowrightdistance');
$woobizz_categorylist_thumbsbgshadowbottomdistance= get_option(WOOBIZZLIST.'_woobizz_categorylist_thumbsbgshadowbottomdistance');
$woobizz_categorylist_thumbsbgshadowspread= get_option(WOOBIZZLIST.'_woobizz_categorylist_thumbsbgshadowspread');
$woobizz_categorylist_thumbsbgshadowsize= get_option(WOOBIZZLIST.'_woobizz_categorylist_thumbsbgshadowsize');
$woobizz_categorylist_thumbsbgshadowapply= get_option(WOOBIZZLIST.'_woobizz_categorylist_thumbsbgshadowapply');
if ($woobizz_categorylist_thumbsbgshadowapply==0){
		$woobizz_categorylist_thumbsbgshadowfull=$woobizz_categorylist_thumbsbgshadowrightdistance."px "
											.$woobizz_categorylist_thumbsbgshadowbottomdistance."px "
											.$woobizz_categorylist_thumbsbgshadowspread."px "
											.$woobizz_categorylist_thumbsbgshadowsize."px "
											.$woobizz_categorylist_thumbsbgshadowcolor;
	} elseif($woobizz_categorylist_thumbsbgshadowapply==1) {
		$woobizz_categorylist_thumbsbgshadowfull="none";
	} else {
		$woobizz_categorylist_thumbsbgshadowfull="none";
}
//----------------------------------------------------------------------------
//THUMBNAIL BACKGROUND
//----------------------------------------------------------------------------
$woobizz_categorylist_thumbsbgpadding= get_option(WOOBIZZLIST.'_woobizz_categorylist_thumbsbgpadding');
$woobizz_categorylist_thumbsbgimage= get_option(WOOBIZZLIST.'_woobizz_categorylist_thumbsbgimage');
$woobizz_categorylist_thumbsbgcolor= get_option(WOOBIZZLIST.'_woobizz_categorylist_thumbsbgcolor');
$woobizz_categorylist_thumbsbgsize= get_option(WOOBIZZLIST.'_woobizz_categorylist_thumbsbgsize');
if ($woobizz_categorylist_thumbsbgsize==0){
		$woobizz_categorylist_thumbsbgsize="contain";
	} elseif($woobizz_categorylist_thumbsbgsize==1) {
		$woobizz_categorylist_thumbsbgsize="cover";
	} elseif($woobizz_categorylist_thumbsbgsize==2) {
		$woobizz_categorylist_thumbsbgsize="inherit";
	} elseif($woobizz_categorylist_thumbsbgsize==3) {
		$woobizz_categorylist_thumbsbgsize="initial";
	} else {
		$woobizz_categorylist_thumbsbgsize="initial";
}
$woobizz_categorylist_thumbsbgrepeat= get_option(WOOBIZZLIST.'_woobizz_categorylist_thumbsbgrepeat');
if ($woobizz_categorylist_thumbsbgrepeat==0){
		$woobizz_categorylist_thumbsbgrepeat="no-repeat";
	} elseif($woobizz_categorylist_thumbsbgrepeat==1) {
		$woobizz_categorylist_thumbsbgrepeat="repeat";
	} elseif($woobizz_categorylist_thumbsbgrepeat==2) {
		$woobizz_categorylist_thumbsbgrepeat="repeat-x";
	} elseif($woobizz_categorylist_thumbsbgrepeat==3) {
		$woobizz_categorylist_thumbsbgrepeat="repeat-y";
	} elseif($woobizz_categorylist_thumbsbgrepeat==4) {
		$woobizz_categorylist_thumbsbgrepeat="round";
	} elseif($woobizz_categorylist_thumbsbgrepeat==5) {
		$woobizz_categorylist_thumbsbgrepeat="space";
	} elseif($woobizz_categorylist_thumbsbgrepeat==6) {
		$woobizz_categorylist_thumbsbgrepeat="inherit";
	} elseif($woobizz_categorylist_thumbsbgrepeat==5) {
		$woobizz_categorylist_thumbsbgrepeat="initial";
	} else {
		$woobizz_categorylist_thumbsbgrepeat="initial";
}
$woobizz_categorylist_thumbsbgposition= get_option(WOOBIZZLIST.'_woobizz_categorylist_thumbsbgposition');
if ($woobizz_categorylist_thumbsbgposition==0){
		$woobizz_categorylist_thumbsbgposition="left top";
	} elseif($woobizz_categorylist_thumbsbgposition==1) {
		$woobizz_categorylist_thumbsbgposition="left center";
	} elseif($woobizz_categorylist_thumbsbgposition==2) {
		$woobizz_categorylist_thumbsbgposition="left bottom";
	} elseif($woobizz_categorylist_thumbsbgposition==3) {
		$woobizz_categorylist_thumbsbgposition="right top";
	} elseif($woobizz_categorylist_thumbsbgposition==4) {
		$woobizz_categorylist_thumbsbgposition="right center";
	} elseif($woobizz_categorylist_thumbsbgposition==5) {
		$woobizz_categorylist_thumbsbgposition="right bottom";
	} elseif($woobizz_categorylist_thumbsbgposition==6) {
		$woobizz_categorylist_thumbsbgposition="center top";
	} elseif($woobizz_categorylist_thumbsbgposition==7) {
		$woobizz_categorylist_thumbsbgposition="center center";
	} elseif($woobizz_categorylist_thumbsbgposition==8) {
		$woobizz_categorylist_thumbsbgposition="center bottom";
	} elseif($woobizz_categorylist_thumbsbgposition==9) {
		$woobizz_categorylist_thumbsbgposition="initial";
	} elseif($woobizz_categorylist_thumbsbgposition==10) {
		$woobizz_categorylist_thumbsbgposition="initial";
	} else {
		$woobizz_categorylist_thumbsbgposition="initial";
}
//---------------------------------------------------------------------------- 
//END CATEGORY LIST THUMBNAIL
//----------------------------------------------------------------------------
//----------------------------------------------------------------------------
//START THUMBNAIL GRADIENTS
//----------------------------------------------------------------------------
$woobizz_categorylist_thumbsbggradient1= get_option(WOOBIZZLIST.'_woobizz_categorylist_thumbsbggradient1');
$woobizz_categorylist_thumbsbggradient1opacity= get_option(WOOBIZZLIST.'_woobizz_categorylist_thumbsbggradient1opacity');
$trasnform_woobizz_categorylist_thumbsbggradient1=woobizz_categorylist_hextorgb($woobizz_categorylist_thumbsbggradient1);
$woobizz_categorylist_thumbsbgfullgradient1=$trasnform_woobizz_categorylist_thumbsbggradient1.",".$woobizz_categorylist_thumbsbggradient1opacity;
$woobizz_categorylist_thumbsbggradient2= get_option(WOOBIZZLIST.'_woobizz_categorylist_thumbsbggradient2');
$woobizz_categorylist_thumbsbggradient2opacity= get_option(WOOBIZZLIST.'_woobizz_categorylist_thumbsbggradient2opacity');
$trasnform_woobizz_categorylist_thumbsbggradient2=woobizz_categorylist_hextorgb($woobizz_categorylist_thumbsbggradient2);
$woobizz_categorylist_thumbsbgfullgradient2=$trasnform_woobizz_categorylist_thumbsbggradient2.",".$woobizz_categorylist_thumbsbggradient2opacity;
//----------------------------------------------------------------------------
//END GRADIENTS
//----------------------------------------------------------------------------
//----------------------------------------------------------------------------    
//START SHOWING CSS OPTIONS
//----------------------------------------------------------------------------
 echo"
<style>
/**Product Category Image*/
ul.products li.product.product-category img {
    width:".$woobizz_categorylist_thumbsbgexpand."!important;
	box-shadow:".$woobizz_categorylist_thumbsbgshadowfull."!important;
	border:".$woobizz_categorylist_thumbsbgborderfull."!important;
	border-radius:".$woobizz_categorylist_thumbsbgborderradius."%!important;
	display:".$woobizz_categorylist_thumbsbghide."!important;
	background:linear-gradient(rgba(".$woobizz_categorylist_thumbsbgfullgradient1."),
							   rgba(".$woobizz_categorylist_thumbsbgfullgradient2.")),
								url(".$woobizz_categorylist_thumbsbgimage."!important);
	background-color:".$woobizz_categorylist_thumbsbgcolor."!important;
	background-size:".$woobizz_categorylist_thumbsbgsize."!important;
	background-repeat:".$woobizz_categorylist_thumbsbgrepeat."!important;
	background-position:".$woobizz_categorylist_thumbsbgposition."!important;
	padding:".$woobizz_categorylist_thumbsbgpadding."%!important;
}
/**Product Category List*/
ul.products li.product.product-category{
	background:linear-gradient(rgba(".$woobizz_categorylist_backgroundfullgradient1."!important),
							   rgba(".$woobizz_categorylist_backgroundfullgradient2.")),
								url(".$woobizz_categorylist_backgroundimage."!important);
	background-color:".$woobizz_categorylist_backgroundcolor."!important;
	background-size:".$woobizz_categorylist_backgroundsize."!important;
	background-repeat:".$woobizz_categorylist_backgroundrepeat."!important;
	background-position:".$woobizz_categorylist_backgroundposition."!important;
	box-shadow:".$woobizz_categorylist_shadowfull."!important;
	border:".$woobizz_categorylist_borderfull."!important;
	border-radius:".$woobizz_categorylist_borderradius."px!important;
	margin-top:".$woobizz_categorylist_margintopsize.$woobizz_categorylist_marginunittop."!important;
	margin-bottom:".$woobizz_categorylist_marginbottomsize.$woobizz_categorylist_marginunitbottom."!important;
	padding:".$woobizz_categorylist_paddingfull."!important;
}
.product-category mark.count{
	font-size:".$woobizz_categorylist_countersize."px!important;
	font-weight:".$woobizz_categorylist_counterweight."!important;
    display: ".$woobizz_categorylist_counterhide."!important;
	color:".$woobizz_categorylist_countercolor."!important;
}
ul.products li.product h3 {
	font-size: 1.1em;
	padding: 2% 8% 2% 8%;
}
@media (min-width:1px) and (max-width:450px){
	ul.products li.product {
		width: 97.9%!important;
		float: inherit!important;
		margin-right:1%!important;
		margin-left:1%!important;
		display: inline-table!important;
	}
}
@media (min-width:451px) and (max-width:767px) {
	ul.products li.product {
		width: 46.9%!important;
		float: inherit!important;
		margin-right:1%!important;
		margin-left:1%!important;
		display: inline-table!important;
	}
}
ul.products li.product.product-category h2 {
    padding:".$woobizz_categorylist_titlepaddingfull."!important;
	font-size:".$woobizz_categorylist_titlesize."px!important;
	font-weight:".$woobizz_categorylist_titleweight."!important;
    display: ".$woobizz_categorylist_titlehide."!important;
	color:".$woobizz_categorylist_titlecolor."!important;
}
/**CATEGORY LIST DESCRIPTION */
ul.products li.product p {
    color:".$woobizz_categorylist_descriptioncolor."!important;
	font-weight:".$woobizz_categorylist_descriptionweight."!important;
	font-size:".$woobizz_categorylist_descriptionsize."px!important;
	font-family:arial;
	display:".$woobizz_categorylist_descriptionhide."!important;
}
.woobizz_categorylist_excerpt{
	padding:".$woobizz_categorylist_descriptionpaddingfull."!important;
	display:block;
}
.woobizz_categorylist_description{
	color:".$woobizz_categorylist_descriptioncolor."!important;
	font-weight:".$woobizz_categorylist_descriptionweight."!important;
	font-size:".$woobizz_categorylist_descriptionsize."px!important;
	font-family:arial;
}

.archive h1.page-title {
    text-align: center!important;
	margin:10px;
}

.archive .term-description p {
    display: block;
    margin: 10px;
}
.storefront-sorting select {
    height: 40px;
	border: 1px solid #c3c3c3;
	padding-left: 5px;
}
.storefront-sorting {
	margin-top: 30px;
	margin-bottom: 30px;
	text-align:center;
	
}
header.woocommerce-products-header {
    padding: 0!important;
}
p.woocommerce-result-count {
    margin-top: 4px;
}
.woocommerce-pagination .page-numbers li .page-numbers.current {
    background-color: #8e8e8e;
    color: #ffffff;
}
.woocommerce-pagination .page-numbers li a.page-numbers {
    background-color: #ffffff;
    color: #6d6d6d;
    border: 1px solid #dbdbdb;
	
}	
.woocommerce-pagination .page-numbers li a.page-numbers:hover {
    background-color: #ffffff;
    color: #6d6d6d;
    border: 1px solid #dbdbdb;
}
pagination, .woocommerce-pagination {
    border: none;
    font-size:17px;
}	  
select.orderby {
    margin-top: -5px;    
}

</style>";
}
add_action('wp_head', 'woobizz_categorylist_allcssoptions', 100);
//---------------------------------------------------------------------------- 
//END ALL CSS FUNCTIONS
//----------------------------------------------------------------------------
//SHOW CAT DESCRIPTION
//Hide Description?
function custom_add_product_description ($category) {
		$cat_id        =    $category->term_id;
		$prod_term    =    get_term($cat_id,'product_cat');
		$description=    $prod_term->description;
		echo '<div class=woobizz_categorylist_description>'.$description.'</div>';
}
$woobizz_categorylist_descriptionhide=get_option(WOOBIZZLIST.'_woobizz_categorylist_descriptionhide');
if ($woobizz_categorylist_descriptionhide==0){
	remove_action( 'woocommerce_after_subcategory_title', 'custom_add_product_description', 12);
} elseif($woobizz_categorylist_descriptionhide==1) {
	add_action( 'woocommerce_after_subcategory_title', 'custom_add_product_description', 12);
} else {
	$woobizz_categorylist_descriptionhide="inherit";
}