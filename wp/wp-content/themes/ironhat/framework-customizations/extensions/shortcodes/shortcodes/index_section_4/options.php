<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'title' => array(
		'label'        => __('Title', 'fw'),
		'type'         => 'text'
	),
	'descr' => array(
		'label'        => __('Description', 'fw'),
		'type'         => 'textarea'
	)
);
