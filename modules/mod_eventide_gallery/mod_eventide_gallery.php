<?php
/**
 * Eventide - Gallery Module Entry Point
 */
 
// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
 
$title = $params->get('title', 'Promotional gallery');
$subtitle = $params->get('subtitle', 'This fantastic gallery is only a starter!');
$body = $params->get('body', 'Bla bla bla');
$text_position = $params->get('text_position', '0');
$photos = $params->get('photos', []);
$album_url =  $params->get('album_url', 'https://www.flickr.com/photos/flickr/albums/');


require JModuleHelper::getLayoutPath('mod_eventide_gallery');