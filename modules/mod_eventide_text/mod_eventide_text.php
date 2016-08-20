<?php
/**
 * Eventide - Text Module Entry Point
 */
 
// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
 
$title = $params->get('title', 'Main goal of the event');
$subtitle = $params->get('subtitle', 'This fantastic event is only for you!');
$body = $params->get('body', 'Bla bla bla');

require JModuleHelper::getLayoutPath('mod_eventide_text');