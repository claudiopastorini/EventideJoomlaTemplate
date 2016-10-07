<?php
/**
 * Eventide - Video Module Entry Point
 */
 
// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
 
$title = $params->get('title', 'Promotional video');
$subtitle = $params->get('subtitle', 'This fantastic video is only a starter!');
$body = $params->get('body', '');

$reg = '/https:\/\/www\.youtube\.com\/watch\?v=(\w+)/';
$video_url = $params->get('video_url', 'https://www.youtube.com/watch?v=');
preg_match($reg, $video_url, $match);
$video_code = $match[1];

$text_position = $params->get('text_position', '1');
$channel_url =  $params->get('channel_url', 'https://www.youtube.com/channel/');


require JModuleHelper::getLayoutPath('mod_eventide_video');