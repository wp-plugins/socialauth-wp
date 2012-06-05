=== Socialauth-WordPress ===
Contributors: tsg@brickred.com
Donate link: http://www.brickred.com/contact-us
Tags: hybridauth, authentication, contacts, friendlist, socialauth, providers, social-media
Requires at least: 3.0.0
Tested up to: 3.3.2
Stable tag: trunk
License: MIT License
License URI: http://www.opensource.org/licenses/MIT

SocialAuth-WP a Wordpress 3.0+ plugin which enables social login integration and other services through different providers (eg. Facebook, Twitter).

== Description ==

SocialAuth-WP a Wordpress 3.0+ plugin derived from popular PHP based HybridAuth library. Inspired from other Wordpress social login plugins, this plugin seamlessly integrates into any Wordpress 3.0+ application and enables social login integration through different service providers. All you have to do is to configure the plugin from settings page before you can start using it. SocialAuth-WP hides all the intricacies of generating signatures and token, doing security handshakes and provides an out of the box a simple solution to interact with providers.

Please check out our [detailed wiki](http://code.google.com/p/socialauth-wp/) for complete information on this plugin.

== Installation ==

* Login to your wordpress site as admin, go to plugins menu and search for "SocialAuth-WP".
* Add the plugin to you plugins directory.
* From the plugin administration, enable the plugin.
* Go to Settings > SocialAuth-WP  from left side menu.
* Configure plugin settings such as enabling one or more providers and providing your application keys.
* Go to login page and see the magic.

== Frequently Asked Questions ==

= Where can I find more information? =

Please check out our [detailed wiki](http://code.google.com/p/socialauth-wp/) for complete information on this plugin.

= Where will I get the application keys? =

Application keys need to be generated for each provider you want to enable. For example, to enable your WordPress users to login with their Facebook account, register your blog as a Facebook application. You will be provided with application keys, which you can use in the settings page for SocialAuth-WP.

= Which providers are supported by the plugin? =

The plugin supports all providers supported by HybridAuth library. All major providers such as Facebook, Google, Twitter, LinkedIn, Yahoo are supported. Please check out the [HybridAuth page](http://hybridauth.sourceforge.net/userguide.html) for the complete list. 

= I downloaded and enabled the plugin, but no providers appear on login page. What's wrong? =

Once you have downloaded and enabled the plugin, you need to go to the settings page and enable one or providers.

== Screenshots ==

1. Login screen with enabled providers
2. Twitter authentication screen
3. Twitter redirecting back to your application
4. Profile of the authenticated user showing user data from Twitter

== Changelog ==

= 1.0 =
* First stable release

== Upgrade Notice ==

None

== Live Demo ==

See the [live demo](http://opensource.brickred.com/wordpress/wp-login.php) now!

== Features == 

* Authenticate users with Facebook, Yahoo, Google, MSN, Twitter, MySpace and LinkedIn etc (Provider support depends on provider supported by HybridAuth library).
* Access profile of logged in user (Email, First name, Last name, Profile picture)
* See contacts/friends of logged in user. Friend information contains information such as email, profile URL and name.
* More control over logout from application as well as authenticating provider.
* Blog administrators can control the default role for users who register via SocialAuth-WP.

== Benefits ==

* Your blog users – Instead of creating new account on website, users can use their existing accounts from popular providers like Facebook etc. making it easier for them to access/contribute content.
* Blog administrators/owners - With no registration requirement, users can quickly login to the site and use its features. Further, users trust big providers (like Facebook etc.) making them comfortable in login process. This fast and trusted login process definitely attracts potential users and increase site popularity. Site administrator can set the permission for users who will login with external login provider.