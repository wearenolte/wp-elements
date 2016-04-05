<?php namespace Lean\Elements;

/**
 * Class to provide predefined ACF elements.
 */
class Register
{
	const OPTIONS_PAGE = 'options';

	const GENERAL_PAGE = 'options-general';

	/**
	 * Registered elements.
	 *
	 * @var array
	 */
	private static $_elements = [];

	/**
	 * Init. Takes the location and the elements to register in that location.
	 *
	 * @param string $element  Element name.
	 * @param array  $location Array suitable for ACF location parameter.
	 * @throws \Exception
	 */
	public static function add( $element, $location = [] ) {
		if ( ! isset( self::$_elements[ $element ] ) ) {
			self::$_elements[ $element ] = [];
		}

		if ( empty( $location ) ) {
			$default_location = self::get_default_location( $element );

			if ( $default_location ) {
				self::$_elements[ $element ][] = $default_location;
			} else {
				throw new \Exception( 'Element ' . $element . ' does not have a default location. You must supply the $location parameter.' );
			}
		} else {
			self::$_elements[ $element ][] = $location;
		}

		add_action( 'init', [ __CLASS__, 'register_elements' ] );
	}

	/**
	 * Get an element's class name.
	 *
	 * @param string $element The element.
	 * @return string
	 */
	public static function get_element_class_name( $element ) {
		return __NAMESPACE__ . '\\Collection\\' . $element;
	}

	/**
	 * Register required elements.
	 */
	public static function register_elements() {
		foreach ( self::$_elements as $element => $locations ) {
			$class = self::get_element_class_name( $element );

			if ( is_callable( $class, 'init' ) ) {
				call_user_func( [ $class, 'init' ], $locations );
			}
		}
	}

	/**
	 * Get an element's default location if it has one.
	 *
	 * @param string $element The element.
	 * @return bool
	 */
	public static function get_default_location( $element ) {
		$class = self::get_element_class_name( $element );

		if ( is_callable( $class, 'get_default_location' ) ) {
			return call_user_func( [ $class, 'get_default_location' ] );
		}

		return false;
	}

	/**
	 * Set-up an options page and some pre-defined sub pages.
	 *
	 * @param array $sub_pages Predefined sub pages.
	 */
	public static function options_page( $sub_pages = [] ) {
		if ( function_exists( 'acf_add_options_page' ) ) {
			acf_add_options_page( [
				'page_title' => 'Options',
				'menu_title' => 'Options',
				'menu_slug' => self::OPTIONS_PAGE,
				'capability' => 'edit_posts',
				'redirect' => false,
				'position' => 4,
			] );

			foreach ( $sub_pages as $sub_page ) {
				switch ( $sub_page ) {
					case self::GENERAL_PAGE:
						acf_add_options_sub_page( [
							'page_title' 	=> 'General Options',
							'menu_title' 	=> 'General',
							'parent_slug' 	=> self::OPTIONS_PAGE,
							'menu_slug' => self::GENERAL_PAGE,
						] );
						break;

					default:
						continue;
				}
			}
		}
	}
}
