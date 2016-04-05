<?php namespace Lean\Elements\Collection;

use Lean\Elements\Register;

/**
 * Class ContactDetails.
 *
 * @package Lean\Elements\Collection
 */
class ContactDetails
{
	const LOGO_KEY = 'field_56fd2a53b4f1b';

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
		if ( function_exists( 'acf_add_local_field_group' ) ) {
			acf_add_local_field_group( array(
				'key' => 'group_56fd2972b29d5',
				'title' => 'Contact Details',
				'fields' => array(
					array(
						'key' => self::LOGO_KEY,
						'label' => 'Logo',
						'name' => 'contact_details_logo',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'id',
						'preview_size' => 'thumbnail',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
					),
					array(
						'key' => 'field_56fd2a5ab4f1c',
						'label' => 'Address',
						'name' => 'contact_details_address',
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
						'key' => 'field_56fd2a65b4f1d',
						'label' => 'Phone',
						'name' => 'contact_details_phone',
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
						'key' => 'field_56fd2a69b4f1e',
						'label' => 'Email',
						'name' => 'contact_details_email',
						'type' => 'email',
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
