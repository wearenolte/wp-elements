<?php namespace Lean\Elements\Collection;

/**
 * Class Hero.
 *
 * @package Lean\Elements\Collection
 */
class Hero
{
	const HEADLINE = 'field_5731d08981bb0';
	const TAGLINE = 'field_5731d0a081bb1';
	const BACKGROUND_IMAGE = 'field_5731d194e56bc';
	const CPT = 'field_5731d0af81bb2';

	/**
	 * Initialise the fields.
	 *
	 * @param array $locations The locations where we want this group to appear.
	 */
	public static function init( $locations ) {
		if ( function_exists( 'acf_add_local_field_group' ) ) :

			acf_add_local_field_group( apply_filters( 'ln_elements_hero_group', array(
				'key' => 'group_5731d0865aa2b',
				'title' => 'Hero',
				'fields' => array(
					array(
						'key' => self::HEADLINE,
						'label' => 'Headline',
						'name' => 'headline',
						'type' => 'text',
						'instructions' => 'The main headline of the hero section.',
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
						'key' => self::TAGLINE,
						'label' => 'Tagline',
						'name' => 'tagline',
						'type' => 'textarea',
						'instructions' => 'Appears below the headline.',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => 2,
						'new_lines' => 'wpautop',
						'readonly' => 0,
						'disabled' => 0,
					),
					array(
						'key' => self::BACKGROUND_IMAGE,
						'label' => 'Background Image',
						'name' => 'background_image',
						'type' => 'image',
						'instructions' => 'The hero section\'s background image.',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'id',
						'preview_size' => 'medium',
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
						'key' => self::CPT,
						'label' => 'Call To Action',
						'name' => 'cta',
						'type' => 'repeater',
						'instructions' => 'The button in the hero section.',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'collapsed' => 'field_5731d0ee81bb3',
						'min' => 1,
						'max' => 1,
						'layout' => 'table',
						'button_label' => 'Add Row',
						'sub_fields' => array(
							array(
								'key' => 'field_5731d0ee81bb3',
								'label' => 'Label',
								'name' => 'label',
								'type' => 'text',
								'instructions' => 'The CTA\'s label.',
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
								'key' => 'field_5731d0fb81bb4',
								'label' => 'Link',
								'name' => 'link',
								'type' => 'text',
								'instructions' => 'The link the CTA leads to.',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => 'http://...',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array(
								'key' => 'field_5731d11881bb5',
								'label' => 'New Window',
								'name' => 'new_window',
								'type' => 'true_false',
								'instructions' => 'Open the link in a new window.',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'message' => '',
								'default_value' => 0,
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
				'hide_on_screen' => array(
					0 => 'the_content',
				),
				'active' => 1,
				'description' => '',
			) ) );

		endif;
	}
}
