<?php namespace Lean\Elements\Collection;

use Lean\Elements\Register;

/**
 * Class SocialLinks.
 *
 * @package Lean\Elements\Collection
 */
class SocialLinks
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
	 * Initialise the fields.
	 *
	 * @param array $locations The locations where we want this group to appear.
	 */
	public static function init( $locations ) {
		if ( function_exists( 'acf_add_local_field_group' ) ) :

			acf_add_local_field_group( array(
				'key' => 'group_5702884df1213',
				'title' => 'Social Links',
				'fields' => array(
					array(
						'key' => 'field_57028873c1ed8',
						'label' => 'Items',
						'name' => 'items',
						'type' => 'repeater',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'collapsed' => '',
						'min' => '',
						'max' => '',
						'layout' => 'table',
						'button_label' => 'Add Row',
						'sub_fields' => array(
							array(
								'key' => 'field_5702887ec1ed9',
								'label' => 'Network',
								'name' => 'network',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array(
								'key' => 'field_57028883c1eda',
								'label' => 'Link',
								'name' => 'link',
								'type' => 'url',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
							),
							array(
								'key' => 'field_5703fef9a8495',
								'label' => 'Open in a new window',
								'name' => 'new_window',
								'type' => 'true_false',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'message' => '',
								'default_value' => 1,
							),
						),
					),
				),
				'location' => array(
					$locations
				),
				'menu_order' => 0,
				'position' => 'normal',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => 1,
				'description' => '',
			) );

		endif;
	}
}
