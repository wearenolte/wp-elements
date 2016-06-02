<?php namespace Lean\Elements\Collection;

use Lean\Elements\Utils;

/**
 * Class Hero.
 *
 * @package Lean\Elements\Collection
 */
class Hero
{
	const HEADLINE = 'field_5731d08981bb0';
	const TAGLINE = 'field_5731d0a081bb1';
	const BACKGROUND = 'field_5750768b22dc7';
	const CTA = 'field_5731d0af81bb2';

	/**
	 * Initialise the fields.
	 *
	 * @param array $locations The locations where we want this group to appear.
	 */
	public static function init( $locations ) {
		if ( function_exists( 'acf_add_local_field_group' ) ) :

			add_filter( 'acf/format_value/type=repeater', [ __CLASS__, 'format_background' ], 10, 3 );

			acf_add_local_field_group( apply_filters( 'ln_elements_hero_group', array(
				'key' => 'group_5731d0865aa2b',
				'title' => 'Hero',
				'fields' => array(
					array(
						'key' => self::HEADLINE,
						'label' => 'Headline',
						'name' => 'hero_headline',
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
						'name' => 'hero_tagline',
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
						'key' => self::BACKGROUND,
						'label' => 'Background',
						'name' => 'hero_background',
						'type' => 'repeater',
						'instructions' => 'Set the background. It can be either and image slider, a video or none.',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'collapsed' => '',
						'min' => 1,
						'max' => 1,
						'layout' => 'block',
						'button_label' => 'Add Row',
						'sub_fields' => array(
							array(
								'key' => 'field_575076d822dc8',
								'label' => 'Type',
								'name' => 'type',
								'type' => 'radio',
								'instructions' => 'The background type.',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'choices' => array(
									'images' => 'Image Slider',
									'video' => 'Video',
									'none' => 'None',
								),
								'other_choice' => 0,
								'save_other_choice' => 0,
								'default_value' => 'Image',
								'layout' => 'horizontal',
							),
							array(
								'key' => 'field_575076f222dc9',
								'label' => 'Image Slider',
								'name' => 'images',
								'type' => 'gallery',
								'instructions' => 'Select the images for the background slider. Just select a single image for a static background.',
								'required' => 0,
								'conditional_logic' => array(
									array(
										array(
											'field' => 'field_575076d822dc8',
											'operator' => '==',
											'value' => 'images',
										),
									),
								),
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'min' => 1,
								'max' => 10,
								'preview_size' => 'thumbnail',
								'library' => 'all',
								'min_width' => 3200,
								'min_height' => 1340,
								'min_size' => '',
								'max_width' => '',
								'max_height' => '',
								'max_size' => '',
								'mime_types' => '',
							),
							array(
								'key' => 'field_575078219ea44',
								'label' => 'Video',
								'name' => 'video',
								'type' => 'url',
								'instructions' => 'The YouTube or Vimeo video url.',
								'required' => 0,
								'conditional_logic' => array(
									array(
										array(
											'field' => 'field_575076d822dc8',
											'operator' => '==',
											'value' => 'video',
										),
									),
								),
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => 'https://vimeo.com/66966424',
							),
						),
					),
					array(
						'key' => self::CTA,
						'label' => 'Call To Action',
						'name' => 'hero_cta',
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

	/**
	 * Format the background field.
	 *
	 * @param array $value The value.
	 * @param int $post_id The post id.
	 * @param array $field The acf field definition.
	 * @return mixed
	 */
	public static function format_background( $value, $post_id, $field ) {
		if ( self::BACKGROUND !== $field['key'] ) {
			return $value;
		}

		foreach ( $value as $index => $item ) {
			if ( 'images' === $item['type'] ) {
				unset( $value[ $index ]['video'] );
			}

			if ( 'video' === $item['type'] ) {
				$value[ $index ]['video'] = Utils::get_video_embed_url( $item['video'] );
				unset( $value[ $index ]['images'] );
			}

			if ( 'none' === $item['type'] ) {
				unset( $value[ $index ]['images'] );
				unset( $value[ $index ]['video'] );
			}
		}

		return $value;
	}
}
