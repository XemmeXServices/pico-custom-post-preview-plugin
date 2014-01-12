<?php

/**
 * Pico Custom post-preview plugin
 *
 * Use it, if you want to get rendered html-text,
 * breaked at some point (aka improved page.excerpt) for blog.
 * See README.md for more info
 *
 * @author Christian Evans
 * @link https://github.com/Jecomire/pico-custom-post-preview-plugin
 * @license http://opensource.org/licenses/MIT
 * @version 0.1
 */
class Pico_Custom_post_Preview {

	/* in config.php: cpp_read_more_tag */
	private $read_more_tag = '<!--cut-here-->';

	/* cpp_read_more_text */
	private $read_more_text = ' &hellip;';


	public function config_loaded(&$settings)
	{
		if (isset($settings['cpp_read_more_tag'])) {
			$this->read_more_tag = $settings['cpp_read_more_tag'];
		}

		if (isset($settings['cpp_read_more_text'])) {
			$this->read_more_text = $settings['cpp_read_more_text'];
		}
	}

	/* This hooks runs just after fill $data array (ie page.title and so on) */
	public function get_page_data(&$data, $page_meta)
	{
		$pos = 0;
		$pos = stripos ( $data['content'], $this->read_more_tag );
		$cutted = $data['excerpt'];

		if ($pos !== false) {
			/* if we find $read_more_tag in the content(parsed one) */
			/* NEED: php 5.3.0+ */
			$cutted = stristr($data['content'], $this->read_more_tag, true);
			$cutted .= $this->read_more_text;
		}

		/* Let's add new field into $data array -- i.e. cutted page.content */
		$data['cpp_preview'] = $cutted;
	}

}
