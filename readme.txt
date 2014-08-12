=== Memberful WP ===
Contributors: matt-button, drewstrojny
Tags: memberful, member, memberships, recurring payments, recurring billing, paywall, subscriptions, stripe, oauth, oauth2
Requires at least: 3.6
Tested up to: 3.9.1
Stable tag: 1.11.0
License: GPLv2 or later

Sell memberships and restrict access to content with WordPress and Memberful.

== Description ==

A simple WordPress membership plugin that integrates your site with [Memberful](https://memberful.com). Memberful is a service for selling subscriptions to your website with [Stripe](https://stripe.com).

Features include:

* Automatic syncing of your Memberful member data to WordPress.
* Single sign on: Members are automatically signed into WordPress when they sign in to Memberful.
* Create a paywall and restrict access to content. Quickly protect any posts or pages right from your WordPress edit screen.
* A widget with links to sign in and manage your account (update credit card, cancel subscription, etc.).
 
== Installation ==
 
1. Install Memberful WP via the WordPress.org plugin directory, or download the file and visit Plugins => Add New => Upload from your WordPress dashboard.
2. Activate the WordPress service from your Memberful account.
3. From the plugin screen in your WordPress dashboard paste in your registration key and click the "Connect to Memberful" button.

== Frequently Asked Questions ==

= Do I need a Memberful account to use the plugin? =

Yes. Memberful is online [membership software](https://memberful.com), and the plugin connects with the Memberful service to bring content protection and single sign on features to your WordPress website.

= Can I protect content on my WordPress website? =

Yes, you can [protect WordPress content](https://memberful.com/help/integrate/services/wordpress/protect-wordpress-content/) with Memberful. Every page and post features an meta box where you can set permissions. We also include [several helpful functions](https://memberful.com/help/integrate/services/wordpress/wordpress-functions/) for use in WordPress themes or plugins.

= How do I contribute to Memberful WP or report bugs? =

Glad you asked! We manage development of the plugin over at the [Memberful WP Github repository](https://github.com/memberful/memberful-wp). Please report any bugs there. If you want to help fix something or contribute a feature, submit a [pull request](https://help.github.com/articles/using-pull-requests).

== Screenshots ==

1. Sync your members and their permissions.
2. Restrict access to posts or pages.
3. Simple sign in and account management widget.

== Changelog ==

= 1.11.0 =
* Ensure the overlay targets both http and https varients of the sign in page.

= 1.10.0 =
* Fix regression that re-introduced ability to create duplicate users.
* Prevent the plugin from changing usernames for existing users.

= 1.9.0 =
* Store product description when syncing them from Memberful.
* Fix bug when switching to a different Memberful site, then signing in as a member from the old site.

= 1.8.1 =
* Fix plugin deployment problem.

= 1.8.0 =
* Add a fix that prevents duplicate users from being created during sign in.

= 1.7.1 =
* Remove a couple of debug lines that accidentally got included with 1.7.0.

= 1.7.0 =
* Internal improvements to the mapping of Memberful members to WordPress users. We now only create a mapping once the user has been created. Mapping errors are recorded to the internal error log.

= 1.6.2 =
* Update supported version tag.
* Fix choosing correct role for members when updating role settings.

= 1.6.1 =
* Fix determining current role when syncing roles.

= 1.6.0 =
* Improve how we handle the situation when a WP user account is created before Memberful member, then the Memberful member signs in.
* Introduce role mapping (see options page for more details).
* Add cron job for ensuring member profiles are kept up to date.
* Deprecate old helpers and shortcodes that reference "products", see our documentation [on functions](https://memberful.com/help/integrate/services/wordpress/wordpress-functions/) and [shortcodes](https://memberful.com/help/integrate/services/wordpress/wordpress-shortcodes/) for new versions.
* Allow admins to protect posts and pages in bulk. This will replace existing access rules for the posts and pages.
* Show admins a message if cURL extension is not installed.
* If the user signs into Memberful without using the overlay, and they weren't trying to access a specific page then the plugin used to send them to the Memberful account page. It now sends them to the WP homepage.
* Allow plugins to add/remove links in profile widget using `memberful_wp_widget_args` filter.
* Allow authors to see the content of shortcodes without purchasing required plans/products.
* Improve the mapping of Memberful members to WP members in edge cases.
* Allow author to remove current marketing text.

= 1.5.0 =
* Improve overlay's handling of members being signed into Memberful, but not WP.

= 1.4.0 =
* Enable new overlay interface after connecting to Memberful.

= 1.3.2 =
* Make the CDN host configurable via `MEMBERFUL_EMBED_HOST` constant.

= 1.3.1 =
* Load the JS for the overlay via Memberful's CDN.

= 1.3.0 =
* Add initial JS for upcoming reach popup.
* Fix bug with setting `MEMBERFUL_SSL_VERIFY`.

= 1.2.0 =
* Allow plugins to change the URL the user is sent to after sign in/sign out via `memberful_wp_after_sign_in_url`/`memberful_wp_after_sign_out_url` filters.

= 1.1.3 =
* Ensure errors are shown to users when authentication fails.

= 1.1.1 =
* Ensure that marketing content is swapped in before WP applies default filters to content.

= 1.1.0 =
* WordPress 3.8 styling compatibility updates.
* Move plugin option to the settings menu.

= 1.0.2 =
* Send `Cache-Control: private` header from Memberful endpoints.

= 1.0.1 =
* Cleanup release to ensure WordPress can correctly auto-upgrade the plugin.

= 1.0.0 =
* New and improved Restrict Access meta box on the post and page edit screen.
* Improved included debugging tools.
* Stop syncing deleted subscriptions and products.
* Added more shortcodes: account, sign in, sign out.
* Improved error messages.
* Ensure proper re-directs on sign out.


