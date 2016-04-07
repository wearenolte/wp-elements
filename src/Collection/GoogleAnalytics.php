<?php namespace Lean\Elements\Collection;

use Lean\Elements\Register;

/**
 * Class GoogleAnalytics.
 *
 * @package Lean\Elements\Collection
 */
class GoogleAnalytics
{
	/**
	 * Get the element's default location.
	 *
	 * @return array
	 */
	public static function get_default_location() {
		return array(
			'param' => 'options_page',
			'operator' => '==',
			'value' => Register::OPTIONS_PAGE,
		);
	}

	/**
	 * Init
	 */
	public static function init( $locations ) {
		if ( function_exists( 'acf_add_local_field_group' ) ) {
			acf_add_local_field_group( array(
				'key' => 'group_5706815f03eb3',
				'title' => 'Google Analytics',
				'fields' => array(
					array(
						'key' => 'field_570681cc43f79',
						'label' => 'UID',
						'name' => 'google_analytics_uid',
						'type' => 'text',
						'instructions' => 'Fill in your Google Analytics ID',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => 50,
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => 'UA-999999-99',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
						'readonly' => 0,
						'disabled' => 0,
					),
				),
				'location' => array( $locations ),
				'menu_order' => 0,
				'position' => 'normal',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => 1,
				'description' => '',
			) );
		}
	}
}
