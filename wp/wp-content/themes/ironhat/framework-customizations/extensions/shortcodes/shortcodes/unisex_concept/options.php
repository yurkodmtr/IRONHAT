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
	'tabs' => array (
		'type'          => 'addable-popup',
		'label'         => __( 'Tabs', 'fw' ),
		'popup-title'   => __( 'Add/Edit Tabs', 'fw' ),
		'desc'          => __( 'Create your tabs', 'fw' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
			'tab_image'   => array(
			    'type'  => 'upload',
			    'label' => __('Image', 'fw'),
			    'desc'  => __('Description', 'fw'),
			    'images_only' => true,
			)
		)
	)
);
