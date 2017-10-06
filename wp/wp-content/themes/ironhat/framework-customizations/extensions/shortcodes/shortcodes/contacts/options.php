<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'title' => array(
		'label'        => __('Title', '{domain}'),
		'type'         => 'text'
	),
	'descr' => array(
		'label'        => __('Description', '{domain}'),
		'type'         => 'textarea'
	),
	'googlemaplat' => array(
		'label'        => __('googleMapLat', '{domain}'),
		'type'         => 'text'
	),
	'googleMapLng' => array(
		'label'        => __('googleMapLng', '{domain}'),
		'type'         => 'text'
	),
);
