<?php namespace Lean\Elements\Collection;

use Lean\Elements\Register;

/**
 * Class SiteIdentity.
 *
 * @package Lean\Elements\Collection
 */
class SiteIdentity
{
	const LOGO_KEY = 'field_570317e13e3f9';

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
				'key' => 'group_570317cf540d9',
				'title' => 'Site Identity',
				'fields' => array(
					array(
						'key' => self::LOGO_KEY,
						'label' => 'Logo',
						'name' => 'site_logo',
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
