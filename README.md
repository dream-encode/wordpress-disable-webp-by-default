# Disable WebP By Default

* Plugin Name: Disable WebP By Default
* Contributors: davidbaumwald
* Tags: image, webp, media, jpeg
* License: MIT
* Requires PHP: 7.0
* Tested up to: 5.9.2
* Stable Tag: trunk

A small plugin to disable WebP image creation on image upload by default.

## Description

Proposed to be included in WordPress 6.0 is a new feature to generate and use webp images by default.  Specifically, when an image is uploaded, a WebP version of every image subsize is created.  According to [the proposal](https://make.wordpress.org/core/2022/03/28/enabling-webp-by-default/), one downside is that generating WebP versions along with the original JPEGs will "use an additional ~70% of the storage space to store both file types."  Although this is hugely benifial to most websites and, more importantly, their visitors, some site owners may not be immediately able to increase the size of their storage to accommodate the additional file type.  As stop-gap measure, this small plugin simply disables WebP creation on upload.  For more information, see the proposal or [the Trac ticket](https://core.trac.wordpress.org/ticket/55443).

# Changelog

= 0.1.0 =
* Initial pre-release.