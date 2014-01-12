Pico Custom Post Preview Plugin
===============================

## Idea

If you want to build your blog with [Pico CMS][pico-git],
you likely need some post preview, like WordPress `<!--more-->` tag does and so on.
Pico allow to use `{{ page.excerpt }}` which is
just first `$config['excerpt_length']` (40 by default) words of clear text (without tags and any rendering).

It's no pretty nice, so this plugin provide you a better alternative.

Deciede by yourself where post-preview should stop.
Just add `<!--cut-here-->` tag into `.md` file where it is needed.
As result, in the `page.cpp_preview` variable will be all rendered text before `<!--cut-here-->` tag,
or `page.excerpt` otherwise (if tag wasn't found).
Also you could append some text after such post-preview (` &hellip;` by default)


## Requirements

php >= 5.3.0 (stristr)

## Installation

To install plugin, simply download the `pico_custom_post_preview.php`
and put it in the plugins directory `{picoInstallation}/plugins/`


## Text File Markup

After copying plugin's main file, you'll be able to access `{{ page.cpp_preview }}` directive,
which is the needed one.

## Configs




[pico-git]:https://github.com/gilbitron/Pico
