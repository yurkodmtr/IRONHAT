<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'title' => array(
		'label'        => __('Title', 'fw'),
		'type'         => 'text',
		'help'  => __('Title', 'fw'),
	),
	'descr' => array(
		'label'        => __('Description', 'fw'),
		'type'         => 'text',
		'help'  => __('Description', 'fw'),
	),
	'img_1'   => array(
	    'type'  => 'upload',
	    'label' => __('Image large', '{domain}'),
	    'desc'  => __('img_1', '{domain}'),
	    'images_only' => true,
	),
	'img_1_descr' => array(
		'label'        => __('Description', 'fw'),
		'type'         => 'text',
		'help'  => __('img_1 Description', 'fw'),
	),
	'img_2'   => array(
	    'type'  => 'upload',
	    'label' => __('Image large', '{domain}'),
	    'desc'  => __('img_2', '{domain}'),
	    'images_only' => true,
	),
	'img_2_descr' => array(
		'label'        => __('Description', 'fw'),
		'type'         => 'text',
		'help'  => __('img_2 Description', 'fw'),
	),
	'img_3'   => array(
	    'type'  => 'upload',
	    'label' => __('Image large', '{domain}'),
	    'desc'  => __('img_3', '{domain}'),
	    'images_only' => true,
	),
	'img_3_descr' => array(
		'label'        => __('Description', 'fw'),
		'type'         => 'text',
		'help'  => __('img_3 Description', 'fw'),
	),
	'img_4'   => array(
	    'type'  => 'upload',
	    'label' => __('Image large', '{domain}'),
	    'desc'  => __('img_4', '{domain}'),
	    'images_only' => true,
	),
	'img_4_descr' => array(
		'label'        => __('Description', 'fw'),
		'type'         => 'text',
		'help'  => __('img_4 Description', 'fw'),
	),
);
