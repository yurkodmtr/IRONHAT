<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'title' => array(
		'label'        => __('Title', '{domain}'),
		'type'         => 'text'
	),
	'concerts' => array (
		'type'          => 'addable-popup',
		'label'         => __( 'Tabs', 'fw' ),
		'popup-title'   => __( 'Add/Edit Tabs', 'fw' ),
		'desc'          => __( 'Create your tabs', 'fw' ),
		'template'      => '<img class="photopage_admin_img_thumb" src="{{= image.url }}" >',
		'popup-options' => array(
			'name'   => array(
				'type'  => 'text',
				'label' => __('Назва', '{domain}')
			),
			'day'   => array(
				'type'  => 'text',
				'label' => __('День тижня', '{domain}')
			),
			'time' => array(
				'type'  => 'text',
				'label' => __('Час', '{domain}')
			),
			'date' => array(
				'type'  => 'text',
				'label' => __('Дата', '{domain}')
			),
			'image'   => array(
			    'type'  => 'upload',
			    'label' => __('Image', '{domain}'),
			    'desc'  => __('Description', '{domain}'),
			    'images_only' => true,
			),
		)
	),    

);
