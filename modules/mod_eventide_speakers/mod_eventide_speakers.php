<?php
/**
 * Eventide - Speakers Module Entry Point
 */
 
// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
 
$title = $params->get('title', 'Great speakers');
$subtitle = $params->get('subtitle', 'These speakers will come to our great event!');
$speakers = $params->get('speakers', []);

require JModuleHelper::getLayoutPath('mod_eventide_speakers');