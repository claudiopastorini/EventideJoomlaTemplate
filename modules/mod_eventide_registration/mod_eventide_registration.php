<?php
/**
 * Eventide - Registration Module Entry Point
 */
 
// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
 
$title = $params->get('title', 'The most simpliest way to launch your event');
$body = $params->get('body', 'The registration body to show');
$legend = $params->get('legend', 'Register your event');
$post_url = $params->get('post_url', '#');
$button_text =  $params->get('button_text', 'Register');


require JModuleHelper::getLayoutPath('mod_eventide_registration');