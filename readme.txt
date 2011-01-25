=== JJ NextGen JQuery Cycle ===
Contributors: JJ Coder
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=PSCMPVDADYP74&lc=NZ&item_name=JJNextGenJQueryCycle&item_number=jjcoder_cycle&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Tags: image, picture, photo, widgets, gallery, images, nextgen-gallery, jquery, slideshow, cycle lite, javascript
Requires at least: 2.8
Tested up to: 3.0.4
Stable tag: 1.0.1

Allows you to pick a gallery from the 'NextGen Gallery' plugin to use with 'JQuery Cycle Lite'.

== Description ==

The 'JJ NextGen JQuery Cycle' allows you to create a 'Cycle Lite' (http://jquery.malsup.com/cycle/lite/) as a widget or as a shortcode.
This plugin uses the 'NextGen Gallery' plugin for its images.

Other plugins for NextGen Gallery and jQuery:

- JJ NextGen JQuery Slider (http://wordpress.org/extend/plugins/jj-nextgen-jquery-slider/)
- JJ NextGen JQuery Carousel (http://wordpress.org/extend/plugins/jj-nextgen-jquery-carousel/)
- JJ NextGen Unload (http://wordpress.org/extend/plugins/jj-nextgen-unload/)

Requirements:

- NextGen Gallery Plugin (http://wordpress.org/extend/plugins/nextgen-gallery/)

NextGen Gallery Integration:

- This plugin uses the original width and height of the image uploaded so make sure the images are the correct dimensions when uploaded.
- If a width and height are defined under the configuration all images will be resized to those dimensions (Highly recommended).
- Alt & Title Text Field: Provide a full url here and the image will link to this.
- Description Field: Will be used as image alt text.

You can specify the following parameters:

NOTE: sc means shortcode:

- Title: Title. Leave blank for no title. (sc: title="My Cycle Lite")
- Gallery: Leave blank to use all galleries or choose a gallery to use. (sc: gallery="galleryid")
- Order: Order to display results in. You can choose; Random, Latest First, Oldest First, or NextGen Sortorder. Random will still work when a page is cached. (sc: order="random"|"asc"|"desc"|"sortorder")
- Max pictures: The maximum amount of pictures to use. (sc: max_pictures="6")
- HTML id: HTML id to use. Defaults to 'cycle_lite'. Needs to be different for multiple instances on same page. (sc: html_id="cycle_lite")
- Image width: Width of image. Defaults to 200. Recommended to set this. (sc: width="200")
- Image height: height of image. Defaults to 200. Recommended to set this. Will prevent a floating problem if set. (sc: height="150")
- Center: Centers content in container. Requires width to be set. (sc: center="1")

Cycle Lite settings:

Please check the cycle lite home page form more information (http://jquery.malsup.com/cycle/lite/).

- timeout: milliseconds between slide transitions (0 to disable auto advance).. (sc: timeout="4000")
- speed: speed of the transition (any valid fx speed value). (sc: speed="1000")
- height: container height. (sc: height="auto")
- sync: true if in/out transitions should occur simultaneously. (sc: sync="1")
- fit: force slides to fit container. (sc: fit="0")
- pause: true to enable "pause on hover". (sc: pause="1")
- delay: additional delay (in ms) for first transition (hint: can be negative). (sc: delay="2)

Shortcode Examples:

- [jj-ngg-jquery-cycle html_id="about-cycle-lite" gallery="1" width="200" height="150"]
- [jj-ngg-jquery-cycle title="Hello" html_id="about-cycle-lite" gallery="1" timeout="3000" speed="1000"]
- [jj-ngg-jquery-cycle html_id="about-cycle" gallery="2" width="150" height="100" timeout="3000" speed="1000" fit="1"]

== Installation ==

Please refer to the description for requirements and how to use this plugin.

1. Copy the entire directory from the downloaded zip file into the /wp-content/plugins/ folder.
2. Activate the "JJ NextGen JQuery Cycle" plugin in the Plugin Management page.
3. Refer to the description to use the plugin as a widget and or a shortcode.

== Frequently Asked Questions ==

None yet.

Email: wpjjcoder@gmail.com

== Screenshots ==

1. Screenshot

== Changelog ==

- 1.0: First version.

== Contributors ==

JJ Coder wpjjcoder@gmail.com