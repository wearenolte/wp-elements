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
			parse_str( wp_parse_url( $url, PHP_URL_QUERY ) );
			if ( isset( $v ) ) {
				return 'https://www.youtube.com/embed/' . $v;
			}
		}

		if ( strpos( $url, 'vimeo' ) !== false && strpos( $url, 'player' ) === false ) {
			$id = wp_parse_url( $url, PHP_URL_PATH );
			if ( isset( $id ) ) {
				return 'https://player.vimeo.com/video' . $id;
			}
		}

		return $url;
	}
}
