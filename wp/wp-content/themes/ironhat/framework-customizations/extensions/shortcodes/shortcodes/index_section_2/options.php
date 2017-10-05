<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'title' => array(
		'label'        => __('Title', 'fw'),
		'type'         => 'text'
	),
	'date' => array(
		'label'        => __('Date', 'fw'),
		'type'         => 'text'
	),
	'time' => array(
		'label'        => __('Time', 'fw'),
		'type'         => 'text'
	),
	'image'   => array(
	    'type'  => 'upload',
	    'label' => __('Image', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'images_only' => true,
	),
);
