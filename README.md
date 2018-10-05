# disable-comments

A WordPress plugin to disable the comment system. Comments and pings are disabled
for all contents (posts, pages, etc.). Comments related screens and menu items
are removed from the admin UI.

**Disclaimer:** I’m publishing this here because it might be useful to others,
but USE OF THIS SCRIPT IS ENTIRELY AT YOUR OWN RISK. I accept no liability from its use.  
That said, I’ve been using this plugin successfully for years and I’m interested in any
feature or security improvement. So please contact me for this kind of requests.

## Installation

You can drop the plugin folder in your `wp-content/plugins` or `wp-content/mu-plugins` directory.

If you use the `mu-plugins` directory, don’t forget to require it from an upper-level file
like `/wp-content/mu-plugins/index.php`:

```php
require_once __DIR__ .'/disable-comments/disable-comments.php';
```

This plugin doesn’t need any configuration, just install and it works.

No comments are deleted. You may remove this plugin at any time to get comment
system back again.

## Support

I’m interested in any feedback.

## Author

Jérôme Mulsant [https://rue-de-la-vieille.fr](https://rue-de-la-vieille.fr)