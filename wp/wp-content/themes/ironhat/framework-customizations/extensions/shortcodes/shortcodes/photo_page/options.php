<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'title' => array(
		'label'        => __('Title', '{domain}'),
		'type'         => 'text'
	),
	'photos' => array (
		'type'          => 'addable-popup',
		'label'         => __( 'Photos', 'fw' ),
		'popup-title'   => __( 'Add/Edit Photo', 'fw' ),
		'desc'          => __( 'Create your photo', 'fw' ),
		'template'      => '<img class="photopage_admin_img_thumb" src="{{= image.url }}" >',
		'popup-options' => array(
			'image'   => array(
			    'type'  => 'upload',
			    'label' => __('Image', '{domain}'),
			    'desc'  => __('Description', '{domain}'),
			    'images_only' => true,
			),
		),
	),
);
