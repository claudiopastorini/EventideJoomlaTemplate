<?php
/**
 * Eventide - Sponsors Module Entry Point
 */
 
// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
 
$sponsors = $params->get('sponsors', []);


require JModuleHelper::getLayoutPath('mod_eventide_sponsors');