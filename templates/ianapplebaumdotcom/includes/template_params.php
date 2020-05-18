<?php

/********************************* BASIC **************************************/

if( $this->params->get( 'vg_logo_type' ) ){
	$vg_logo_type = $this->params->get( 'vg_logo_type' );
}else{
	$vg_logo_type = 'image';
}
	// image
	if( $this->params->get( 'vg_logo_image' ) ){
		$vg_logo_image = $this->baseurl . '/' . $this->params->get( 'vg_logo_image' );
	}else{
		$vg_logo_image = $this->baseurl . '/templates/' . $this->template . '/images/logo.svg';
	}
	// text
	if( $this->params->get( 'vg_logo_text' ) ){
		$vg_logo_text = $this->params->get( 'vg_logo_text' );
	}else{
		$vg_logo_text = '';
	}

$vg_analytics 	= $this->params->get( 'vg_analytics' );
$vg_css 		= $this->params->get( 'vg_css' );
$vg_copy 		= $this->params->get( 'vg_copy' );
$vg_top         = $this->params->get( 'vg_top', 1 );
$vg_color       = $this->params->get( 'vg_color', '#c10841' );
$vg_layout      = $this->params->get( 'vg_layout', 'fullwith' );
if( $this->params->get( 'vg_bodybg' ) ) {
    $vg_bodybg = 'background-image:url(' . $this->baseurl . '/' . $this->params->get('vg_bodybg') . ')';
}

/********************************** FONTS *************************************/

$vg_fontlink_1      = $this->params->get( 'vg_fontlink_1', 'http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic' );
$vg_fontfamily_1    = $this->params->get( 'vg_fontfamily_1', '\'Arimo\', sans-serif' );


/********************************** HEADER *************************************/

$vg_searchpos   = $this->params->get( 'vg_searchpos', 1 );
$vg_phonepos    = $this->params->get( 'vg_phonepos', 1 );


/********************************** SECTIONS *************************************/

$vg_bodybottom_img      = $this->params->get( 'vg_bodybottom_img' );
$vg_inner_img           = $this->params->get( 'vg_inner_img' );
$vg_showcase_img        = $this->params->get( 'vg_showcase_img' );
$vg_user_img            = $this->params->get( 'vg_user_img' );
$vg_box_img             = $this->params->get( 'vg_box_img' );
$vg_karma_img           = $this->params->get( 'vg_karma_img' );
$vg_team_img            = $this->params->get( 'vg_team_img' );
$vg_bottom_img          = $this->params->get( 'vg_bottom_img' );

$vg_bodybottom_video    = $this->params->get( 'vg_bodybottom_video' );
$vg_inner_video         = $this->params->get( 'vg_inner_video' );
$vg_showcase_video      = $this->params->get( 'vg_showcase_video' );
$vg_user_video          = $this->params->get( 'vg_user_video' );
$vg_box_video           = $this->params->get( 'vg_box_video' );
$vg_karma_video         = $this->params->get( 'vg_karma_video' );
$vg_team_video          = $this->params->get( 'vg_team_video' );
$vg_bottom_video        = $this->params->get( 'vg_bottom_video' );

$vg_bodybottom_hex      = $this->params->get( 'vg_bodybottom_hex', '#fff' );
$vg_inner_hex           = $this->params->get( 'vg_inner_hex', '#fff' );
$vg_showcase_hex        = $this->params->get( 'vg_showcase_hex', '#fff' );
$vg_user_hex            = $this->params->get( 'vg_user_hex', '#fff' );
$vg_box_hex             = $this->params->get( 'vg_box_hex', '#fff' );
$vg_karma_hex           = $this->params->get( 'vg_karma_hex', '#fff' );
$vg_team_hex            = $this->params->get( 'vg_team_hex', '#fff' );
$vg_bottom_hex          = $this->params->get( 'vg_bottom_hex', '#fff' );

// Custom color from url param. Example: ?vgcolor=f89406
if( ($this->params->get( 'vg_color_preview', 0 ) == 1) and JRequest::getVar('vgcolor') ){
    if( strlen(JRequest::getVar('vgcolor')) == 6 ){
        $vg_color = '#' . JRequest::getVar('vgcolor');
    }
}