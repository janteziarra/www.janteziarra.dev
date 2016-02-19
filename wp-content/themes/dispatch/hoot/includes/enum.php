<?php
/**
 * Data Sets
 *
 * @package hoot
 * @subpackage framework
 * @since hoot 2.0.0
 */

/**
 * Get background repeat settings
 *
 * @param string $return array to return icons|sections|list/empty
 * @return array
 */
if ( !function_exists( 'hoot_enum_icons' ) ):
function hoot_enum_icons( $return = 'list' ) {
	$return = ( empty( $return ) ) ? 'list' : $return;
	$default = Hoot_Options_Helper::icons( $return );
	return apply_filters( 'hoot_enum_icons', $default, $return );
}
endif;

/**
 * Get background repeat settings
 *
 * @return array
 */
if ( !function_exists( 'hoot_enum_background_repeat' ) ):
function hoot_enum_background_repeat() {
	$default = array(
		'no-repeat' => __( 'No Repeat', 'dispatch' ),
		'repeat-x'  => __( 'Repeat Horizontally', 'dispatch' ),
		'repeat-y'  => __( 'Repeat Vertically', 'dispatch' ),
		'repeat'    => __( 'Repeat All', 'dispatch' ),
		);
	return apply_filters( 'hoot_enum_background_repeat', $default );
}
endif;

/**
 * Get background positions
 *
 * @return array
 */
if ( !function_exists( 'hoot_enum_background_position' ) ):
function hoot_enum_background_position() {
	$default = array(
		'top left'      => __( 'Top Left', 'dispatch' ),
		'top center'    => __( 'Top Center', 'dispatch' ),
		'top right'     => __( 'Top Right', 'dispatch' ),
		'center left'   => __( 'Middle Left', 'dispatch' ),
		'center center' => __( 'Middle Center', 'dispatch' ),
		'center right'  => __( 'Middle Right', 'dispatch' ),
		'bottom left'   => __( 'Bottom Left', 'dispatch' ),
		'bottom center' => __( 'Bottom Center', 'dispatch' ),
		'bottom right'  => __( 'Bottom Right', 'dispatch')
		);
	return apply_filters( 'hoot_enum_background_position', $default );
}
endif;

/**
 * Get background attachment settings
 *
 * @return array
 */
if ( !function_exists( 'hoot_enum_background_attachment' ) ):
function hoot_enum_background_attachment() {
	$default = array(
		'scroll' => __( 'Scroll Normally', 'dispatch' ),
		'fixed'  => __( 'Fixed in Place', 'dispatch'),
		);
	return apply_filters( 'hoot_enum_background_attachment', $default );
}
endif;

/**
 * Get background types
 *
 * @return array
 */
if ( !function_exists( 'hoot_enum_background_type' ) ):
function hoot_enum_background_type() {
	$default = array(
		'predefined' => __( 'Predefined Pattern', 'dispatch' ),
		'custom'     => __( 'Custom Image', 'dispatch' ),
		);
	return apply_filters( 'hoot_enum_background_type', $default );
}
endif;

/**
 * Get background patterns
 *
 * @return array
 */
if ( !function_exists( 'hoot_enum_background_pattern' ) ):
function hoot_enum_background_pattern() {
	$relative = trailingslashit( substr( trailingslashit( HOOT_IMAGES ) . 'patterns' , ( strlen( THEME_URI ) + 1 ) ) );
	$default = array(
		0 => trailingslashit( HOOT_IMAGES ) . 'patterns/0_preview.jpg',
		$relative . '1.png' => trailingslashit( HOOT_IMAGES ) . 'patterns/1_preview.jpg',
		$relative . '2.png' => trailingslashit( HOOT_IMAGES ) . 'patterns/2_preview.jpg',
		$relative . '3.png' => trailingslashit( HOOT_IMAGES ) . 'patterns/3_preview.jpg',
		$relative . '4.png' => trailingslashit( HOOT_IMAGES ) . 'patterns/4_preview.jpg',
		$relative . '5.png' => trailingslashit( HOOT_IMAGES ) . 'patterns/5_preview.jpg',
		$relative . '6.png' => trailingslashit( HOOT_IMAGES ) . 'patterns/6_preview.jpg',
		$relative . '7.png' => trailingslashit( HOOT_IMAGES ) . 'patterns/7_preview.jpg',
		$relative . '8.png' => trailingslashit( HOOT_IMAGES ) . 'patterns/8_preview.jpg',
		);
	return apply_filters( 'hoot_enum_background_pattern', $default );
}
endif;

