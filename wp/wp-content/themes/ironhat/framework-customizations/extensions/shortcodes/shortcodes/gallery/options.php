<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'page_title' => array(
		'label'        => __('Page Title', '{domain}'),
		'type'         => 'text'
	),
	'events' => array (
		'type'          => 'addable-popup',
		'label'         => __( 'Add event', 'fw' ),
		'popup-title'   => __( 'Add/Edit event', 'fw' ),
		'desc'          => __( 'Create your event', 'fw' ),
		'template'      => '<img class="photopage_admin_img_thumb" src="{{= event_main_img.url }}" > - {{= event_title }}',
		'popup-options' => array(
			'event_title'   => array(
				'type'  => 'text',
				'label' => __('Назва', '{domain}')
			),		
			'event_main_img'   => array(
			    'type'  => 'upload',
			    'label' => __('Зображення', '{domain}'),
			    'desc'  => __('Description', '{domain}'),
			    'images_only' => true,
			),	
			'photos' => array (
				'type'          => 'addable-popup',
				'label'         => __( 'Add photos', 'fw' ),
				'popup-title'   => __( 'Add/Edit event', 'fw' ),
				'desc'          => __( 'Create your event', 'fw' ),
				'template'      => '<img class="photopage_admin_img_thumb" src="{{= photo_img.url }}" >',
				'popup-options' => array(	
					'photo_img'   => array(
					    'type'  => 'upload',
					    'label' => __('Зображення', '{domain}'),
					    'desc'  => __('Description', '{domain}'),
					    'images_only' => true,
					),	
				),
			),
		),
	),	
);
