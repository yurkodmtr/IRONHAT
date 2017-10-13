<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'title' => array(
		'label'        => __('Title', '{domain}'),
		'type'         => 'text'
	),
	'top_text' => array(
		'label'        => __('Top text', '{domain}'),
		'type'         => 'textarea'
	),
	'bottom_text' => array(
		'label'        => __('Bottom Text', '{domain}'),
		'type'         => 'textarea'
	),
);
