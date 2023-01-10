<?php

/**
* Plugin Name: Youtube Subs
* Description: Displays Youtube sub button and count.
* Author: Carlos Ramirez
* Author URL: cjramirez.tech
* Version: 1.0.0
* Text Domain: youtube-subs
*/

//Exists if accessed directly
defined('ABSPATH') or die('Get out of here!');

//Constatns should have a unique name so they don't interfere with other plugins
//Sets the plugin path constant to the path of of the plugin
define('YOUTUBE_SUBS_PATH', plugin_dir_path(__FILE__));

//Sets the plugin url contsant to the url of the plugin
define('YOUTUBE_SUBS_URL', plugin_dir_url(__FILE__));

//Sets the pligin const to the name of the plugin
define('YOUTUBE_SUBS', plugin_basename(__FILE__));

//Load classes
require_once(YOUTUBE_SUBS_PATH . 'inc/base/Enqueue.php');
require_once(YOUTUBE_SUBS_PATH . 'inc/base/YoutubeSubs.php');


//Create new instance of classes
$newEnqueue = new Enqueue();

//Call method from class
$newEnqueue->register();