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

	'is_visible' => array(
	    'type'  => 'checkbox',
	    'value' => true,
	    'label' => __('Is visible image 1', '{domain}'),
	    'text'  => __('Yes', '{domain}'),
	),
	'image_2'   => array(
	    'type'  => 'upload',
	    'label' => __('Image 2', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'images_only' => true,
	),
);