/**
 * Get background attachment
 *
 * @return array
 */
if ( !function_exists( 'hoot_enum_background_attachment' ) ):
function hoot_enum_background_attachment() {
	$default = array(
		'scroll' => __( 'Scroll Normally', 'dispatch' ),
		'fixed'  => __( 'Fixed in Place', 'dispatch')
		);
	return apply_filters( 'hoot_enum_background_attachment', $default );
}
endif;

/**
 * Get font sizes.
 *
 * Returns an indexed array of all recognized font sizes.
 * Values are integers and represent a range of sizes from
 * smallest to largest.
 *
 * @return array
 */
if ( !function_exists( 'hoot_enum_font_sizes' ) ):
function hoot_enum_font_sizes( $min = 9, $max = 82 ) {
	static $cache = array();
	if ( empty( $cache ) || $min != 9 || $max != 82 ) {
		$range = wp_parse_args( apply_filters( 'hoot_enum_font_sizes', array() ), array(
			'min' => $min,
			'max' => $max,
			) );
		$sizes = range( $range['min'], $range['max'] );
		$sizes = array_map( 'absint', $sizes );
	}
	if ( empty( $cache ) && $min == 9 && $max -= 82 )
		$cache = $sizes;
	return $sizes;
}
endif;

/**
 * Get font sizes for optiosn array
 *
 * Returns an indexed array of all recognized font sizes.
 * Values are integers and represent a range of sizes from
 * smallest to largest.
 *
 * @return array
 */
if ( !function_exists( 'hoot_enum_font_sizes_array' ) ):
function hoot_enum_font_sizes_array( $min = 9, $max = 82, $postfix = 'px' ) {
	$sizes = hoot_enum_font_sizes( $min, $max );
	$output = array();
	foreach ( $sizes as $size )
		$output[ $size ] = $size . $postfix;
	return $output;
}
endif;

/**
 * Get font faces.
 *
 * Returns an array of all recognized font faces.
 * Keys are intended to be stored in the database
 * while values are ready for display in in html.
 *
 * @param string $return array to return websafe|google-fonts|empty/list
 * @return array
 */
if ( !function_exists( 'hoot_enum_font_faces' ) ):
function hoot_enum_font_faces( $return = '' ) {
	$default = ( empty( $return ) || $return == 'list' ) ?
		array_merge( Hoot_Options_Helper::fonts('websafe'), Hoot_Options_Helper::fonts('google-fonts') ):
		Hoot_Options_Helper::fonts($return);
	return apply_filters( 'hoot_enum_font_faces', $default, $return );
}
endif;

/**
 * Get font styles.
 *
 * Returns an array of all recognized font styles.
 * Keys are intended to be stored in the database
 * while values are ready for display in in html.
 *
 * @return array
 */
if ( !function_exists( 'hoot_enum_font_styles' ) ):
function hoot_enum_font_styles() {
	$default = array(
		'none'                     => __( 'None', 'dispatch' ),
		'italic'                   => __( 'Italic', 'dispatch' ),
		'bold'                     => __( 'Bold', 'dispatch' ),
		'bold italic'              => __( 'Bold Italic', 'dispatch' ),
		'lighter'                  => __( 'Light', 'dispatch' ),
		'lighter italic'           => __( 'Light Italic', 'dispatch' ),
		'uppercase'                => __( 'Uppercase', 'dispatch' ),
		'uppercase italic'         => __( 'Uppercase Italic', 'dispatch' ),
		'uppercase bold'           => __( 'Uppercase Bold', 'dispatch' ),
		'uppercase bold italic'    => __( 'Uppercase Bold Italic', 'dispatch' ),
		'uppercase lighter'        => __( 'Uppercase Light', 'dispatch' ),
		'uppercase lighter italic' => __( 'Uppercase Light Italic', 'dispatch' )
		);
	return apply_filters( 'hoot_enum_font_styles', $default );
}
endif;

