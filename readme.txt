=== Disable WebP By Default ===
Contributors: davidbaumwald
Tags: image, media, webp, jpeg
Requires at least: 5.8
Tested up to: 5.9.2
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A small plugin to disable WebP image creation on image upload by default.

== Description ==

Proposed to be included in WordPress 6.0 is a new feature to generate and use webp images by default.  Specifically, when an image is uploaded, a WebP version of every image subsize is created.  According to the proposal(https://make.wordpress.org/core/2022/03/28/enabling-webp-by-default/), one downside is that generating WebP versions along with the original JPEGs will "use an additional ~70% of the storage space to store both file types."  Although this is hugely benifial to most websites and, more importantly, their users, some site owners may not be immediately able to increase the size of their storage.  As stop-gap measure, this small plugin simply disables WebP creation on upload.  For more information, see the proposal or the Trac ticket(https://core.trac.wordpress.org/ticket/55443).

== Installation ==

1. Upload the `disable-webp-by-default` folder to the plugins directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.

== Changelog ==

= 0.1.0 =
* Initial release
