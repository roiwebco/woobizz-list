<?php

//----------------------------------------------------------------------------
//WOOBIZZ PRODUCT LIST SECTION
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START HEX TO RGB FUNCTION
//----------------------------------------------------------------------------
function woobizz_productlist_hextorgb($hex){
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
function woobizz_productlist_allcssoptions(){
//----------------------------------------------------------------------------
//START BACKGROUND
//----------------------------------------------------------------------------
$woobizz_productlist_backgroundimage= get_option(WOOBIZZLIST.'_woobizz_productlist_backgroundimage');
$woobizz_productlist_backgroundcolor= get_option(WOOBIZZLIST.'_woobizz_productlist_backgroundcolor');
$woobizz_productlist_backgroundsize= get_option(WOOBIZZLIST.'_woobizz_productlist_backgroundsize');
if ($woobizz_productlist_backgroundsize==0){
		$woobizz_productlist_backgroundsize="contain";
	} elseif($woobizz_productlist_backgroundsize==1) {
		$woobizz_productlist_backgroundsize="cover";
	} elseif($woobizz_productlist_backgroundsize==2) {
		$woobizz_productlist_backgroundsize="inherit";
	} elseif($woobizz_productlist_backgroundsize==3) {
		$woobizz_productlist_backgroundsize="initial";
	} else {
		$woobizz_productlist_backgroundsize="initial";
}
$woobizz_productlist_backgroundrepeat= get_option(WOOBIZZLIST.'_woobizz_productlist_backgroundrepeat');
if ($woobizz_productlist_backgroundrepeat==0){
		$woobizz_productlist_backgroundrepeat="no-repeat";
	} elseif($woobizz_productlist_backgroundrepeat==1) {
		$woobizz_productlist_backgroundrepeat="repeat";
	} elseif($woobizz_productlist_backgroundrepeat==2) {
		$woobizz_productlist_backgroundrepeat="repeat-x";
	} elseif($woobizz_productlist_backgroundrepeat==3) {
		$woobizz_productlist_backgroundrepeat="repeat-y";
	} elseif($woobizz_productlist_backgroundrepeat==4) {
		$woobizz_productlist_backgroundrepeat="round";
	} elseif($woobizz_productlist_backgroundrepeat==5) {
		$woobizz_productlist_backgroundrepeat="space";
	} elseif($woobizz_productlist_backgroundrepeat==6) {
		$woobizz_productlist_backgroundrepeat="inherit";
	} elseif($woobizz_productlist_backgroundrepeat==5) {
		$woobizz_productlist_backgroundrepeat="initial";
	} else {
		$woobizz_productlist_backgroundrepeat="initial";
}
$woobizz_productlist_backgroundposition= get_option(WOOBIZZLIST.'_woobizz_productlist_backgroundposition');
if ($woobizz_productlist_backgroundposition==0){
		$woobizz_productlist_backgroundposition="left top";
	} elseif($woobizz_productlist_backgroundposition==1) {
		$woobizz_productlist_backgroundposition="left center";
	} elseif($woobizz_productlist_backgroundposition==2) {
		$woobizz_productlist_backgroundposition="left bottom";
	} elseif($woobizz_productlist_backgroundposition==3) {
		$woobizz_productlist_backgroundposition="right top";
	} elseif($woobizz_productlist_backgroundposition==4) {
		$woobizz_productlist_backgroundposition="right center";
	} elseif($woobizz_productlist_backgroundposition==5) {
		$woobizz_productlist_backgroundposition="right bottom";
	} elseif($woobizz_productlist_backgroundposition==6) {
		$woobizz_productlist_backgroundposition="center top";
	} elseif($woobizz_productlist_backgroundposition==7) {
		$woobizz_productlist_backgroundposition="center center";
	} elseif($woobizz_productlist_backgroundposition==8) {
		$woobizz_productlist_backgroundposition="center bottom";
	} elseif($woobizz_productlist_backgroundposition==9) {
		$woobizz_productlist_backgroundposition="initial";
	} elseif($woobizz_productlist_backgroundposition==10) {
		$woobizz_productlist_backgroundposition="initial";
	} else {
		$woobizz_productlist_backgroundposition="initial";
}
//----------------------------------------------------------------------------
//END BACKGROUND
//----------------------------------------------------------------------------
//----------------------------------------------------------------------------
//START GRADIENTS
//----------------------------------------------------------------------------
$woobizz_productlist_backgroundgradient1= get_option(WOOBIZZLIST.'_woobizz_productlist_backgroundgradient1');
$woobizz_productlist_backgroundgradient1opacity= get_option(WOOBIZZLIST.'_woobizz_productlist_backgroundgradient1opacity');
$trasnform_woobizz_productlist_backgroundgradient1=woobizz_productlist_hextorgb($woobizz_productlist_backgroundgradient1);
$woobizz_productlist_backgroundfullgradient1=$trasnform_woobizz_productlist_backgroundgradient1.",".$woobizz_productlist_backgroundgradient1opacity;
$woobizz_productlist_backgroundgradient2= get_option(WOOBIZZLIST.'_woobizz_productlist_backgroundgradient2');
$woobizz_productlist_backgroundgradient2opacity= get_option(WOOBIZZLIST.'_woobizz_productlist_backgroundgradient2opacity');
$trasnform_woobizz_productlist_backgroundgradient2=woobizz_productlist_hextorgb($woobizz_productlist_backgroundgradient2);
$woobizz_productlist_backgroundfullgradient2=$trasnform_woobizz_productlist_backgroundgradient2.",".$woobizz_productlist_backgroundgradient2opacity;
//----------------------------------------------------------------------------
//END GRADIENTS
//----------------------------------------------------------------------------
//----------------------------------------------------------------------------
//START SHADOWS
//----------------------------------------------------------------------------
$woobizz_productlist_shadowcolor= get_option(WOOBIZZLIST.'_woobizz_productlist_shadowcolor');
$woobizz_productlist_shadowrightdistance= get_option(WOOBIZZLIST.'_woobizz_productlist_shadowrightdistance');
$woobizz_productlist_shadowbottomdistance= get_option(WOOBIZZLIST.'_woobizz_productlist_shadowbottomdistance');
$woobizz_productlist_shadowspread= get_option(WOOBIZZLIST.'_woobizz_productlist_shadowspread');
$woobizz_productlist_shadowsize= get_option(WOOBIZZLIST.'_woobizz_productlist_shadowsize');
$woobizz_productlist_shadowapply= get_option(WOOBIZZLIST.'_woobizz_productlist_shadowapply');
if ($woobizz_productlist_shadowapply==0){
		$woobizz_productlist_shadowfull=$woobizz_productlist_shadowrightdistance."px "
											.$woobizz_productlist_shadowbottomdistance."px "
											.$woobizz_productlist_shadowspread."px "
											.$woobizz_productlist_shadowsize."px "
											.$woobizz_productlist_shadowcolor;
	} elseif($woobizz_productlist_shadowapply==1) {
		$woobizz_productlist_shadowfull="none";
	} else {
		$woobizz_productlist_shadowfull="none";
} 
//----------------------------------------------------------------------------
//END SHADOW
//----------------------------------------------------------------------------
//----------------------------------------------------------------------------
//START BORDER
//----------------------------------------------------------------------------
$woobizz_productlist_bordersize= get_option(WOOBIZZLIST.'_woobizz_productlist_bordersize');
$woobizz_productlist_bordercolor= get_option(WOOBIZZLIST.'_woobizz_productlist_bordercolor');
$woobizz_productlist_borderstyle= get_option(WOOBIZZLIST.'_woobizz_productlist_borderstyle');
if ($woobizz_productlist_borderstyle==0){
		$woobizz_productlist_borderstyle="dotted";
	} elseif($woobizz_productlist_borderstyle==1) {
		$woobizz_productlist_borderstyle="dashed";
	} elseif($woobizz_productlist_borderstyle==2) {
		$woobizz_productlist_borderstyle="solid";
	} elseif($woobizz_productlist_borderstyle==3) {
		$woobizz_productlist_borderstyle="none";
	} else {$woobizz_productlist_borderstyle="none";
}
$woobizz_productlist_borderradius= get_option(WOOBIZZLIST.'_woobizz_productlist_borderradius'); 
$woobizz_productlist_borderfull=$woobizz_productlist_bordersize."px "
								.$woobizz_productlist_borderstyle." "
								.$woobizz_productlist_bordercolor." ";
//----------------------------------------------------------------------------
//END BORDER
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START MARGINS
//----------------------------------------------------------------------------
//Padding Top
$woobizz_productlist_margintopsize= get_option(WOOBIZZLIST.'_woobizz_productlist_margintopsize');
$woobizz_productlist_marginunittop= get_option(WOOBIZZLIST.'_woobizz_productlist_marginunittop');
if ($woobizz_productlist_marginunittop==0){
	$woobizz_productlist_marginunittop="px";
} elseif($woobizz_productlist_marginunittop==1) {
	$woobizz_productlist_marginunittop="%";
} elseif($woobizz_productlist_marginunittop==2) {
	$woobizz_productlist_marginunittop="em";
} elseif($woobizz_productlist_marginunittop==3) {
	$woobizz_productlist_marginunittop="pt";
} else {
	$woobizz_productlist_marginunittop="initial";
} 
//Padding Right
$woobizz_productlist_marginrightsize= get_option(WOOBIZZLIST.'_woobizz_productlist_marginrightsize');
$woobizz_productlist_marginunitright= get_option(WOOBIZZLIST.'_woobizz_productlist_marginunitright');
if ($woobizz_productlist_marginunitright==0){
	$woobizz_productlist_marginunitright="px";
} elseif($woobizz_productlist_marginunitright==1) {
	$woobizz_productlist_marginunitright="%";
} elseif($woobizz_productlist_marginunitright==2) {
	$woobizz_productlist_marginunitright="em";
} elseif($woobizz_productlist_marginunitright==3) {
	$woobizz_productlist_marginunitright="pt";
} else {
	$woobizz_productlist_marginunitright="initial";
}	
//Padding Bottom
$woobizz_productlist_marginbottomsize= get_option(WOOBIZZLIST.'_woobizz_productlist_marginbottomsize');
$woobizz_productlist_marginunitbottom= get_option(WOOBIZZLIST.'_woobizz_productlist_marginunitbottom');
if ($woobizz_productlist_marginunitbottom==0){
	$woobizz_productlist_marginunitbottom="px";
} elseif($woobizz_productlist_marginunitbottom==1) {
	$woobizz_productlist_marginunitbottom="%";
} elseif($woobizz_productlist_marginunitbottom==2) {
	$woobizz_productlist_marginunitbottom="em";
} elseif($woobizz_productlist_marginunitbottom==3) {
	$woobizz_productlist_marginunitbottom="pt";
} else {
	$woobizz_productlist_marginunitbottom="initial";
}	
//Padding Left
$woobizz_productlist_marginleftsize= get_option(WOOBIZZLIST.'_woobizz_productlist_marginleftsize');
$woobizz_productlist_marginunitleft= get_option(WOOBIZZLIST.'_woobizz_productlist_marginunitleft');
if ($woobizz_productlist_marginunitleft==0){
	$woobizz_productlist_marginunitleft="px";
} elseif($woobizz_productlist_marginunitleft==1) {
	$woobizz_productlist_marginunitleft="%";
} elseif($woobizz_productlist_marginunitleft==2) {
	$woobizz_productlist_marginunitleft="em";
} elseif($woobizz_productlist_marginunitleft==3) {
	$woobizz_productlist_marginunitleft="pt";
} else {
	$woobizz_productlist_marginunitleft="initial";
}
$woobizz_productlist_marginfull=$woobizz_productlist_margintopsize.$woobizz_productlist_marginunittop." "
							   .$woobizz_productlist_marginrightsize.$woobizz_productlist_marginunitright." "
							   .$woobizz_productlist_marginbottomsize.$woobizz_productlist_marginunitbottom." "
							   .$woobizz_productlist_marginleftsize.$woobizz_productlist_marginunitleft." ";							   	
//---------------------------------------------------------------------------- 
//END MARGIN
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START PADDING
//----------------------------------------------------------------------------
//Padding Top
$woobizz_productlist_paddingtopsize= get_option(WOOBIZZLIST.'_woobizz_productlist_paddingtopsize');
$woobizz_productlist_paddingunittop= get_option(WOOBIZZLIST.'_woobizz_productlist_paddingunittop');
if ($woobizz_productlist_paddingunittop==0){
	$woobizz_productlist_paddingunittop="px";
} elseif($woobizz_productlist_paddingunittop==1) {
	$woobizz_productlist_paddingunittop="%";
} elseif($woobizz_productlist_paddingunittop==2) {
	$woobizz_productlist_paddingunittop="em";
} elseif($woobizz_productlist_paddingunittop==3) {
	$woobizz_productlist_paddingunittop="pt";
} else {
	$woobizz_productlist_paddingunittop="initial";
} 
//Padding Right
$woobizz_productlist_paddingrightsize= get_option(WOOBIZZLIST.'_woobizz_productlist_paddingrightsize');
$woobizz_productlist_paddingunitright= get_option(WOOBIZZLIST.'_woobizz_productlist_paddingunitright');
if ($woobizz_productlist_paddingunitright==0){
	$woobizz_productlist_paddingunitright="px";
} elseif($woobizz_productlist_paddingunitright==1) {
	$woobizz_productlist_paddingunitright="%";
} elseif($woobizz_productlist_paddingunitright==2) {
	$woobizz_productlist_paddingunitright="em";
} elseif($woobizz_productlist_paddingunitright==3) {
	$woobizz_productlist_paddingunitright="pt";
} else {
	$woobizz_productlist_paddingunitright="initial";
}	
//Padding Bottom
$woobizz_productlist_paddingbottomsize= get_option(WOOBIZZLIST.'_woobizz_productlist_paddingbottomsize');
$woobizz_productlist_paddingunitbottom= get_option(WOOBIZZLIST.'_woobizz_productlist_paddingunitbottom');
if ($woobizz_productlist_paddingunitbottom==0){
	$woobizz_productlist_paddingunitbottom="px";
} elseif($woobizz_productlist_paddingunitbottom==1) {
	$woobizz_productlist_paddingunitbottom="%";
} elseif($woobizz_productlist_paddingunitbottom==2) {
	$woobizz_productlist_paddingunitbottom="em";
} elseif($woobizz_productlist_paddingunitbottom==3) {
	$woobizz_productlist_paddingunitbottom="pt";
} else {
	$woobizz_productlist_paddingunitbottom="initial";
}	
//Padding Left
$woobizz_productlist_paddingleftsize= get_option(WOOBIZZLIST.'_woobizz_productlist_paddingleftsize');
$woobizz_productlist_paddingunitleft= get_option(WOOBIZZLIST.'_woobizz_productlist_paddingunitleft');
if ($woobizz_productlist_paddingunitleft==0){
	$woobizz_productlist_paddingunitleft="px";
} elseif($woobizz_productlist_paddingunitleft==1) {
	$woobizz_productlist_paddingunitleft="%";
} elseif($woobizz_productlist_paddingunitleft==2) {
	$woobizz_productlist_paddingunitleft="em";
} elseif($woobizz_productlist_paddingunitleft==3) {
	$woobizz_productlist_paddingunitleft="pt";
} else {
	$woobizz_productlist_paddingunitleft="initial";
}
$woobizz_productlist_paddingfull=$woobizz_productlist_paddingtopsize.$woobizz_productlist_paddingunittop." "
							   .$woobizz_productlist_paddingrightsize.$woobizz_productlist_paddingunitright." "
							   .$woobizz_productlist_paddingbottomsize.$woobizz_productlist_paddingunitbottom." "
							   .$woobizz_productlist_paddingleftsize.$woobizz_productlist_paddingunitleft." ";							   	
//---------------------------------------------------------------------------- 
//END PADDING
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START PRODUCT LIST TITLE
//----------------------------------------------------------------------------
//Hide Title?
$woobizz_productlist_titlehide=get_option(WOOBIZZLIST.'_woobizz_productlist_titlehide');
if ($woobizz_productlist_titlehide==0){
	$woobizz_productlist_titlehide="none";
} elseif($woobizz_productlist_titlehide==1) {
	$woobizz_productlist_titlehide="inherit";
} else {
	$woobizz_productlist_titlehide="inherit";
}
//Title Size
$woobizz_productlist_titlesize=get_option(WOOBIZZLIST.'_woobizz_productlist_titlesize');
//Title Color
$woobizz_productlist_titlecolor=get_option(WOOBIZZLIST.'_woobizz_productlist_titlecolor');
//Title Weight
$woobizz_productlist_titleweight=get_option(WOOBIZZLIST.'_woobizz_productlist_titleweight');
if ($woobizz_productlist_titleweight==0){
		$woobizz_productlist_titleweight="100";
	} elseif($woobizz_productlist_titleweight==1) {
		$woobizz_productlist_titleweight="200";
	} elseif($woobizz_productlist_titleweight==2) {
		$woobizz_productlist_titleweight="300";
	} elseif($woobizz_productlist_titleweight==3) {
		$woobizz_productlist_titleweight="400";
	} elseif($woobizz_productlist_titleweight==4) {
		$woobizz_productlist_titleweight="500";
	} elseif($woobizz_productlist_titleweight==5) {
		$woobizz_productlist_titleweight="600";
	} elseif($woobizz_productlist_titleweight==6) {
		$woobizz_productlist_titleweight="700";
	} else {
		$woobizz_productlist_titleweight="400";
	}
//Padding Top
$woobizz_productlist_titlepaddingtopsize= get_option(WOOBIZZLIST.'_woobizz_productlist_titlepaddingtopsize');
$woobizz_productlist_titlepaddingunittop= get_option(WOOBIZZLIST.'_woobizz_productlist_titlepaddingunittop');
if ($woobizz_productlist_titlepaddingunittop==0){
	$woobizz_productlist_titlepaddingunittop="px";
} elseif($woobizz_productlist_titlepaddingunittop==1) {
	$woobizz_productlist_titlepaddingunittop="%";
} elseif($woobizz_productlist_titlepaddingunittop==2) {
	$woobizz_productlist_titlepaddingunittop="em";
} elseif($woobizz_productlist_titlepaddingunittop==3) {
	$woobizz_productlist_titlepaddingunittop="pt";
} else {
	$woobizz_productlist_titlepaddingunittop="initial";
} 
//Padding Right
$woobizz_productlist_titlepaddingrightsize= get_option(WOOBIZZLIST.'_woobizz_productlist_titlepaddingrightsize');
$woobizz_productlist_titlepaddingunitright= get_option(WOOBIZZLIST.'_woobizz_productlist_titlepaddingunitright');
if ($woobizz_productlist_titlepaddingunitright==0){
	$woobizz_productlist_titlepaddingunitright="px";
} elseif($woobizz_productlist_titlepaddingunitright==1) {
	$woobizz_productlist_titlepaddingunitright="%";
} elseif($woobizz_productlist_titlepaddingunitright==2) {
	$woobizz_productlist_titlepaddingunitright="em";
} elseif($woobizz_productlist_titlepaddingunitright==3) {
	$woobizz_productlist_titlepaddingunitright="pt";
} else {
	$woobizz_productlist_titlepaddingunitright="initial";
}	
//Padding Bottom
$woobizz_productlist_titlepaddingbottomsize= get_option(WOOBIZZLIST.'_woobizz_productlist_titlepaddingbottomsize');
$woobizz_productlist_titlepaddingunitbottom= get_option(WOOBIZZLIST.'_woobizz_productlist_titlepaddingunitbottom');
if ($woobizz_productlist_titlepaddingunitbottom==0){
	$woobizz_productlist_titlepaddingunitbottom="px";
} elseif($woobizz_productlist_titlepaddingunitbottom==1) {
	$woobizz_productlist_titlepaddingunitbottom="%";
} elseif($woobizz_productlist_titlepaddingunitbottom==2) {
	$woobizz_productlist_titlepaddingunitbottom="em";
} elseif($woobizz_productlist_titlepaddingunitbottom==3) {
	$woobizz_productlist_titlepaddingunitbottom="pt";
} else {
	$woobizz_productlist_titlepaddingunitbottom="initial";
}	
//Padding Left
$woobizz_productlist_titlepaddingleftsize= get_option(WOOBIZZLIST.'_woobizz_productlist_titlepaddingleftsize');
$woobizz_productlist_titlepaddingunitleft= get_option(WOOBIZZLIST.'_woobizz_productlist_titlepaddingunitleft');
if ($woobizz_productlist_titlepaddingunitleft==0){
	$woobizz_productlist_titlepaddingunitleft="px";
} elseif($woobizz_productlist_titlepaddingunitleft==1) {
	$woobizz_productlist_titlepaddingunitleft="%";
} elseif($woobizz_productlist_titlepaddingunitleft==2) {
	$woobizz_productlist_titlepaddingunitleft="em";
} elseif($woobizz_productlist_titlepaddingunitleft==3) {
	$woobizz_productlist_titlepaddingunitleft="pt";
} else {
	$woobizz_productlist_titlepaddingunitleft="initial";
}
$woobizz_productlist_titlepaddingfull=$woobizz_productlist_titlepaddingtopsize.$woobizz_productlist_titlepaddingunittop." "
							   .$woobizz_productlist_titlepaddingrightsize.$woobizz_productlist_titlepaddingunitright." "
							   .$woobizz_productlist_titlepaddingbottomsize.$woobizz_productlist_titlepaddingunitbottom." "
							   .$woobizz_productlist_titlepaddingleftsize.$woobizz_productlist_titlepaddingunitleft." ";
//---------------------------------------------------------------------------- 
//END PRODUCT LIST TITLE
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START PRODUCT LIST DESCRIPTION
//----------------------------------------------------------------------------
//Hide Description?
$woobizz_productlist_descriptionhide=get_option(WOOBIZZLIST.'_woobizz_productlist_descriptionhide');
if ($woobizz_productlist_descriptionhide==0){
	$woobizz_productlist_descriptionhide="none";
} elseif($woobizz_productlist_descriptionhide==1) {
	$woobizz_productlist_descriptionhide="inherit";
} else {
	$woobizz_productlist_descriptionhide="inherit";
}
//Description Size
$woobizz_productlist_descriptionsize=get_option(WOOBIZZLIST.'_woobizz_productlist_descriptionsize');
//Description Color
$woobizz_productlist_descriptioncolor=get_option(WOOBIZZLIST.'_woobizz_productlist_descriptioncolor');
//Description Weight
$woobizz_productlist_descriptionweight=get_option(WOOBIZZLIST.'_woobizz_productlist_descriptionweight');
if ($woobizz_productlist_descriptionweight==0){
		$woobizz_productlist_descriptionweight="100";
	} elseif($woobizz_productlist_descriptionweight==1) {
		$woobizz_productlist_descriptionweight="200";
	} elseif($woobizz_productlist_descriptionweight==2) {
		$woobizz_productlist_descriptionweight="300";
	} elseif($woobizz_productlist_descriptionweight==3) {
		$woobizz_productlist_descriptionweight="400";
	} elseif($woobizz_productlist_descriptionweight==4) {
		$woobizz_productlist_descriptionweight="500";
	} elseif($woobizz_productlist_descriptionweight==5) {
		$woobizz_productlist_descriptionweight="600";
	} elseif($woobizz_productlist_descriptionweight==6) {
		$woobizz_productlist_descriptionweight="700";
	} else {$woobizz_productlist_descriptionweight="400";
}
//Padding Top
$woobizz_productlist_descriptionpaddingtopsize= get_option(WOOBIZZLIST.'_woobizz_productlist_descriptionpaddingtopsize');
$woobizz_productlist_descriptionpaddingunittop= get_option(WOOBIZZLIST.'_woobizz_productlist_descriptionpaddingunittop');
if ($woobizz_productlist_descriptionpaddingunittop==0){
	$woobizz_productlist_descriptionpaddingunittop="px";
} elseif($woobizz_productlist_descriptionpaddingunittop==1) {
	$woobizz_productlist_descriptionpaddingunittop="%";
} elseif($woobizz_productlist_descriptionpaddingunittop==2) {
	$woobizz_productlist_descriptionpaddingunittop="em";
} elseif($woobizz_productlist_descriptionpaddingunittop==3) {
	$woobizz_productlist_descriptionpaddingunittop="pt";
} else {
	$woobizz_productlist_descriptionpaddingunittop="initial";
} 
//Padding Right
$woobizz_productlist_descriptionpaddingrightsize= get_option(WOOBIZZLIST.'_woobizz_productlist_descriptionpaddingrightsize');
$woobizz_productlist_descriptionpaddingunitright= get_option(WOOBIZZLIST.'_woobizz_productlist_descriptionpaddingunitright');
if ($woobizz_productlist_descriptionpaddingunitright==0){
	$woobizz_productlist_descriptionpaddingunitright="px";
} elseif($woobizz_productlist_descriptionpaddingunitright==1) {
	$woobizz_productlist_descriptionpaddingunitright="%";
} elseif($woobizz_productlist_descriptionpaddingunitright==2) {
	$woobizz_productlist_descriptionpaddingunitright="em";
} elseif($woobizz_productlist_descriptionpaddingunitright==3) {
	$woobizz_productlist_descriptionpaddingunitright="pt";
} else {
	$woobizz_productlist_descriptionpaddingunitright="initial";
}	
//Padding Bottom
$woobizz_productlist_descriptionpaddingbottomsize= get_option(WOOBIZZLIST.'_woobizz_productlist_descriptionpaddingbottomsize');
$woobizz_productlist_descriptionpaddingunitbottom= get_option(WOOBIZZLIST.'_woobizz_productlist_descriptionpaddingunitbottom');
if ($woobizz_productlist_descriptionpaddingunitbottom==0){
	$woobizz_productlist_descriptionpaddingunitbottom="px";
} elseif($woobizz_productlist_descriptionpaddingunitbottom==1) {
	$woobizz_productlist_descriptionpaddingunitbottom="%";
} elseif($woobizz_productlist_descriptionpaddingunitbottom==2) {
	$woobizz_productlist_descriptionpaddingunitbottom="em";
} elseif($woobizz_productlist_descriptionpaddingunitbottom==3) {
	$woobizz_productlist_descriptionpaddingunitbottom="pt";
} else {
	$woobizz_productlist_descriptionpaddingunitbottom="initial";
}	
//Padding Left
$woobizz_productlist_descriptionpaddingleftsize= get_option(WOOBIZZLIST.'_woobizz_productlist_descriptionpaddingleftsize');
$woobizz_productlist_descriptionpaddingunitleft= get_option(WOOBIZZLIST.'_woobizz_productlist_descriptionpaddingunitleft');
if ($woobizz_productlist_descriptionpaddingunitleft==0){
	$woobizz_productlist_descriptionpaddingunitleft="px";
} elseif($woobizz_productlist_descriptionpaddingunitleft==1) {
	$woobizz_productlist_descriptionpaddingunitleft="%";
} elseif($woobizz_productlist_descriptionpaddingunitleft==2) {
	$woobizz_productlist_descriptionpaddingunitleft="em";
} elseif($woobizz_productlist_descriptionpaddingunitleft==3) {
	$woobizz_productlist_descriptionpaddingunitleft="pt";
} else {
	$woobizz_productlist_descriptionpaddingunitleft="initial";
}
$woobizz_productlist_descriptionpaddingfull=$woobizz_productlist_descriptionpaddingtopsize.$woobizz_productlist_descriptionpaddingunittop." "
							   .$woobizz_productlist_descriptionpaddingrightsize.$woobizz_productlist_descriptionpaddingunitright." "
							   .$woobizz_productlist_descriptionpaddingbottomsize.$woobizz_productlist_descriptionpaddingunitbottom." "
							   .$woobizz_productlist_descriptionpaddingleftsize.$woobizz_productlist_descriptionpaddingunitleft." ";
//---------------------------------------------------------------------------- 
//END PRODUCT LIST DESCRIPTION
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START PRODUCT LIST RATING
//----------------------------------------------------------------------------
//Hide Ratings?
$woobizz_productlist_hiderating=get_option(WOOBIZZLIST.'_woobizz_productlist_hiderating');
if ($woobizz_productlist_hiderating==0){
	$woobizz_productlist_hiderating="none";
} elseif($woobizz_productlist_hiderating==1) {
	$woobizz_productlist_hiderating="inherit";
} else {
	$woobizz_productlist_hiderating="inherit";
}
$woobizz_productlist_ratingsize = get_option(WOOBIZZLIST.'_woobizz_productlist_ratingsize');
$woobizz_productlist_ratingpcolor = get_option(WOOBIZZLIST.'_woobizz_productlist_ratingpcolor');
$woobizz_productlist_ratingncolor = get_option(WOOBIZZLIST.'_woobizz_productlist_ratingncolor');
//---------------------------------------------------------------------------- 
//END PRODUCT LIST RATING
//----------------------------------------------------------------------------
//Hide Title?
$woobizz_productlist_titlehide=get_option(WOOBIZZLIST.'_woobizz_productlist_titlehide');
if ($woobizz_productlist_titlehide==0){
	$woobizz_productlist_titlehide="none";
} elseif($woobizz_productlist_titlehide==1) {
	$woobizz_productlist_titlehide="inherit";
} else {
	$woobizz_productlist_titlehide="inherit";
}
//Title Size
$woobizz_productlist_titlesize=get_option(WOOBIZZLIST.'_woobizz_productlist_titlesize');
//Title Color
$woobizz_productlist_titlecolor=get_option(WOOBIZZLIST.'_woobizz_productlist_titlecolor');
//Title Weight
$woobizz_productlist_titleweight=get_option(WOOBIZZLIST.'_woobizz_productlist_titleweight');
if ($woobizz_productlist_titleweight==0){
		$woobizz_productlist_titleweight="100";
	} elseif($woobizz_productlist_titleweight==1) {
		$woobizz_productlist_titleweight="200";
	} elseif($woobizz_productlist_titleweight==2) {
		$woobizz_productlist_titleweight="300";
	} elseif($woobizz_productlist_titleweight==3) {
		$woobizz_productlist_titleweight="400";
	} elseif($woobizz_productlist_titleweight==4) {
		$woobizz_productlist_titleweight="500";
	} elseif($woobizz_productlist_titleweight==5) {
		$woobizz_productlist_titleweight="600";
	} elseif($woobizz_productlist_titleweight==6) {
		$woobizz_productlist_titleweight="700";
	} else {$woobizz_productlist_titleweight="400";
}
//---------------------------------------------------------------------------- 
//END PRODUCT LIST RATING
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START PRODUCT LIST PRICE
//----------------------------------------------------------------------------
//Hide regular price?
$woobizz_productlist_regularpricehide=get_option(WOOBIZZLIST.'_woobizz_productlist_regularpricehide');
if ($woobizz_productlist_regularpricehide==0){
	$woobizz_productlist_regularpricehide="none";
	$woobizz_productlist_regularpricehideall="none";
} elseif($woobizz_productlist_regularpricehide==1) {
	$woobizz_productlist_regularpricehide="inline-block";
	$woobizz_productlist_regularpricehideall="block";
} else {
	$woobizz_productlist_regularpricehide="inline-block";
}
//Regular price title
$woobizz_productlist_regularpricesize=get_option(WOOBIZZLIST.'_woobizz_productlist_regularpricesize');
//Regular price color
$woobizz_productlist_regularpricecolor=get_option(WOOBIZZLIST.'_woobizz_productlist_regularpricecolor');
//Regular price weight
$woobizz_productlist_regularpriceweight=get_option(WOOBIZZLIST.'_woobizz_productlist_regularpriceweight');
if ($woobizz_productlist_regularpriceweight==0){
		$woobizz_productlist_regularpriceweight="100";
	} elseif($woobizz_productlist_regularpriceweight==1) {
		$woobizz_productlist_regularpriceweight="200";
	} elseif($woobizz_productlist_regularpriceweight==2) {
		$woobizz_productlist_regularpriceweight="300";
	} elseif($woobizz_productlist_regularpriceweight==3) {
		$woobizz_productlist_regularpriceweight="400";
	} elseif($woobizz_productlist_regularpriceweight==4) {
		$woobizz_productlist_regularpriceweight="500";
	} elseif($woobizz_productlist_regularpriceweight==5) {
		$woobizz_productlist_regularpriceweight="600";
	} elseif($woobizz_productlist_regularpriceweight==6) {
		$woobizz_productlist_regularpriceweight="700";
	} else {$woobizz_productlist_regularpriceweight="400";
}
//Hide sale price?
$woobizz_productlist_salepricehide=get_option(WOOBIZZLIST.'_woobizz_productlist_salepricehide');
if ($woobizz_productlist_salepricehide==0){
	$woobizz_productlist_salepricehide="none";
} elseif($woobizz_productlist_salepricehide==1) {
	$woobizz_productlist_salepricehide="inline-block";
} else {
	$woobizz_productlist_salepricehide="inline-block";
}
//Sale price title
$woobizz_productlist_salepricesize=get_option(WOOBIZZLIST.'_woobizz_productlist_salepricesize');
//Sale price color
$woobizz_productlist_salepricecolor=get_option(WOOBIZZLIST.'_woobizz_productlist_salepricecolor');
//Sale price weight
$woobizz_productlist_salepriceweight=get_option(WOOBIZZLIST.'_woobizz_productlist_salepriceweight');
if ($woobizz_productlist_salepriceweight==0){
		$woobizz_productlist_salepriceweight="100";
	} elseif($woobizz_productlist_salepriceweight==1) {
		$woobizz_productlist_salepriceweight="200";
	} elseif($woobizz_productlist_salepriceweight==2) {
		$woobizz_productlist_salepriceweight="300";
	} elseif($woobizz_productlist_salepriceweight==3) {
		$woobizz_productlist_salepriceweight="400";
	} elseif($woobizz_productlist_salepriceweight==4) {
		$woobizz_productlist_salepriceweight="500";
	} elseif($woobizz_productlist_salepriceweight==5) {
		$woobizz_productlist_salepriceweight="600";
	} elseif($woobizz_productlist_salepriceweight==6) {
		$woobizz_productlist_salepriceweight="700";
	} else {$woobizz_productlist_salepriceweight="400";
}
//---------------------------------------------------------------------------- 
//END PRODUCT LIST PRICE
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START 1.3.1 READ MORE BUTTONS
//----------------------------------------------------------------------------
$woobizz_productlist_readmorehide=get_option(WOOBIZZLIST.'_woobizz_productlist_readmorehide');
if ($woobizz_productlist_readmorehide==0){
	$woobizz_productlist_readmorehide="none";
} elseif($woobizz_productlist_readmorehide==1) {
	$woobizz_productlist_readmorehide="inline-block";
} else {
	$woobizz_productlist_readmorehide="inline-block";
}
$woobizz_productlist_readmoretextcolor=get_option(WOOBIZZLIST.'_woobizz_productlist_readmoretextcolor');
$woobizz_productlist_readmorebackgroundcolor=get_option(WOOBIZZLIST.'_woobizz_productlist_readmorebackgroundcolor');
$woobizz_productlist_readmorebordersize=get_option(WOOBIZZLIST.'_woobizz_productlist_readmorebordersize');
//---------------------------------------------------------------------------- 
//END 1.3.1 READ MORE BUTTONS
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START 1.3.2 ADD TO CART BUTTONS
//----------------------------------------------------------------------------
$woobizz_productlist_addtocarthide=get_option(WOOBIZZLIST.'_woobizz_productlist_addtocarthide');
if ($woobizz_productlist_addtocarthide==0){
	$woobizz_productlist_addtocarthide="none";
} elseif($woobizz_productlist_addtocarthide==1) {
	$woobizz_productlist_addtocarthide="inline-block";
} else {
	$woobizz_productlist_addtocarthide="inline-block";
}
$woobizz_productlist_addtocarttextcolor=get_option(WOOBIZZLIST.'_woobizz_productlist_addtocarttextcolor');
$woobizz_productlist_addtocartbackgroundcolor=get_option(WOOBIZZLIST.'_woobizz_productlist_addtocartbackgroundcolor');
$woobizz_productlist_addtocartbordersize=get_option(WOOBIZZLIST.'_woobizz_productlist_addtocartbordersize');
//---------------------------------------------------------------------------- 
//END 1.3.2 ADD TO CART BUTTONS
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START 1.3.3 SEE OPTIONS BUTTONS
//----------------------------------------------------------------------------
$woobizz_productlist_seeoptionshide=get_option(WOOBIZZLIST.'_woobizz_productlist_seeoptionshide');
if ($woobizz_productlist_seeoptionshide==0){
	$woobizz_productlist_seeoptionshide="none";
} elseif($woobizz_productlist_seeoptionshide==1) {
	$woobizz_productlist_seeoptionshide="inline-block";
} else {
	$woobizz_productlist_seeoptionshide="inline-block";
}
$woobizz_productlist_seeoptionstextcolor=get_option(WOOBIZZLIST.'_woobizz_productlist_seeoptionstextcolor');
$woobizz_productlist_seeoptionsbackgroundcolor=get_option(WOOBIZZLIST.'_woobizz_productlist_seeoptionsbackgroundcolor');
$woobizz_productlist_seeoptionsbordersize=get_option(WOOBIZZLIST.'_woobizz_productlist_seeoptionsbordersize');
//---------------------------------------------------------------------------- 
//END 1.3.3 SEE OPTIONS BUTTONS
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START 1.3.2 SEE CART BUTTONS
//----------------------------------------------------------------------------
$woobizz_productlist_seecarthide=get_option(WOOBIZZLIST.'_woobizz_productlist_seecarthide');
if ($woobizz_productlist_seecarthide==0){
	$woobizz_productlist_seecarthide="none";
} elseif($woobizz_productlist_seecarthide==1) {
	$woobizz_productlist_seecarthide="inline-block";
} else {
	$woobizz_productlist_seecarthide="inline-block";
}
$woobizz_productlist_seecarttextcolor=get_option(WOOBIZZLIST.'_woobizz_productlist_seecarttextcolor');
$woobizz_productlist_seecartbackgroundcolor=get_option(WOOBIZZLIST.'_woobizz_productlist_seecartbackgroundcolor');
$woobizz_productlist_seecartbordersize=get_option(WOOBIZZLIST.'_woobizz_productlist_seecartbordersize');
//---------------------------------------------------------------------------- 
//END 1.3.1 SEE CART BUTTONS
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START 1.3.3 BUTTONS SHADOWS
//----------------------------------------------------------------------------
$woobizz_productlist_buttonshadowcolor= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonshadowcolor');
$woobizz_productlist_buttonshadowrightdistance= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonshadowrightdistance');
$woobizz_productlist_buttonshadowbottomdistance= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonshadowbottomdistance');
$woobizz_productlist_buttonshadowspread= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonshadowspread');
$woobizz_productlist_buttonshadowsize= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonshadowsize');
$woobizz_productlist_buttonshadowapply= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonshadowapply');
if ($woobizz_productlist_buttonshadowapply==0){
		$woobizz_productlist_buttonshadowfull=$woobizz_productlist_buttonshadowrightdistance."px "
											.$woobizz_productlist_buttonshadowbottomdistance."px "
											.$woobizz_productlist_buttonshadowspread."px "
											.$woobizz_productlist_buttonshadowsize."px "
											.$woobizz_productlist_buttonshadowcolor;
	} elseif($woobizz_productlist_buttonshadowapply==1) {
		$woobizz_productlist_buttonshadowfull="none";
	} else {
		$woobizz_productlist_buttonshadowfull="none";
} 
//---------------------------------------------------------------------------- 
//END 1.3.3 BUTTONS SHADOWS
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START 1.3.4 BUTTONS BORDER
//----------------------------------------------------------------------------
$woobizz_productlist_buttonbordersize= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonbordersize');
$woobizz_productlist_buttonbordercolor= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonbordercolor');
$woobizz_productlist_buttonborderstyle= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonborderstyle');
if ($woobizz_productlist_buttonborderstyle==0){
		$woobizz_productlist_buttonborderstyle="dotted";
	} elseif($woobizz_productlist_buttonborderstyle==1) {
		$woobizz_productlist_buttonborderstyle="dashed";
	} elseif($woobizz_productlist_buttonborderstyle==2) {
		$woobizz_productlist_buttonborderstyle="solid";
	} elseif($woobizz_productlist_buttonborderstyle==3) {
		$woobizz_productlist_buttonborderstyle="none";
	} else {$woobizz_productlist_buttonborderstyle="none";
}
$woobizz_productlist_buttonborderradius= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonborderradius'); 
$woobizz_productlist_buttonborderfull=$woobizz_productlist_buttonbordersize."px "
								.$woobizz_productlist_buttonborderstyle." "
								.$woobizz_productlist_buttonbordercolor." ";
//---------------------------------------------------------------------------- 
//END 1.3.4. BUTTONS BORDER
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START 1.3.5 BUTTONS MARGINS
//----------------------------------------------------------------------------
//Margin Top
$woobizz_productlist_buttonmargintopsize= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonmargintopsize');
$woobizz_productlist_buttonmarginunittop= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonmarginunittop');
if ($woobizz_productlist_buttonmarginunittop==0){
	$woobizz_productlist_buttonmarginunittop="px";
} elseif($woobizz_productlist_buttonmarginunittop==1) {
	$woobizz_productlist_buttonmarginunittop="%";
} elseif($woobizz_productlist_buttonmarginunittop==2) {
	$woobizz_productlist_buttonmarginunittop="em";
} elseif($woobizz_productlist_buttonmarginunittop==3) {
	$woobizz_productlist_buttonmarginunittop="pt";
} else {
	$woobizz_productlist_buttonmarginunittop="initial";
} 
//Margin Right
$woobizz_productlist_buttonmarginrightsize= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonmarginrightsize');
$woobizz_productlist_buttonmarginunitright= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonmarginunitright');
if ($woobizz_productlist_buttonmarginunitright==0){
	$woobizz_productlist_buttonmarginunitright="px";
} elseif($woobizz_productlist_buttonmarginunitright==1) {
	$woobizz_productlist_buttonmarginunitright="%";
} elseif($woobizz_productlist_buttonmarginunitright==2) {
	$woobizz_productlist_buttonmarginunitright="em";
} elseif($woobizz_productlist_buttonmarginunitright==3) {
	$woobizz_productlist_buttonmarginunitright="pt";
} elseif($woobizz_productlist_buttonmarginunitright==4) {
	$woobizz_productlist_buttonmarginunitright="auto";
	$woobizz_productlist_buttonmarginrightsize="";
}else {
	$woobizz_productlist_buttonmarginunitright="initial";
}	
//Margin Bottom
$woobizz_productlist_buttonmarginbottomsize= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonmarginbottomsize');
$woobizz_productlist_buttonmarginunitbottom= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonmarginunitbottom');
if ($woobizz_productlist_buttonmarginunitbottom==0){
	$woobizz_productlist_buttonmarginunitbottom="px";
} elseif($woobizz_productlist_buttonmarginunitbottom==1) {
	$woobizz_productlist_buttonmarginunitbottom="%";
} elseif($woobizz_productlist_buttonmarginunitbottom==2) {
	$woobizz_productlist_buttonmarginunitbottom="em";
} elseif($woobizz_productlist_buttonmarginunitbottom==3) {
	$woobizz_productlist_buttonmarginunitbottom="pt";
} else {
	$woobizz_productlist_buttonmarginunitbottom="initial";
}	
//Margin Left
$woobizz_productlist_buttonmarginleftsize= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonmarginleftsize');
$woobizz_productlist_buttonmarginunitleft= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonmarginunitleft');
if ($woobizz_productlist_buttonmarginunitleft==0){
	$woobizz_productlist_buttonmarginunitleft="px";
} elseif($woobizz_productlist_buttonmarginunitleft==1) {
	$woobizz_productlist_buttonmarginunitleft="%";
} elseif($woobizz_productlist_buttonmarginunitleft==2) {
	$woobizz_productlist_buttonmarginunitleft="em";
} elseif($woobizz_productlist_buttonmarginunitleft==3) {
	$woobizz_productlist_buttonmarginunitleft="pt";
} elseif($woobizz_productlist_buttonmarginunitleft==4) {
	$woobizz_productlist_buttonmarginunitleft="auto";
	$woobizz_productlist_buttonmarginleftsize="";
} else {
	$woobizz_productlist_buttonmarginunitleft="initial";
}
$woobizz_productlist_buttonmarginfull=$woobizz_productlist_buttonmargintopsize.$woobizz_productlist_buttonmarginunittop." "
							   .$woobizz_productlist_buttonmarginrightsize.$woobizz_productlist_buttonmarginunitright." "
							   .$woobizz_productlist_buttonmarginbottomsize.$woobizz_productlist_buttonmarginunitbottom." "
							   .$woobizz_productlist_buttonmarginleftsize.$woobizz_productlist_buttonmarginunitleft." ";	
//---------------------------------------------------------------------------- 
//END 1.3.5 BUTTONS MARGINS
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START 1.3.6 BUTTONS PADDINGS
//----------------------------------------------------------------------------
//Padding Top
$woobizz_productlist_buttonpaddingtopsize= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonpaddingtopsize');
$woobizz_productlist_buttonpaddingunittop= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonpaddingunittop');
if ($woobizz_productlist_buttonpaddingunittop==0){
	$woobizz_productlist_buttonpaddingunittop="px";
} elseif($woobizz_productlist_buttonpaddingunittop==1) {
	$woobizz_productlist_buttonpaddingunittop="%";
} elseif($woobizz_productlist_buttonpaddingunittop==2) {
	$woobizz_productlist_buttonpaddingunittop="em";
} elseif($woobizz_productlist_buttonpaddingunittop==3) {
	$woobizz_productlist_buttonpaddingunittop="pt";
} else {
	$woobizz_productlist_buttonpaddingunittop="initial";
} 
//Padding Right
$woobizz_productlist_buttonpaddingrightsize= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonpaddingrightsize');
$woobizz_productlist_buttonpaddingunitright= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonpaddingunitright');
if ($woobizz_productlist_buttonpaddingunitright==0){
	$woobizz_productlist_buttonpaddingunitright="px";
} elseif($woobizz_productlist_buttonpaddingunitright==1) {
	$woobizz_productlist_buttonpaddingunitright="%";
} elseif($woobizz_productlist_buttonpaddingunitright==2) {
	$woobizz_productlist_buttonpaddingunitright="em";
} elseif($woobizz_productlist_buttonpaddingunitright==3) {
	$woobizz_productlist_buttonpaddingunitright="pt";
} else {
	$woobizz_productlist_buttonpaddingunitright="initial";
}	
//Padding Bottom
$woobizz_productlist_buttonpaddingbottomsize= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonpaddingbottomsize');
$woobizz_productlist_buttonpaddingunitbottom= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonpaddingunitbottom');
if ($woobizz_productlist_buttonpaddingunitbottom==0){
	$woobizz_productlist_buttonpaddingunitbottom="px";
} elseif($woobizz_productlist_buttonpaddingunitbottom==1) {
	$woobizz_productlist_buttonpaddingunitbottom="%";
} elseif($woobizz_productlist_buttonpaddingunitbottom==2) {
	$woobizz_productlist_buttonpaddingunitbottom="em";
} elseif($woobizz_productlist_buttonpaddingunitbottom==3) {
	$woobizz_productlist_buttonpaddingunitbottom="pt";
} else {
	$woobizz_productlist_buttonpaddingunitbottom="initial";
}	
//Padding Left
$woobizz_productlist_buttonpaddingleftsize= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonpaddingleftsize');
$woobizz_productlist_buttonpaddingunitleft= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonpaddingunitleft');
if ($woobizz_productlist_buttonpaddingunitleft==0){
	$woobizz_productlist_buttonpaddingunitleft="px";
} elseif($woobizz_productlist_buttonpaddingunitleft==1) {
	$woobizz_productlist_buttonpaddingunitleft="%";
} elseif($woobizz_productlist_buttonpaddingunitleft==2) {
	$woobizz_productlist_buttonpaddingunitleft="em";
} elseif($woobizz_productlist_buttonpaddingunitleft==3) {
	$woobizz_productlist_buttonpaddingunitleft="pt";
} else {
	$woobizz_productlist_buttonpaddingunitleft="initial";
}
$woobizz_productlist_buttonpaddingfull=$woobizz_productlist_buttonpaddingtopsize.$woobizz_productlist_buttonpaddingunittop." "
							   .$woobizz_productlist_buttonpaddingrightsize.$woobizz_productlist_buttonpaddingunitright." "
							   .$woobizz_productlist_buttonpaddingbottomsize.$woobizz_productlist_buttonpaddingunitbottom." "
							   .$woobizz_productlist_buttonpaddingleftsize.$woobizz_productlist_buttonpaddingunitleft." ";	
//---------------------------------------------------------------------------- 
//END 1.3.6 BUTTONS MARGINS
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START 1.2.1 PRODUCT LIST THUMBNAIL
//----------------------------------------------------------------------------
//Hide Thumnail?
$woobizz_productlist_thumbsbghide=get_option(WOOBIZZLIST.'_woobizz_productlist_thumbsbghide');
if ($woobizz_productlist_thumbsbghide==0){
	$woobizz_productlist_thumbsbghide="none";
} elseif($woobizz_productlist_thumbsbghide==1) {
	$woobizz_productlist_thumbsbghide="inherit";
} else {
	$woobizz_productlist_thumbsbghide="inherit";
}
//Expand Thumbnail?
$woobizz_productlist_thumbsbgexpand=get_option(WOOBIZZLIST.'_woobizz_productlist_thumbsbgexpand');
if ($woobizz_productlist_thumbsbgexpand==0){
	$woobizz_productlist_thumbsbgexpand="100%";
} elseif($woobizz_productlist_thumbsbgexpand==1) {
	$woobizz_productlist_thumbsbgexpand="auto";
} else {
	$woobizz_productlist_thumbsbgexpand="auto";
}
//Borders
$woobizz_productlist_thumbsbgbordersize= get_option(WOOBIZZLIST.'_woobizz_productlist_thumbsbgbordersize');
$woobizz_productlist_thumbsbgbordercolor= get_option(WOOBIZZLIST.'_woobizz_productlist_thumbsbgbordercolor');
$woobizz_productlist_thumbsbgborderstyle= get_option(WOOBIZZLIST.'_woobizz_productlist_thumbsbgborderstyle');
if ($woobizz_productlist_thumbsbgborderstyle==0){
		$woobizz_productlist_thumbsbgborderstyle="dotted";
	} elseif($woobizz_productlist_thumbsbgborderstyle==1) {
		$woobizz_productlist_thumbsbgborderstyle="dashed";
	} elseif($woobizz_productlist_thumbsbgborderstyle==2) {
		$woobizz_productlist_thumbsbgborderstyle="solid";
	} elseif($woobizz_productlist_thumbsbgborderstyle==3) {
		$woobizz_productlist_thumbsbgborderstyle="none";
	} else {$woobizz_productlist_thumbsbgborderstyle="none";
}
$woobizz_productlist_thumbsbgborderradius= get_option(WOOBIZZLIST.'_woobizz_productlist_thumbsbgborderradius'); 
$woobizz_productlist_thumbsbgborderfull=$woobizz_productlist_thumbsbgbordersize."px "
								.$woobizz_productlist_thumbsbgborderstyle." "
								.$woobizz_productlist_thumbsbgbordercolor." ";
//Shadows
$woobizz_productlist_thumbsbgshadowcolor= get_option(WOOBIZZLIST.'_woobizz_productlist_thumbsbgshadowcolor');
$woobizz_productlist_thumbsbgshadowrightdistance= get_option(WOOBIZZLIST.'_woobizz_productlist_thumbsbgshadowrightdistance');
$woobizz_productlist_thumbsbgshadowbottomdistance= get_option(WOOBIZZLIST.'_woobizz_productlist_thumbsbgshadowbottomdistance');
$woobizz_productlist_thumbsbgshadowspread= get_option(WOOBIZZLIST.'_woobizz_productlist_thumbsbgshadowspread');
$woobizz_productlist_thumbsbgshadowsize= get_option(WOOBIZZLIST.'_woobizz_productlist_thumbsbgshadowsize');
$woobizz_productlist_thumbsbgshadowapply= get_option(WOOBIZZLIST.'_woobizz_productlist_thumbsbgshadowapply');
if ($woobizz_productlist_thumbsbgshadowapply==0){
		$woobizz_productlist_thumbsbgshadowfull=$woobizz_productlist_thumbsbgshadowrightdistance."px "
											.$woobizz_productlist_thumbsbgshadowbottomdistance."px "
											.$woobizz_productlist_thumbsbgshadowspread."px "
											.$woobizz_productlist_thumbsbgshadowsize."px "
											.$woobizz_productlist_thumbsbgshadowcolor;
	} elseif($woobizz_productlist_thumbsbgshadowapply==1) {
		$woobizz_productlist_thumbsbgshadowfull="none";
	} else {
		$woobizz_productlist_thumbsbgshadowfull="none";
}
//----------------------------------------------------------------------------
//THUMBNAIL BACKGROUND
//----------------------------------------------------------------------------
$woobizz_productlist_thumbsbgpadding= get_option(WOOBIZZLIST.'_woobizz_productlist_thumbsbgpadding');
$woobizz_productlist_thumbsbgimage= get_option(WOOBIZZLIST.'_woobizz_productlist_thumbsbgimage');
$woobizz_productlist_thumbsbgcolor= get_option(WOOBIZZLIST.'_woobizz_productlist_thumbsbgcolor');
$woobizz_productlist_thumbsbgsize= get_option(WOOBIZZLIST.'_woobizz_productlist_thumbsbgsize');
if ($woobizz_productlist_thumbsbgsize==0){
		$woobizz_productlist_thumbsbgsize="contain";
	} elseif($woobizz_productlist_thumbsbgsize==1) {
		$woobizz_productlist_thumbsbgsize="cover";
	} elseif($woobizz_productlist_thumbsbgsize==2) {
		$woobizz_productlist_thumbsbgsize="inherit";
	} elseif($woobizz_productlist_thumbsbgsize==3) {
		$woobizz_productlist_thumbsbgsize="initial";
	} else {
		$woobizz_productlist_thumbsbgsize="initial";
}
$woobizz_productlist_thumbsbgrepeat= get_option(WOOBIZZLIST.'_woobizz_productlist_thumbsbgrepeat');
if ($woobizz_productlist_thumbsbgrepeat==0){
		$woobizz_productlist_thumbsbgrepeat="no-repeat";
	} elseif($woobizz_productlist_thumbsbgrepeat==1) {
		$woobizz_productlist_thumbsbgrepeat="repeat";
	} elseif($woobizz_productlist_thumbsbgrepeat==2) {
		$woobizz_productlist_thumbsbgrepeat="repeat-x";
	} elseif($woobizz_productlist_thumbsbgrepeat==3) {
		$woobizz_productlist_thumbsbgrepeat="repeat-y";
	} elseif($woobizz_productlist_thumbsbgrepeat==4) {
		$woobizz_productlist_thumbsbgrepeat="round";
	} elseif($woobizz_productlist_thumbsbgrepeat==5) {
		$woobizz_productlist_thumbsbgrepeat="space";
	} elseif($woobizz_productlist_thumbsbgrepeat==6) {
		$woobizz_productlist_thumbsbgrepeat="inherit";
	} elseif($woobizz_productlist_thumbsbgrepeat==5) {
		$woobizz_productlist_thumbsbgrepeat="initial";
	} else {
		$woobizz_productlist_thumbsbgrepeat="initial";
}
$woobizz_productlist_thumbsbgposition= get_option(WOOBIZZLIST.'_woobizz_productlist_thumbsbgposition');
if ($woobizz_productlist_thumbsbgposition==0){
		$woobizz_productlist_thumbsbgposition="left top";
	} elseif($woobizz_productlist_thumbsbgposition==1) {
		$woobizz_productlist_thumbsbgposition="left center";
	} elseif($woobizz_productlist_thumbsbgposition==2) {
		$woobizz_productlist_thumbsbgposition="left bottom";
	} elseif($woobizz_productlist_thumbsbgposition==3) {
		$woobizz_productlist_thumbsbgposition="right top";
	} elseif($woobizz_productlist_thumbsbgposition==4) {
		$woobizz_productlist_thumbsbgposition="right center";
	} elseif($woobizz_productlist_thumbsbgposition==5) {
		$woobizz_productlist_thumbsbgposition="right bottom";
	} elseif($woobizz_productlist_thumbsbgposition==6) {
		$woobizz_productlist_thumbsbgposition="center top";
	} elseif($woobizz_productlist_thumbsbgposition==7) {
		$woobizz_productlist_thumbsbgposition="center center";
	} elseif($woobizz_productlist_thumbsbgposition==8) {
		$woobizz_productlist_thumbsbgposition="center bottom";
	} elseif($woobizz_productlist_thumbsbgposition==9) {
		$woobizz_productlist_thumbsbgposition="initial";
	} elseif($woobizz_productlist_thumbsbgposition==10) {
		$woobizz_productlist_thumbsbgposition="initial";
	} else {
		$woobizz_productlist_thumbsbgposition="initial";
}
//---------------------------------------------------------------------------- 
//END PRODUCT LIST THUMBNAIL
//----------------------------------------------------------------------------
//----------------------------------------------------------------------------
//START THUMBNAIL GRADIENTS
//----------------------------------------------------------------------------
$woobizz_productlist_thumbsbggradient1= get_option(WOOBIZZLIST.'_woobizz_productlist_thumbsbggradient1');
$woobizz_productlist_thumbsbggradient1opacity= get_option(WOOBIZZLIST.'_woobizz_productlist_thumbsbggradient1opacity');
$trasnform_woobizz_productlist_thumbsbggradient1=woobizz_productlist_hextorgb($woobizz_productlist_thumbsbggradient1);
$woobizz_productlist_thumbsbgfullgradient1=$trasnform_woobizz_productlist_thumbsbggradient1.",".$woobizz_productlist_thumbsbggradient1opacity;
$woobizz_productlist_thumbsbggradient2= get_option(WOOBIZZLIST.'_woobizz_productlist_thumbsbggradient2');
$woobizz_productlist_thumbsbggradient2opacity= get_option(WOOBIZZLIST.'_woobizz_productlist_thumbsbggradient2opacity');
$trasnform_woobizz_productlist_thumbsbggradient2=woobizz_productlist_hextorgb($woobizz_productlist_thumbsbggradient2);
$woobizz_productlist_thumbsbgfullgradient2=$trasnform_woobizz_productlist_thumbsbggradient2.",".$woobizz_productlist_thumbsbggradient2opacity;
//----------------------------------------------------------------------------
//END GRADIENTS
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START PRODUCT LIST ONSALE
//----------------------------------------------------------------------------
//Hide Onsale?
$woobizz_productlist_onsalehide=get_option(WOOBIZZLIST.'_woobizz_productlist_onsalehide');
if ($woobizz_productlist_onsalehide==0){
	$woobizz_productlist_onsalehide="none";
} elseif($woobizz_productlist_onsalehide==1) {
	$woobizz_productlist_onsalehide="inline-block";
} else {
	$woobizz_productlist_onsalehide="inline-block";
}
$woobizz_productlist_onsalebackgroundcolor=get_option(WOOBIZZLIST.'_woobizz_productlist_onsalebackgroundcolor');
//Custom Onsale Text is inside a function on the bottom
//Onsale color
$woobizz_productlist_onsaletextcolor=get_option(WOOBIZZLIST.'_woobizz_productlist_onsaletextcolor');
//Borders
$woobizz_productlist_onsalebordersize= get_option(WOOBIZZLIST.'_woobizz_productlist_onsalebordersize');
$woobizz_productlist_onsalebordercolor= get_option(WOOBIZZLIST.'_woobizz_productlist_onsalebordercolor');
$woobizz_productlist_onsaleborderstyle= get_option(WOOBIZZLIST.'_woobizz_productlist_onsaleborderstyle');
if ($woobizz_productlist_onsaleborderstyle==0){
		$woobizz_productlist_onsaleborderstyle="dotted";
	} elseif($woobizz_productlist_onsaleborderstyle==1) {
		$woobizz_productlist_onsaleborderstyle="dashed";
	} elseif($woobizz_productlist_onsaleborderstyle==2) {
		$woobizz_productlist_onsaleborderstyle="solid";
	} elseif($woobizz_productlist_onsaleborderstyle==3) {
		$woobizz_productlist_onsaleborderstyle="none";
	} else {$woobizz_productlist_onsaleborderstyle="none";
}
$woobizz_productlist_onsaleborderradius= get_option(WOOBIZZLIST.'_woobizz_productlist_onsaleborderradius'); 
$woobizz_productlist_onsaleborderfull=$woobizz_productlist_onsalebordersize."px "
								.$woobizz_productlist_onsaleborderstyle." "
								.$woobizz_productlist_onsalebordercolor." ";
//Shadows
$woobizz_productlist_onsaleshadowcolor= get_option(WOOBIZZLIST.'_woobizz_productlist_onsaleshadowcolor');
$woobizz_productlist_onsaleshadowrightdistance= get_option(WOOBIZZLIST.'_woobizz_productlist_onsaleshadowrightdistance');
$woobizz_productlist_onsaleshadowbottomdistance= get_option(WOOBIZZLIST.'_woobizz_productlist_onsaleshadowbottomdistance');
$woobizz_productlist_onsaleshadowspread= get_option(WOOBIZZLIST.'_woobizz_productlist_onsaleshadowspread');
$woobizz_productlist_onsaleshadowsize= get_option(WOOBIZZLIST.'_woobizz_productlist_onsaleshadowsize');
$woobizz_productlist_onsaleshadowapply= get_option(WOOBIZZLIST.'_woobizz_productlist_onsaleshadowapply');
if ($woobizz_productlist_onsaleshadowapply==0){
		$woobizz_productlist_onsaleshadowfull=$woobizz_productlist_onsaleshadowrightdistance."px "
											.$woobizz_productlist_onsaleshadowbottomdistance."px "
											.$woobizz_productlist_onsaleshadowspread."px "
											.$woobizz_productlist_onsaleshadowsize."px "
											.$woobizz_productlist_onsaleshadowcolor;
	} elseif($woobizz_productlist_onsaleshadowapply==1) {
		$woobizz_productlist_onsaleshadowfull="none";
	} else {
		$woobizz_productlist_onsaleshadowfull="none";
} 
//---------------------------------------------------------------------------- 
//END PRODUCT LIST ONSALE
//----------------------------------------------------------------------------
//----------------------------------------------------------------------------    
//START PRODUCT BUTTON WIDTH
//----------------------------------------------------------------------------
//Max-width
$woobizz_productlist_buttonwidthsize= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonwidthsize');
$woobizz_productlist_buttonwidthunits= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonwidthunits');
if ($woobizz_productlist_buttonwidthunits==0){
	$woobizz_productlist_buttonwidthunits="px";
} elseif($woobizz_productlist_buttonwidthunits==1) {
	$woobizz_productlist_buttonwidthunits="%";
} elseif($woobizz_productlist_buttonwidthunits==2) {
	$woobizz_productlist_buttonwidthunits="em";
} elseif($woobizz_productlist_buttonwidthunits==3) {
	$woobizz_productlist_buttonwidthunits="pt";
} elseif($woobizz_productlist_buttonwidthunits==4) {
	$woobizz_productlist_buttonwidthunits="auto";
	$woobizz_productlist_buttonwidthsize="";
} else {
	$woobizz_productlist_buttonwidthunits="initial";
}
//Min-Width
$woobizz_productlist_buttonminwidthsize= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonminwidthsize');
$woobizz_productlist_buttonminwidthunits= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonminwidthunits');
if ($woobizz_productlist_buttonminwidthunits==0){
	$woobizz_productlist_buttonminwidthunits="px";
} elseif($woobizz_productlist_buttonminwidthunits==1) {
	$woobizz_productlist_buttonminwidthunits="%";
} elseif($woobizz_productlist_buttonminwidthunits==2) {
	$woobizz_productlist_buttonminwidthunits="em";
} elseif($woobizz_productlist_buttonminwidthunits==3) {
	$woobizz_productlist_buttonminwidthunits="pt";
} elseif($woobizz_productlist_buttonminwidthunits==4) {
	$woobizz_productlist_buttonminwidthunits="initial";
	$woobizz_productlist_buttonminwidthsize="";
} elseif($woobizz_productlist_buttonminwidthunits==5) {
	$woobizz_productlist_buttonminwidthunits="inherit";
	$woobizz_productlist_buttonminwidthsize="";
} else {
	$woobizz_productlist_buttonminwidthunits="initial";
}
//Max-Width 
$woobizz_productlist_buttonmaxwidthsize= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonmaxwidthsize');
$woobizz_productlist_buttonmaxwidthunits= get_option(WOOBIZZLIST.'_woobizz_productlist_buttonmaxwidthunits');
if ($woobizz_productlist_buttonmaxwidthunits==0){
	$woobizz_productlist_buttonmaxwidthunits="px";
} elseif($woobizz_productlist_buttonmaxwidthunits==1) {
	$woobizz_productlist_buttonmaxwidthunits="%";
} elseif($woobizz_productlist_buttonmaxwidthunits==2) {
	$woobizz_productlist_buttonmaxwidthunits="em";
} elseif($woobizz_productlist_buttonmaxwidthunits==3) {
	$woobizz_productlist_buttonmaxwidthunits="pt";
} elseif($woobizz_productlist_buttonmaxwidthunits==4) {
	$woobizz_productlist_buttonmaxwidthunits="initial";
	$woobizz_productlist_buttonmaxwidthsize="";
} elseif($woobizz_productlist_buttonmaxwidthunits==5) {
	$woobizz_productlist_buttonmaxwidthunits="inherit";
	$woobizz_productlist_buttonmaxwidthsize="";
} elseif($woobizz_productlist_buttonmaxwidthunits==6) {
	$woobizz_productlist_buttonmaxwidthunits="none";
	$woobizz_productlist_buttonmaxwidthsize="";
} else {
	$woobizz_productlist_buttonmaxwidthunits="none";
}
//----------------------------------------------------------------------------    
//END PRODUCT BUTTON WIDTH
//----------------------------------------------------------------------------
//----------------------------------------------------------------------------    
//START SHOWING CSS OPTIONS
//----------------------------------------------------------------------------
 echo"
<style>
/**Product Box Image*/
ul.products li.product {
	background:linear-gradient(rgba(".$woobizz_productlist_backgroundfullgradient1."),
							   rgba(".$woobizz_productlist_backgroundfullgradient2.")),
								url(".$woobizz_productlist_backgroundimage.");
	background-color:".$woobizz_productlist_backgroundcolor.";
	background-size:".$woobizz_productlist_backgroundsize.";
	background-repeat:".$woobizz_productlist_backgroundrepeat.";
	background-position:".$woobizz_productlist_backgroundposition.";
	box-shadow:".$woobizz_productlist_shadowfull.";
	border:".$woobizz_productlist_borderfull.";
	border-radius:".$woobizz_productlist_borderradius."px;
	margin-top:".$woobizz_productlist_margintopsize.$woobizz_productlist_marginunittop.";
	margin-bottom:".$woobizz_productlist_marginbottomsize.$woobizz_productlist_marginunitbottom.";
	padding:".$woobizz_productlist_paddingfull.";
}
/**Product Thumbs Image*/
ul.products li.product img {
	width:".$woobizz_productlist_thumbsbgexpand.";
	box-shadow:".$woobizz_productlist_thumbsbgshadowfull."!important;
	border:".$woobizz_productlist_thumbsbgborderfull."!important;
	border-radius:".$woobizz_productlist_thumbsbgborderradius."%;
	display:".$woobizz_productlist_thumbsbghide."!important;
	background:linear-gradient(rgba(".$woobizz_productlist_thumbsbgfullgradient1."),
							   rgba(".$woobizz_productlist_thumbsbgfullgradient2.")),
								url(".$woobizz_productlist_thumbsbgimage.");
	background-color:".$woobizz_productlist_thumbsbgcolor.";
	background-size:".$woobizz_productlist_thumbsbgsize.";
	background-repeat:".$woobizz_productlist_thumbsbgrepeat.";
	background-position:".$woobizz_productlist_thumbsbgposition.";
	padding:".$woobizz_productlist_thumbsbgpadding."%;
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
/**PRODUCT READ MORE BUTTON */
a.button.addtocartbutton {
	background:".$woobizz_productlist_readmorebackgroundcolor."!important;
    color:".$woobizz_productlist_readmoretextcolor."!important;
	display:".$woobizz_productlist_readmorehide."!important;
}
/**PRODUCT ADD TO CART BUTTON */
a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart {
    background:".$woobizz_productlist_addtocartbackgroundcolor."!important;
    color:".$woobizz_productlist_addtocarttextcolor."!important;
	display:".$woobizz_productlist_addtocarthide."!important;
}
/**SEE OPTIONS BUTTON*/
a.button.product_type_variable.add_to_cart_button {
    background:".$woobizz_productlist_seeoptionsbackgroundcolor."!important;
    color:".$woobizz_productlist_seeoptionstextcolor."!important;
	display:".$woobizz_productlist_seeoptionshide."!important;
}
/**SEE CART BUTTON */
a.added_to_cart.wc-forward{
	background:".$woobizz_productlist_seecartbackgroundcolor."!important;
    color:".$woobizz_productlist_seecarttextcolor."!important;
	display:".$woobizz_productlist_seecarthide."!important;
	width:100%;
}
/**PRODUCT LIST BUTTONS */
ul.products li.product .button {
	box-shadow:".$woobizz_productlist_buttonshadowfull.";
	border:".$woobizz_productlist_buttonborderfull."!important;
	border-radius:".$woobizz_productlist_buttonborderradius."px;
	margin:".$woobizz_productlist_buttonmarginfull."!important;
	padding:".$woobizz_productlist_buttonpaddingfull."!important;
	width:".$woobizz_productlist_buttonwidthsize.$woobizz_productlist_buttonwidthunits."!important;
	min-width:".$woobizz_productlist_buttonminwidthsize.$woobizz_productlist_buttonminwidthunits."!important;
	max-width:".$woobizz_productlist_buttonmaxwidthsize.$woobizz_productlist_buttonmaxwidthunits."!important;
	font-family:inherit;
}
/**PRODUCT LIST TITLE */
ul.products li.product h2 {
    padding:".$woobizz_productlist_titlepaddingfull.";
	font-size:".$woobizz_productlist_titlesize."px!important;
	font-weight:".$woobizz_productlist_titleweight."!important;
    display: ".$woobizz_productlist_titlehide."!important;
	color:".$woobizz_productlist_titlecolor.";
}
/**PRODUCT LIST DESCRIPTION */
ul.products li.product p {
    color:".$woobizz_productlist_descriptioncolor.";
	font-weight:".$woobizz_productlist_descriptionweight.";
	font-size:".$woobizz_productlist_descriptionsize."px;
	font-family:arial;
	display:".$woobizz_productlist_descriptionhide."!important;
	margin:0;
}
.woobizz_productlist_excerpt{
	padding:".$woobizz_productlist_descriptionpaddingfull.";
	display:block;
}
ul.products li.product .onsale {
	background:".$woobizz_productlist_onsalebackgroundcolor."!important;
	box-shadow:".$woobizz_productlist_onsaleshadowfull."!important;
	border:".$woobizz_productlist_onsaleborderfull."!important;
	border-radius:".$woobizz_productlist_onsaleborderradius."%;
	color:".$woobizz_productlist_onsaletextcolor.";
	display:".$woobizz_productlist_onsalehide."!important;
}
ul.products li.product .price del {
    opacity: 1;
	font-size:".$woobizz_productlist_regularpricesize."px;
	font-weight:".$woobizz_productlist_regularpriceweight.";
    color:".$woobizz_productlist_regularpricecolor.";
	display: ".$woobizz_productlist_regularpricehide."!important;
}
ul.products li.product .price ins {
    font-size:".$woobizz_productlist_salepricesize."px;
	font-weight:".$woobizz_productlist_salepriceweight.";
    color:".$woobizz_productlist_salepricecolor.";
	display: ".$woobizz_productlist_salepricehide."!important;
}
ul.products li.product .price {
   //display: ".$woobizz_productlist_regularpricehideall."!important;
}
ul.products li.product .star-rating {
    display: ".$woobizz_productlist_hiderating."!important;
	font-size:".$woobizz_productlist_ratingsize."px!important;
}
ul.products li.product .star-rating:before {
    opacity: 1;
    float: left;
    position: absolute;
    color: ".$woobizz_productlist_ratingncolor."!important;
}
ul.products li.product .star-rating span:before{
	color: ".$woobizz_productlist_ratingpcolor."!important;
}
.btn:focus {
  outline: none;
}
a:focus, .focus a {
	outline: none !important;
	border:none!important;
}
</style>";
}
add_action('wp_head', 'woobizz_productlist_allcssoptions', 100);
//---------------------------------------------------------------------------- 
//END ALL CSS FUNCTIONS
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START CUSTOM HOOKS
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START ADD TO CART FUNCTION
//----------------------------------------------------------------------------
//The filters.. both are required.
add_filter('gettext', 'woobizz_change_list_addtocart_btn');
add_filter('ngettext', 'woobizz_change_list_addtocart_btn');
//function
function woobizz_change_list_addtocart_btn($addtocart_btn){
  $woobizz_productlist_addtocarttext= get_option(WOOBIZZLIST.'_woobizz_productlist_addtocarttext');
  $addtocart_btn= str_ireplace('Añadir al carrito',$woobizz_productlist_addtocarttext, $addtocart_btn);
  return $addtocart_btn;
}
//---------------------------------------------------------------------------- 
//END ADD TO CART FUNCTION
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START SEE OPTIONS FUNCTION
//----------------------------------------------------------------------------
//The filters.. both are required.
add_filter('gettext', 'woobizz_change_list_seeoptions_btn');
add_filter('ngettext', 'woobizz_change_list_seeoptions_btn');
//function
function woobizz_change_list_seeoptions_btn($seeoptions_btn){
  $woobizz_productlist_seeoptionstext= get_option(WOOBIZZLIST.'_woobizz_productlist_seeoptionstext');
  $seeoptions_btn= str_ireplace('Seleccionar opciones',$woobizz_productlist_seeoptionstext, $seeoptions_btn);
  return $seeoptions_btn;
}
//---------------------------------------------------------------------------- 
//END SEE OPTIONS FUNCTION
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START SEE CART FUNCTION
//----------------------------------------------------------------------------
//The filters.. both are required.
add_filter('gettext', 'woobizz_change_list_seecart_btn');
add_filter('ngettext', 'woobizz_change_list_seecart_btn');
//function
function woobizz_change_list_seecart_btn($seecart_btn){
  $woobizz_productlist_seecarttext= get_option(WOOBIZZLIST.'_woobizz_productlist_seecarttext');
  $seecart_btn= str_ireplace('Ver carrito',$woobizz_productlist_seecarttext, $seecart_btn);
  return $seecart_btn;
}
//---------------------------------------------------------------------------- 
//END SEE CART FUNCTION
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START READ MORE FUNCTION
//----------------------------------------------------------------------------
	function woobizz_productlist_read_more_button() {
		$woobizz_productlist_readmoretext= get_option(WOOBIZZLIST.'_woobizz_productlist_readmoretext');
		global $product;
		$link = $product->get_permalink();
		echo do_shortcode('<a href="'.$link.'" class="button addtocartbutton">'.$woobizz_productlist_readmoretext.'</a>');
	}
add_action('woocommerce_after_shop_loop_item','woobizz_productlist_read_more_button');
//---------------------------------------------------------------------------- 
//END READ MORE
//----------------------------------------------------------------------------
function woobizz_productlist_showproductlistdescription(){
	$woobizz_productlist_descriptionhide=get_option(WOOBIZZLIST.'_woobizz_productlist_descriptionhide');
	if ($woobizz_productlist_descriptionhide==0){
	remove_action( 'woocommerce_after_shop_loop_item_title', 'woobizz_productlist_limit_short_description',5);
	} elseif($woobizz_productlist_descriptionhide==1) {
	add_action( 'woocommerce_after_shop_loop_item_title', 'woobizz_productlist_limit_short_description',5);
	} else {
	add_action( 'woocommerce_after_shop_loop_item_title', 'woobizz_productlist_limit_short_description',5);
	}
}
woobizz_productlist_showproductlistdescription();
	function woobizz_productlist_limit_short_description(){
		$woobizz_productlist_descriptionlimit=get_option(WOOBIZZLIST.'_woobizz_productlist_descriptionlimit');
		$content_length = $woobizz_productlist_descriptionlimit;
		global $post;
		$content = $post->post_excerpt;
		$wordarray = explode(' ', $content, $content_length + 1);
		if(count($wordarray) > $content_length) :
		array_pop($wordarray);
		array_push($wordarray, '...');
		$content = implode(' ', $wordarray);
		$content = force_balance_tags($content);
		endif;
		echo "<div class='woobizz_productlist_excerpt'><span class='excerpt'><p>$content</p></span></div>";
	}	
//START ONSALE FUNCTION
add_filter( 'woocommerce_sale_flash', 'wc_custom_replace_sale_text' );
function wc_custom_replace_sale_text( $html ) {
	$woobizz_productlist_onsaletext= get_option(WOOBIZZLIST.'_woobizz_productlist_onsaletext');
    return str_replace( __( 'Sale!', 'woocommerce' ), __($woobizz_productlist_onsaletext, 'woocommerce' ), $html );
}
//-----------------------------------------------------------------------
//START RESPONSIVE NO SIDEBAR
//-----------------------------------------------------------------------
function woobizz_productlist_rns1(){
	
	if ( !is_cart()&& !is_active_sidebar('sidebar-1') ){	
		//@Media Min-width
	$woobizz_productlist_rns1_minwidth= get_option(WOOBIZZLIST.'_woobizz_productlist_rns1_minwidth');
	$woobizz_productlist_rns2_minwidth= get_option(WOOBIZZLIST.'_woobizz_productlist_rns2_minwidth');
	$woobizz_productlist_rns3_minwidth= get_option(WOOBIZZLIST.'_woobizz_productlist_rns3_minwidth');
	$woobizz_productlist_rns4_minwidth= get_option(WOOBIZZLIST.'_woobizz_productlist_rns4_minwidth');
	$woobizz_productlist_rns5_minwidth= get_option(WOOBIZZLIST.'_woobizz_productlist_rns5_minwidth');
	$woobizz_productlist_rns6_minwidth= get_option(WOOBIZZLIST.'_woobizz_productlist_rns6_minwidth');
	//Thumbnail Width
	$woobizz_productlist_rns1_width= get_option(WOOBIZZLIST.'_woobizz_productlist_rns1_width');
	$woobizz_productlist_rns2_width= get_option(WOOBIZZLIST.'_woobizz_productlist_rns2_width');
	$woobizz_productlist_rns3_width= get_option(WOOBIZZLIST.'_woobizz_productlist_rns3_width');
	$woobizz_productlist_rns4_width= get_option(WOOBIZZLIST.'_woobizz_productlist_rns4_width');
	$woobizz_productlist_rns5_width= get_option(WOOBIZZLIST.'_woobizz_productlist_rns5_width');
	$woobizz_productlist_rns6_width= get_option(WOOBIZZLIST.'_woobizz_productlist_rns6_width');
	//Margin left
	$woobizz_productlist_rns1_marginleft= get_option(WOOBIZZLIST.'_woobizz_productlist_rns1_marginleft');
	$woobizz_productlist_rns2_marginleft= get_option(WOOBIZZLIST.'_woobizz_productlist_rns2_marginleft');
	$woobizz_productlist_rns3_marginleft= get_option(WOOBIZZLIST.'_woobizz_productlist_rns3_marginleft');
	$woobizz_productlist_rns4_marginleft= get_option(WOOBIZZLIST.'_woobizz_productlist_rns4_marginleft');
	$woobizz_productlist_rns5_marginleft= get_option(WOOBIZZLIST.'_woobizz_productlist_rns5_marginleft');
	$woobizz_productlist_rns6_marginleft= get_option(WOOBIZZLIST.'_woobizz_productlist_rns6_marginleft');
	//Margin right
	$woobizz_productlist_rns1_marginright= get_option(WOOBIZZLIST.'_woobizz_productlist_rns1_marginright');
	$woobizz_productlist_rns2_marginright= get_option(WOOBIZZLIST.'_woobizz_productlist_rns2_marginright');
	$woobizz_productlist_rns3_marginright= get_option(WOOBIZZLIST.'_woobizz_productlist_rns3_marginright');
	$woobizz_productlist_rns4_marginright= get_option(WOOBIZZLIST.'_woobizz_productlist_rns4_marginright');
	$woobizz_productlist_rns5_marginright= get_option(WOOBIZZLIST.'_woobizz_productlist_rns5_marginright');
	$woobizz_productlist_rns6_marginright= get_option(WOOBIZZLIST.'_woobizz_productlist_rns6_marginright');
	echo" <style> 
	@media (min-width:".$woobizz_productlist_rns1_minwidth.".px){
		ul.products li.product{
			width: ".$woobizz_productlist_rns1_width."%!important;
			float:inherit!important;
			margin-right:".$woobizz_productlist_rns1_marginright."%!important;
			margin-left:".$woobizz_productlist_rns1_marginleft."%!important;
			display:inline-table;
		}
		ul.products li.product.first {
			margin-right:".$woobizz_productlist_rns1_marginright."%!important;
			margin-left:".$woobizz_productlist_rns1_marginleft."%!important;
		}
		ul.products li.product.last {
			margin-right:".$woobizz_productlist_rns4_marginright."%!important;
			margin-left:".$woobizz_productlist_rns4_marginleft."%!important;
		}
	}
	@media (min-width:".$woobizz_productlist_rns2_minwidth."px) {
		ul.products li.product{
			width: ".$woobizz_productlist_rns2_width."%!important;
			float:inherit!important;
			margin-right:".$woobizz_productlist_rns2_marginright."%!important;
			margin-left:".$woobizz_productlist_rns2_marginleft."%!important;
			display:inline-table!important;
		}
		ul.products li.product.first {
			margin-right:".$woobizz_productlist_rns2_marginright."%!important;
			margin-left:".$woobizz_productlist_rns2_marginleft."%!important;
		}
		ul.products li.product.last {
			margin-right:".$woobizz_productlist_rns2_marginright."%!important;
			margin-left:".$woobizz_productlist_rns2_marginleft."%!important;
		}
	}
	@media (min-width:".$woobizz_productlist_rns3_minwidth."px) {
		ul.products li.product{
			width: ".$woobizz_productlist_rns3_width."%!important;
			float: inherit!important;
			margin-right:".$woobizz_productlist_rns3_marginright."%!important;
			margin-left:".$woobizz_productlist_rns3_marginleft."%!important;
			display:inline-table!important;
		}
		ul.products li.product.first {
			margin-right:".$woobizz_productlist_rns3_marginright."%!important;
			margin-left:".$woobizz_productlist_rns3_marginleft."%!important;
		}
		ul.products li.product.last {
			margin-right:".$woobizz_productlist_rns3_marginright."%!important;
			margin-left:".$woobizz_productlist_rns3_marginleft."%!important;
		}
	}
	@media (min-width:".$woobizz_productlist_rns4_minwidth."px){
		ul.products li.product{
			width: ".$woobizz_productlist_rns4_width."%!important;
			margin-right:".$woobizz_productlist_rns4_marginright."%!important;
			margin-left:".$woobizz_productlist_rns4_marginleft."%!important;
		}
		ul.products li.product.first {
			margin-right:".$woobizz_productlist_rns4_marginright."%!important;
			margin-left:".$woobizz_productlist_rns4_marginleft."%!important;
		}
		ul.products li.product.last {
			margin-right:".$woobizz_productlist_rns4_marginright."%!important;
			margin-left:".$woobizz_productlist_rns4_marginleft."%!important;
		}
	}
	@media (min-width:".$woobizz_productlist_rns5_minwidth."px){
		ul.products li.product{
			width: ".$woobizz_productlist_rns5_width."%!important;
			float:inherit!important;
			margin-right:".$woobizz_productlist_rns5_marginright."%!important;
			margin-left:".$woobizz_productlist_rns5_marginleft."%!important;
			display: inline-table!important;
		}
		ul.products li.product.first {
			margin-right:".$woobizz_productlist_rns5_marginright."%!important;
			margin-left:".$woobizz_productlist_rns5_marginleft."%!important;
		}
		ul.products li.product.last {
			margin-right:".$woobizz_productlist_rns5_marginright."%!important;
			margin-left:".$woobizz_productlist_rns5_marginleft."%!important;
		}
	}
	@media (min-width:".$woobizz_productlist_rns6_minwidth."px){
		ul.products li.product{
			width: ".$woobizz_productlist_rns6_width."%!important;
			float: inherit!important;
			margin-right:".$woobizz_productlist_rns6_marginright."%!important;
			margin-left:".$woobizz_productlist_rns6_marginleft."%!important;
			display: inline-table!important;
		}
		ul.products li.product.first {
			margin-right:".$woobizz_productlist_rns6_marginright."%!important;
			margin-left:".$woobizz_productlist_rns6_marginleft."%!important;
			}
		ul.products li.product.last {
			margin-right:".$woobizz_productlist_rns6_marginright."%!important;
			margin-left:".$woobizz_productlist_rns6_marginleft."%!important;
		}
	}
	</style>
	";
	}else{
		//Do Nothing
	}
}
add_action('wp_head', 'woobizz_productlist_rns1', 100);
//-----------------------------------------------------------------------
//END RESPONSIVE NO SIDEBAR
//-----------------------------------------------------------------------

//-----------------------------------------------------------------------
//START RESPONSIVE WITH SIDEBAR
//-----------------------------------------------------------------------
function woobizz_productlist_rws1(){
	
	if (!is_cart()&& is_active_sidebar('sidebar-1') ){	
	//@Media Min-width
	$woobizz_productlist_rws1_minwidth= get_option(WOOBIZZLIST.'_woobizz_productlist_rws1_minwidth');
	$woobizz_productlist_rws2_minwidth= get_option(WOOBIZZLIST.'_woobizz_productlist_rws2_minwidth');
	$woobizz_productlist_rws3_minwidth= get_option(WOOBIZZLIST.'_woobizz_productlist_rws3_minwidth');
	$woobizz_productlist_rws4_minwidth= get_option(WOOBIZZLIST.'_woobizz_productlist_rws4_minwidth');
	$woobizz_productlist_rws5_minwidth= get_option(WOOBIZZLIST.'_woobizz_productlist_rws5_minwidth');
	$woobizz_productlist_rws6_minwidth= get_option(WOOBIZZLIST.'_woobizz_productlist_rws6_minwidth');
	//Thumbnail Width
	$woobizz_productlist_rws1_width= get_option(WOOBIZZLIST.'_woobizz_productlist_rws1_width');
	$woobizz_productlist_rws2_width= get_option(WOOBIZZLIST.'_woobizz_productlist_rws2_width');
	$woobizz_productlist_rws3_width= get_option(WOOBIZZLIST.'_woobizz_productlist_rws3_width');
	$woobizz_productlist_rws4_width= get_option(WOOBIZZLIST.'_woobizz_productlist_rws4_width');
	$woobizz_productlist_rws5_width= get_option(WOOBIZZLIST.'_woobizz_productlist_rws5_width');
	$woobizz_productlist_rws6_width= get_option(WOOBIZZLIST.'_woobizz_productlist_rws6_width');
	//Margin left
	$woobizz_productlist_rws1_marginleft= get_option(WOOBIZZLIST.'_woobizz_productlist_rws1_marginleft');
	$woobizz_productlist_rws2_marginleft= get_option(WOOBIZZLIST.'_woobizz_productlist_rws2_marginleft');
	$woobizz_productlist_rws3_marginleft= get_option(WOOBIZZLIST.'_woobizz_productlist_rws3_marginleft');
	$woobizz_productlist_rws4_marginleft= get_option(WOOBIZZLIST.'_woobizz_productlist_rws4_marginleft');
	$woobizz_productlist_rws5_marginleft= get_option(WOOBIZZLIST.'_woobizz_productlist_rws5_marginleft');
	$woobizz_productlist_rws6_marginleft= get_option(WOOBIZZLIST.'_woobizz_productlist_rws6_marginleft');
	//Margin right
	$woobizz_productlist_rws1_marginright= get_option(WOOBIZZLIST.'_woobizz_productlist_rws1_marginright');
	$woobizz_productlist_rws2_marginright= get_option(WOOBIZZLIST.'_woobizz_productlist_rws2_marginright');
	$woobizz_productlist_rws3_marginright= get_option(WOOBIZZLIST.'_woobizz_productlist_rws3_marginright');
	$woobizz_productlist_rws4_marginright= get_option(WOOBIZZLIST.'_woobizz_productlist_rws4_marginright');
	$woobizz_productlist_rws5_marginright= get_option(WOOBIZZLIST.'_woobizz_productlist_rws5_marginright');
	$woobizz_productlist_rws6_marginright= get_option(WOOBIZZLIST.'_woobizz_productlist_rws6_marginright');
	echo" <style> 
	@media (min-width:".$woobizz_productlist_rws1_minwidth.".px){
		ul.products li.product{
			width: ".$woobizz_productlist_rws1_width."%!important;
			float:inherit!important;
			margin-right:".$woobizz_productlist_rws1_marginright."%!important;
			margin-left:".$woobizz_productlist_rws1_marginleft."%!important;
			display:inline-table;
		}
		ul.products li.product.first {
			margin-right:".$woobizz_productlist_rws1_marginright."%!important;
			margin-left:".$woobizz_productlist_rws1_marginleft."%!important;
		}
		ul.products li.product.last {
			margin-right:".$woobizz_productlist_rws4_marginright."%!important;
			margin-left:".$woobizz_productlist_rws4_marginleft."%!important;
		}
	}
	@media (min-width:".$woobizz_productlist_rws2_minwidth."px) {
		ul.products li.product{
			width: ".$woobizz_productlist_rws2_width."%!important;
			float:inherit!important;
			margin-right:".$woobizz_productlist_rws2_marginright."%!important;
			margin-left:".$woobizz_productlist_rws2_marginleft."%!important;
			display:inline-table!important;
		}
		ul.products li.product.first {
			margin-right:".$woobizz_productlist_rws2_marginright."%!important;
			margin-left:".$woobizz_productlist_rws2_marginleft."%!important;
		}
		ul.products li.product.last {
			margin-right:".$woobizz_productlist_rws2_marginright."%!important;
			margin-left:".$woobizz_productlist_rws2_marginleft."%!important;
		}
	}
	@media (min-width:".$woobizz_productlist_rws3_minwidth."px) {
		ul.products li.product{
			width: ".$woobizz_productlist_rws3_width."%!important;
			float: inherit!important;
			margin-right:".$woobizz_productlist_rws3_marginright."%!important;
			margin-left:".$woobizz_productlist_rws3_marginleft."%!important;
			display:inline-table!important;
		}
		ul.products li.product.first {
			margin-right:".$woobizz_productlist_rws3_marginright."%!important;
			margin-left:".$woobizz_productlist_rws3_marginleft."%!important;
		}
		ul.products li.product.last {
			margin-right:".$woobizz_productlist_rws3_marginright."%!important;
			margin-left:".$woobizz_productlist_rws3_marginleft."%!important;
		}
	}
	@media (min-width:".$woobizz_productlist_rws4_minwidth."px){
		ul.products li.product{
			width: ".$woobizz_productlist_rws4_width."%!important;
			margin-right:".$woobizz_productlist_rws4_marginright."%!important;
			margin-left:".$woobizz_productlist_rws4_marginleft."%!important;
		}
		ul.products li.product.first {
			margin-right:".$woobizz_productlist_rws4_marginright."%!important;
			margin-left:".$woobizz_productlist_rws4_marginleft."%!important;
		}
		ul.products li.product.last {
			margin-right:".$woobizz_productlist_rws4_marginright."%!important;
			margin-left:".$woobizz_productlist_rws4_marginleft."%!important;
		}
	}
	@media (min-width:".$woobizz_productlist_rws5_minwidth."px){
		ul.products li.product{
			width: ".$woobizz_productlist_rws5_width."%!important;
			float:inherit!important;
			margin-right:".$woobizz_productlist_rws5_marginright."%!important;
			margin-left:".$woobizz_productlist_rws5_marginleft."%!important;
			display: inline-table!important;
		}
		ul.products li.product.first {
			margin-right:".$woobizz_productlist_rws5_marginright."%!important;
			margin-left:".$woobizz_productlist_rws5_marginleft."%!important;
		}
		ul.products li.product.last {
			margin-right:".$woobizz_productlist_rws5_marginright."%!important;
			margin-left:".$woobizz_productlist_rws5_marginleft."%!important;
		}
	}
	@media (min-width:".$woobizz_productlist_rws6_minwidth."px){
		ul.products li.product{
			width: ".$woobizz_productlist_rws6_width."%!important;
			float: inherit!important;
			margin-right:".$woobizz_productlist_rws6_marginright."%!important;
			margin-left:".$woobizz_productlist_rws6_marginleft."%!important;
			display: inline-table!important;
		}
		ul.products li.product.first {
			margin-right:".$woobizz_productlist_rws6_marginright."%!important;
			margin-left:".$woobizz_productlist_rws6_marginleft."%!important;
			}
		ul.products li.product.last {
			margin-right:".$woobizz_productlist_rws6_marginright."%!important;
			margin-left:".$woobizz_productlist_rws6_marginleft."%!important;
		}
	}
	</style>
	";
	}else{
		//Do Nothing
	}
}
add_action('wp_head', 'woobizz_productlist_rws1', 100);
//-----------------------------------------------------------------------
//END RESPONSIVE WITH SIDEBAR
//-----------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START PRODUCTS PER PAGE
//----------------------------------------------------------------------------
function woobizz_productlist_products_per_page( $cols ) {
	$woobizz_productlist_totalproductsidebar= get_option(WOOBIZZLIST.'_woobizz_productlist_totalproductsidebar');
	$woobizz_productlist_totalproductnosidebar= get_option(WOOBIZZLIST.'_woobizz_productlist_totalproductnosidebar');
		if (is_active_sidebar('sidebar-1') ){	
			$wbl_productlist_show_number= $woobizz_productlist_totalproductsidebar;
		} else {
			$wbl_productlist_show_number= $woobizz_productlist_totalproductnosidebar;
		}
	
	$cols = $wbl_productlist_show_number;
	return $cols;
}
add_filter( 'loop_shop_per_page', 'woobizz_productlist_products_per_page', 20 );
//---------------------------------------------------------------------------- 
//END PRODUCTS PER PAGE
//----------------------------------------------------------------------------