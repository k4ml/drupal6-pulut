This module implements OpenID Provider support for Drupal 6.

By setting up this module, all users on the site get an OpenID in the form of
http://example.com/user/12345/identity, if the domain name is example.com and 
the user identifier is 12345. You can automatically alias this URL with 
pathauto module.

The module uses the xrds_simple.module API and the Drupal core OpenID API.

TODO:
  * Flush out hooks for extension support
  * Extension namespacing support
  * Better detection of 1.x vs. 2.x protocol use
  * HMAC-256 support (via hash() & php5)
