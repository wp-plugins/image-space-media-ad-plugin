<?php
/***************************************************************************
Plugin Name: Image Space Media Plugin
Plugin URI: http://www.imagespacemedia.com/wpplugin.php
Version: 0.1.1
Author: Image Space Media Inc.
Author URI: http://www.imagespacemedia.com
Description: The ISM plugin optimizes your WordPress blog for Image Space Media's in-image advertising technology. With the ISM plugin, WordPress users can seamlessly integrate Image Space Media's in-image advertising solution into their website and generate ad revenue.
***************************************************************************/
/*
License: GNU General Public License (GPL) version 3
*/

/**
Image Space Media Class
*/
class ImageSpaceMediaPlugin
{
	/* Constructor */
	public function __construct()
	{}

	public function getJavascriptTag()
	{
		echo "<script src=\"http://services.picadmedia.com/js/picad.js\" type=\"text/javascript\"></script><script type=\"text/javascript\">picadService.initialize();</script>";
	}
}
/* Add actions */
$ism_ad_provider = new ImageSpaceMediaPlugin(); 
add_action('wp_footer', array(&$ism_ad_provider, 'getJavascriptTag'));
?>