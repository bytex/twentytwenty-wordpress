=== TwentyTwenty ===
Contributors: cs123
Tags: images, before-and-after, before and after, comparison, slider, zurb, twentytwenty, twenty twenty
Requires at least: 3.5.1
Tested up to: 3.8.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Show before-and-after images in your blog, with an interactive slider that allows users to compare them. 

== Description ==

This plugin brings the power of Zurb TwentyTwenty to your blog. From our friends at Zurb:

> We recently needed a way to showcase the visual differences between two images. Folks tend to typically place two images next to each other in hopes that it'll be clear exactly what changed. We even thought about having one image fade into another. But we knew there had to be an even better way to highlight the differences between two images. A way that would bring everything into focus.

[Find out more about TwentyTwenty, and see examples, ](http://zurb.com/playground/twentytwenty) on Zurb's site.

With this plugin, you just two images to a post or page and surround them with a shortcode to  create a before-and-after image.

== Installation ==

= Using The WordPress Dashboard =

1. Navigate to the 'Add New' in the plugins dashboard
2. Search for 'TwentyTwenty'
3. Click 'Install Now'
4. Activate the plugin on the Plugin dashboard

== Instructions ==

1. **Make sure your before and after images are the same size.** The before-and-after box will use the size of the first image, and assume that the second image is the same size.

2. Insert two images into a post.

4. Before the first image, type `[twentytwenty]`. After the second image, type `[/twentytwenty]`.

Example:

`
[twentytwenty]
<a href="http://localhost:8888/wp-content/uploads/2014/03/5426317242_835693f9d2_b.jpg"><img src="http://localhost:8888/wp-content/uploads/2014/03/5426317242_835693f9d2_b.jpg" alt="5426317242_835693f9d2_b" width="500" height="400" class="alignnone size-medium wp-image-4" /></a>

<a href="http://localhost:8888/wp-content/uploads/2014/03/5787259771_c10650c8f4_b.jpg"><img src="http://localhost:8888/wp-content/uploads/2014/03/5787259771_c10650c8f4_b.jpg" alt="5787259771_c10650c8f4_b" width="500" height="400" class="alignnone size-medium wp-image-5" /></a>
[/twentytwenty]
`

== Screenshots ==

1. Before and after images in a post
2. TwentyTwenty shortcodes in the WordPress editor

== Changelog ==

= 1.0 =
* Initial version

== Upgrade Notice ==

= 1.0 =
* Initial version
