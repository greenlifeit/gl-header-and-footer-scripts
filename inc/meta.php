<?php
/**
 * Plugin meta for single post or page type.
 *
 * @package    Header and Footer Scripts
 * @author     Anand Kumar <anand@anandkumar.net>
 * @copyright  Copyright (c) 2013 - 20168, Anand Kumar
 * @link       http://digitalliberation.org/plugins/header-and-footer-scripts
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */ ?>
<div class="shfs_meta_control">
	<p>
		<textarea class="glhfs-textarea" name="_inpost_head_script[synth_header_script]" rows="5" style="width:100%;"><?php
			if ( ! empty( $meta['synth_header_script'] ) ) {
				echo esc_textarea( $meta['synth_header_script'] );
			} ?></textarea>
	</p>
	
	<p><?php _e( 'Add some code to <code>&lt;head&gt;</code>', 'glhfs' ); ?>.</p>
</div>
