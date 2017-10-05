<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'title' => array(
		'label'        => __('Title', 'fw'),
		'type'         => 'text',
		'help'  => __('Welcome Title', 'fw'),
	),
	'descr' => array(
		'label'        => __('Description', 'fw'),
		'type'         => 'text',
		'help'  => __('Welcome Description', 'fw'),
	),
	'image_large'   => array(
	    'type'  => 'upload',
	    'label' => __('Image large', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'images_only' => true,
	),
	'image_small'   => array(
	    'type'  => 'upload',
	    'label' => __('Image small', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'images_only' => true,
	)
);
