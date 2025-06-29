<?php
/**
 * Plugin Name: Mark Highlight Parser
 * Description: Converts ==highlighted text== into <mark>highlighted text</mark> in post content.
 * Version: 1.0
 * Author: Jimmy Baum
 */

function parse_mark_syntax($content) {
	return preg_replace('/==(.+?)==/', '<mark>$1</mark>', $content);
}

add_filter('the_content', 'parse_mark_syntax');
add_filter('the_excerpt', 'parse_mark_syntax');
add_filter('widget_text', 'parse_mark_syntax'); // Optional: handles widgets