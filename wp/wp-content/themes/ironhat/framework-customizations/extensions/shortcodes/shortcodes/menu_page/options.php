<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'title' => array(
		'label'        => __('Title', '{domain}'),
		'type'         => 'text'
	),
	'tab_ua' => array(
	    'type' => 'tab',
	    'title' => __('UA', '{domain}'),
	    'options' => array(
			'tab_ua_image_1'   => array(
			    'type'  => 'upload',
			    'label' => __('Image 1', '{domain}'),
			    'desc'  => __('Description', '{domain}'),
			    'images_only' => true,
			),	
			'tab_ua_image_2'   => array(
			    'type'  => 'upload',
			    'label' => __('Image 2', '{domain}'),
			    'desc'  => __('Description', '{domain}'),
			    'images_only' => true,
			),
			'tab_ua_image_3'   => array(
			    'type'  => 'upload',
			    'label' => __('Image 3', '{domain}'),
			    'desc'  => __('Description', '{domain}'),
			    'images_only' => true,
			),
			'tab_ua_image_4'   => array(
			    'type'  => 'upload',
			    'label' => __('Image 4', '{domain}'),
			    'desc'  => __('Description', '{domain}'),
			    'images_only' => true,
			),		
	    ),	    
	),
	'tab_pl' => array(
		'title' => __('PL', '{domain}'),
	    'type' => 'tab',
	    'options' => array(
	        'tab_pl_image_1'   => array(
			    'type'  => 'upload',
			    'label' => __('Image 1', '{domain}'),
			    'desc'  => __('Description', '{domain}'),
			    'images_only' => true,
			),	
			'tab_pl_image_2'   => array(
			    'type'  => 'upload',
			    'label' => __('Image 2', '{domain}'),
			    'desc'  => __('Description', '{domain}'),
			    'images_only' => true,
			),
			'tab_pl_image_3'   => array(
			    'type'  => 'upload',
			    'label' => __('Image 3', '{domain}'),
			    'desc'  => __('Description', '{domain}'),
			    'images_only' => true,
			),
			'tab_pl_image_4'   => array(
			    'type'  => 'upload',
			    'label' => __('Image 4', '{domain}'),
			    'desc'  => __('Description', '{domain}'),
			    'images_only' => true,
			),	       
	    ),	    
	),
	'tab_en' => array(
		'title' => __('EN', '{domain}'),
	    'type' => 'tab',
	    'options' => array(
	        'tab_en_image_1'   => array(
			    'type'  => 'upload',
			    'label' => __('Image 1', '{domain}'),
			    'desc'  => __('Description', '{domain}'),
			    'images_only' => true,
			),	
			'tab_en_image_2'   => array(
			    'type'  => 'upload',
			    'label' => __('Image 2', '{domain}'),
			    'desc'  => __('Description', '{domain}'),
			    'images_only' => true,
			),
			'tab_en_image_3'   => array(
			    'type'  => 'upload',
			    'label' => __('Image 3', '{domain}'),
			    'desc'  => __('Description', '{domain}'),
			    'images_only' => true,
			),
			'tab_en_image_4'   => array(
			    'type'  => 'upload',
			    'label' => __('Image 4', '{domain}'),
			    'desc'  => __('Description', '{domain}'),
			    'images_only' => true,
			),
	    ),	    
	),
);
