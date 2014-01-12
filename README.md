Pico Custom Post Preview Plugin
===============================

Provides ability to customise a post's preview text (mainly useful for blogs).

## Installation

### Requirements

php >= 5.3.0 (stristr)

### Install

1. Download a copy and extract the `pico_custom_post_preview.php` in your `plugins` folder;
2. [Setup your theme][cpp_setup_theme];
3. Enjoy it :)


## How it works

If you want to build your blog with [Pico CMS][pico-git],
you likely need some post preview, like WordPress `<!--more-->` tag does and so on.
Pico allow to use `{{ page.excerpt }}` which is
just first `$config['excerpt_length']` (40 by default) words of clear text (without tags and any rendering).

It's no pretty nice, so this plugin provides you a better alternative.

Deciede by yourself where post-preview should stop.
Just add `<!--cut-here-->` tag into `.md` file where it is needed.
As result, in the `page.cpp_preview` twig-variable will be all rendered text before `<!--cut-here-->` tag,
or `page.excerpt` otherwise (if tag wasn't found).
Also you could append some text after such post-preview (` &hellip;` by default).


### Setup theme

All you need to do is to add `{{ page.cpp_preview }}` directive into your theme's `index.html`
in the place where you want a post preview (for example, just instead `{{ page.excerpt }}`).

#### Example

```html
{% for page in pages %}
{% if page.date and not(page.url == base_url~'/') %}
<div class="post">
    <h2><a href="{{ page.url }}">{{ page.title }}</a></h2>
    <p class="meta">{{ page.date_formatted }}</p>
    <div class="excerpt">{{ page.cpp_preview }}</div>
</div>
{% endif %}
{% endfor %}
```

### Configuration

You can change the defaults, by editing your `config.php` file.

```php
$config['cpp_read_more_tag'] = '<!--cut-here-->'; // default
$config['cpp_read_more_text'] = ' &hellip;'; // default (mean correct ' ...')
```

## License

MIT.


[cpp_setup_theme]:https://github.com/Jecomire/pico-custom-post-preview-plugin#setup-theme
[pico-git]:https://github.com/gilbitron/Pico
