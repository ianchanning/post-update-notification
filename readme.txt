=== Post Update Notification ===
Contributors: icc97
Tags: notify, notification, email updates, change notification, alerts
Requires at least: 3.1
Tested up to: 4.1.1
Stable tag: 0.2.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Post Update Notification sends an email to site administrators when a post is updated.

== Description ==

Post Update Notification is a very simple plugin that sends an email to site administrators when a post is updated. 
It's designed to do that and just that.

The emails provide the following information:

* Subject: [Name of your website] Updated post
* {Title} ({link}) updated by {login}


== Installation ==

1. Install Post Update Notification either via the WordPress.org plugin directory, or by uploading the files to your server.
1. Activate it via the Plugins administration page.

== Frequently Asked Questions ==

= Who gets notified? =

All users with the role 'Administrator'

= Can others get notified? =

The plugin is very simple and designed as such so to be without a UI. Feel free to modify the plugin as required.

= Can I customise the emails? =

You can customise the text of the emails through translations.

Use the languages/post-update-notification.pot with POEdit to create a post-update-notification.mo file in the WP_LANG directory.

== Changelog ==

= 0.2.0 =
* Improvement: Get the version numbers consistent and add in an extra FAQ about translations

= 0.1.0 =
* The initial plugin that worked but was very basic
