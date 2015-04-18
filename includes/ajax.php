<?php
/**
 * Ajax.php
 *
 * @package Carte Blanche Bourbon
 * @since 2015
 */



	/**
	 * Registers social shares, callable via ajax.
	 *
	 * @access public
	 * @return void
	 */

	add_action( 'wp_ajax_social_share', 'cb_social_share' );
	add_action( 'wp_ajax_nopriv_social_share', 'cb_social_share' );

	function cb_social_share(){

		$pid = $_POST['postid'];
		$type = $_POST['type'];

		$meta = get_post_meta( $pid, 'social_counts', true );
		if( empty( $meta['tw'] ) ) $meta['tw'] = 0;
		if( empty( $meta['fb'] ) ) $meta['fb'] = 0;
		if( empty( $meta['in'] ) ) $meta['in'] = 0;
		if( empty( $meta['pin'] ) ) $meta['pin'] = 0;
		if( empty( $meta['gp'] ) ) $meta['gp'] = 0;

		$shorts = array(
			'twitter'	=> 'tw',
			'facebook' 	=> 'fb',
			'linkedin'	=> 'in',
			'pinterest'	=> 'pin',
			'google'	=> 'gp'
		);

		$short = $shorts[ $type ];
		$meta[$short] = $meta[$short] + 1;

		update_post_meta( $pid, 'social_counts', $meta );

		echo 'success';
		die();
	}