/**
 * Get social profiles and icons
 *
 * Returns an array of all recognized social profiles.
 * Keys are intended to be stored in the database
 * while values are ready for display in in html.
 *
 * @return array
 */
if ( !function_exists( 'hoot_enum_social_profiles' ) ):
function hoot_enum_social_profiles() {
	return apply_filters( 'hoot_enum_social_profiles', array(
		'fa-amazon'         => __( 'Amazon', 'dispatch' ),
		'fa-behance'        => __( 'Behance', 'dispatch' ),
		'fa-bitbucket'      => __( 'Bitbucket', 'dispatch' ),
		'fa-btc'            => __( 'BTC', 'dispatch' ),
		'fa-codepen'        => __( 'Codepen', 'dispatch' ),
		'fa-delicious'      => __( 'Delicious', 'dispatch' ),
		'fa-deviantart'     => __( 'Deviantart', 'dispatch' ),
		'fa-digg'           => __( 'Digg', 'dispatch' ),
		'fa-dribbble'       => __( 'Dribbble', 'dispatch' ),
		'fa-dropbox'        => __( 'Dropbox', 'dispatch' ),
		'fa-envelope'       => __( 'Email', 'dispatch' ),
		'fa-facebook'       => __( 'Facebook', 'dispatch' ),
		'fa-flickr'         => __( 'Flickr', 'dispatch' ),
		'fa-foursquare'     => __( 'Foursquare', 'dispatch' ),
		'fa-github'         => __( 'Github', 'dispatch' ),
		'fa-google-plus'    => __( 'Google Plus', 'dispatch' ),
		'fa-instagram'      => __( 'Instagram', 'dispatch' ),
		'fa-jsfiddle'       => __( 'JS Fiddle', 'dispatch' ),
		'fa-lastfm'         => __( 'Last FM', 'dispatch' ),
		'fa-linkedin'       => __( 'Linkedin', 'dispatch' ),
		'fa-mixcloud'       => __( 'Mixcloud', 'dispatch' ),
		'fa-paypal'         => __( 'Paypal', 'dispatch' ),
		'fa-pinterest'      => __( 'Pinterest', 'dispatch' ),
		'fa-reddit'         => __( 'Reddit', 'dispatch' ),
		'fa-rss'            => __( 'RSS', 'dispatch' ),
		'fa-scribd'         => __( 'Scribd', 'dispatch' ),
		'fa-skype'          => __( 'Skype', 'dispatch' ),
		'fa-slack'          => __( 'Slack', 'dispatch' ),
		'fa-slideshare'     => __( 'Slideshare', 'dispatch' ),
		'fa-soundcloud'     => __( 'Soundcloud', 'dispatch' ),
		'fa-spotify'        => __( 'Spotify', 'dispatch' ),
		'fa-stack-exchange' => __( 'Stack Exchange', 'dispatch' ),
		'fa-stack-overflow' => __( 'Stack Overflow', 'dispatch' ),
		'fa-steam'          => __( 'Steam', 'dispatch' ),
		'fa-stumbleupon'    => __( 'Stumbleupon', 'dispatch' ),
		'fa-trello'         => __( 'Trello', 'dispatch' ),
		'fa-tripadvisor'    => __( 'Trip Advisor', 'dispatch' ),
		'fa-tumblr'         => __( 'Tumblr', 'dispatch' ),
		'fa-twitch'         => __( 'Twitch', 'dispatch' ),
		'fa-twitter'        => __( 'Twitter', 'dispatch' ),
		'fa-vimeo-square'   => __( 'Vimeo', 'dispatch' ),
		'fa-wikipedia-w'    => __( 'Wikipedia', 'dispatch' ),
		'fa-wordpress'      => __( 'Wordpress', 'dispatch' ),
		'fa-xing'           => __( 'Xing', 'dispatch' ),
		'fa-y-combinator'   => __( 'Y Combinator', 'dispatch' ),
		'fa-yelp'           => __( 'Yelp', 'dispatch' ),
		'fa-youtube'        => __( 'Youtube', 'dispatch' ),
	) );
}
endif;