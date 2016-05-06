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
	 * List of networks available.
	 */
	private static $choices = [
		'facebook' => 'Facebook',
		'twitter' => 'Twitter',
		'instagram' => 'Instagram',
		'linkedin' => 'LinkedIn',
	];

	/**
	 * Filter name for filtering networks.
	 */
	const FILTER = 'ln_elements_social_links';

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
						'name' => 'social_links',
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
								'type' => 'select',
								'instructions' => '',
								'required' => 1,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'choices' => apply_filters( self::FILTER, self::$choices ),
								'default_value' => array(),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 1,
								'ajax' => 0,
								'placeholder' => '',
								'disabled' => 0,
								'readonly' => 0,
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
								'label' => 'New window',
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
				'location' => $locations,
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
