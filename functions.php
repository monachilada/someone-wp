<?
	add_filter('show_admin_bar', '__return_false');
	
	/* UTILITY FUNCTIONS */
	function get_template_name($id) {
		return str_replace('.php', '', get_post_meta($id, '_wp_page_template', true));
	}
	
	function get_thumbnail_src($id = null, $size = 'full') {
		global $post;
		
		if(!$id) {
			$id = $post->ID;
		}
		
		return get_attachment_src(get_post_thumbnail_id($id), $size);
	}
	
	function get_attachment_src($id = null, $size = 'full') {
		$img = wp_get_attachment_image_src($id, $size);
		return $img[0];
	}
	
	/* DEVELOPMENT FUNCTIONS */
	function debug() {
		echo '<pre>';
			foreach(func_get_args() as $arg) {
				print_r($arg);
			}
		echo '</pre>';
	}
?>