Pico Custom Post Preview Plugin
===============================

## Idea

If you want to build your blog with [Pico CMS][pico-git],
you likely need some post preview, like WP-readmore and so on.
Pico allow to use `{{ page.excerpt }}` which is
just first `$config['excerpt_length']` (40 by default) clear text-words (without tags and any rendering).

It's no pretty nice, so this plugin provide you a better alternative.


## Requirements

php >= 5.3.0 (stristr)

## Installation

To install plugin, simply download the `pico_custom_post_preview.php`
and put it in the plugins directory `{picoInstallation}/plugins/`


## Text File Markup

After copying plugin's main file, you'll be able to access `{{ page.cpp_preview }}` directive,
which is the needed one.


[pico-git]:https://github.com/gilbitron/Pico
