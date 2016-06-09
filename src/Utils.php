<?php namespace Lean\Elements;

/**
 * Class Utils
 *
 * @package Lean\Elements
 */
class Utils
{
	/**
	 * Convert a "watch" url into an "embed"
	 * Eg https://www.youtube.com/watch?v=OQZKh8Bjdv0 to https://www.youtube.com/embed/OQZKh8Bjdv0
	 * Or https://vimeo.com/155086124 to https://player.vimeo.com/video/155086124
	 *
	 * @param string $url The video url.
	 * @return string
	 */
	public static function get_video_embed_url( $url ) {
		if ( strpos( $url, 'youtube' ) !== false && strpos( $url, 'watch' ) !== false ) {
			$parts = wp_parse_url( $url );

			if ( is_array( $parts ) && isset( $parts['query'] ) ) {
				parse_str( $parts['query'] );
				if ( isset( $v ) ) {
					return 'https://www.youtube.com/embed/' . $v;
				}
			}
		}

		if ( strpos( $url, 'vimeo' ) !== false && strpos( $url, 'player' ) === false ) {
			$parts = wp_parse_url( $url );

			if ( is_array( $parts ) && isset( $parts['path'] ) ) {
				return 'https://player.vimeo.com/video' . $parts['path'];
			}
		}

		return $url;
	}
}
