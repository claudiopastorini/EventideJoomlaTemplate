<?php
/**
 * Eventide - Map Module Entry Point
 */
 
// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
 
$place = $params->get('place', 'Sydney Exhibition Centre');
$address = $params->get('address', 'Glebe Island - 41 James Craig Road <br>Rozelle NSW 2039');
$latitude = $params->get('latitude', '-33.867363');
$longitude = $params->get('longitude', '151.183539');
$api_key = $params->get('api_key', 'YOUR_API_KEY_HERE');
$marker = $params->get('marker', '');

require JModuleHelper::getLayoutPath('mod_eventide_map');