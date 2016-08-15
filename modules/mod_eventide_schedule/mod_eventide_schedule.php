<?php
/**
 * Eventide - Schedule Module Entry Point
 */
 
// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
 
$title = $params->get('title', 'Event schedule');
$subtitle = $params->get('subtitle', 'This year only fantastic events for you!');
$body = $params->get('body', 'Bla bla bla');
$schedule_pdf = '#';

$schedule =  $params->get('schedule', []);


require JModuleHelper::getLayoutPath('mod_eventide_schedule');