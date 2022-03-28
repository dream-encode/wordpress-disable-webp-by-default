<?php
/**
 * Disable WebP By Default
 *
 * @package disable-webp-by-default
 * @author David Baumwald <david@dream-encode.com>
 * @license MIT
 */

/**
 * Plugin Name: Disable WebP By Default
 * Author: David Baumwald
 * Description: A small plugin to disable WebP image creation on image upload by default.
 * Version: 0.1.0
 * Network: true
 * License: MIT
 * Text Domain: disable-webp-by-default
 * Requires PHP: 7.0
 * Requires at least: 5.8
 * GitHub Plugin URI: https://github.com/dream-encode/disable-webp-by-default
 * Primary Branch: main
 */

namespace DreamEncode;

// Bail early if accessed directly around WP.
defined( 'ABSPATH' ) || die( 'We\'re sorry, but you can not directly access this file.' );

// Define the current plugin version.
define( 'DE_DISABLE_WEBP_BY_DEFAULT_VERSION', '0.1.0' );

add_filter( 'wp_upload_image_mime_transforms', '__return_empty_array' );
