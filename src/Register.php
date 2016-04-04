<?php namespace Lean\Elements;

/**
 * Class to provide predefined ACF elements.
 */
class Register
{
	/**
	 * Registered elements.
	 *
	 * @var array
	 */
	private static $_elements = [];

	/**
	 * Init. Takes the location and the elements to register in that location.
	 *
	 * @param array $location Array suitable for ACF location parameter.
	 * @param arrat $elements Array of element names to show in this location.
	 */
	public static function add( $element, $location ) {
		if ( ! isset( self::$_elements[ $location ] ) ) {
			self::$_elements[ $location ] = [];
		}
		self::$_elements[ $location ][] = $element;

		add_action( 'init', [ __CLASS__, 'register_elements' ] );
	}

	/**
	 * Register required elements in a location.
	 */
	public static function register_elements() {
		foreach ( self::$_elements as $location => $elements ) {
			foreach ( $elements as $element ) {
				$class = __NAMESPACE__ . '\\Options\\' . $element;
				if ( method_exists( $class, 'init' ) ) {
					call_user_func( [ $class, 'init' ], $location );
				}
			}
		}
	}
}
