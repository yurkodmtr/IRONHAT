<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'title' => array(
		'label'        => __('Title', '{domain}'),
		'type'         => 'text'
	),
	'image_1'   => array(
	    'type'  => 'upload',
	    'label' => __('Image 1', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'images_only' => true,
	),	
	'image_2'   => array(
	    'type'  => 'upload',
	    'label' => __('Image 2', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'images_only' => true,
	),
);
