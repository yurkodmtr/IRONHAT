<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'title' => array(
		'label'        => __('Title', '{domain}'),
		'type'         => 'text'
	),
	'tab_id_1' => array(
	    'type' => 'tab',
	    'title' => __('Страва', '{domain}'),
	    'options' => array(
	    	'tab_id_1_title' => array(
				'label'        => __('Назва страви', '{domain}'),
				'type'         => 'text'
			),
			'tab_id_1_descr' => array(
				'label'        => __('Опис страви', '{domain}'),
				'type'         => 'textarea'
			),
			'tab_id_1_value_1' => array(
				'label'        => __('Вага', '{domain}'),
				'type'         => 'text'
			),
			'tab_id_1_value_2' => array(
				'label'        => __('Цiна', '{domain}'),
				'type'         => 'text'
			),			
	    ),	    
	),
	'tab_id_2' => array(
		'title' => __('Пиво', '{domain}'),
	    'type' => 'tab',
	    'options' => array(
	        'option_id_2_title'  => array( 
	        	'label'=> __('Назва', '{domain}'),
	        	'type' => 'text' 
	        ),	
	        'option_id_2_title_descr'  => array( 
	        	'label'=> __('Об`єм', '{domain}'),
	        	'type' => 'text' 
	        ),        
	        'tab_id_2_tabs' => array (
				'type'          => 'addable-popup',
				'label'         => __( 'Tabs', 'fw' ),
				'popup-title'   => __( 'Add/Edit Tabs', 'fw' ),
				'desc'          => __( 'Create your tabs', 'fw' ),
				'template'      => '{{=title}}',
				'popup-options' => array(
					'title'   => array(
						'type'  => 'text',
						'label' => __('Назва', '{domain}')
					),
					'price' => array(
						'type'  => 'text',
						'label' => __('Цiна', '{domain}')
					)
				)
			),
	    ),	    
	),
	'tab_id_3' => array(
		'title' => __('До пива', '{domain}'),
	    'type' => 'tab',
	    'options' => array(
	        'option_id_3_title'  => array( 
	        	'label'=> __('Назва', '{domain}'),
	        	'type' => 'text' 
	        ),
	        'tab_id_3_tabs' => array (
				'type'          => 'addable-popup',
				'label'         => __( 'Tabs', 'fw' ),
				'popup-title'   => __( 'Add/Edit Tabs', 'fw' ),
				'desc'          => __( 'Create your tabs', 'fw' ),
				'template'      => '{{=title}}',
				'popup-options' => array(
					'title'   => array(
						'type'  => 'text',
						'label' => __('Назва', '{domain}')
					),
					'weight' => array(
						'label'        => __('Вага', '{domain}'),
						'type'         => 'text'
					),
					'price' => array(
						'type'  => 'text',
						'label' => __('Цiна', '{domain}')
					)
				)
			),
	    ),	    
	),
);
