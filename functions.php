<?php
/**
 * Portfolio+ child customization functions and definitions
 *
 *
 * @author Lisa  <barkingmadwc.com>
 * @license http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

/**
 * Changing the color of the admin bar to create a backup site to use as a simulator to train the client.
 * I want it to be easy to identify the difference between the live site and the simulator.
 */

add_action( 'wp_head', 'change_bar_color' );
add_action( 'admin_head', 'change_bar_color' );
function change_bar_color() {
	?>
	<style>
		#wpadminbar {
			background: #FF0000 !important;
		}
	</style>
	<?php
}


add_action( 'pre_get_posts', 'portfolio_plus_custom_order' );
function portfolio_plus_custom_order( $query ) {
	if ( 'portfolio' == $query->get( 'post_type' ) ) {
		if ( $query->get( 'order' ) == '' ) {
			$$query->set( 'order', 'ASC' );
		}
	}
}

/**
 * Custom field groups for single php on image post and helper text in post admin.
 * Created using ACF advanced custom fields plugin to generate code added here
 */

if ( function_exists( "register_field_group" ) ) {//helper textin admin of post
	register_field_group( array(
		'id'         => 'acf_post-help-text',
		'title'      => 'Help text :<i> Pick a format and category for this to work</i>',
		'fields'     => array(
			array(
				'key'     => 'field_53f2af3bae867',
				'label'   => 'Help text',
				'name'    => '',
				'type'    => 'message',
				'message' => '
	For Image post formats: Place image as <b> <i>featured image</i></b>, pick <b><i>category</i></b>.
	Content text and Painting Meta may be left empty.',
			),
		),
		'location'   => array(
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options'    => array(
			'position'       => 'acf_after_title',
			'layout'         => 'default',
			'hide_on_screen' => array(),
		),
		'menu_order' => - 1,
	) );
	/* 
	 * image post painting meta only added to admin editing page
	 * if image format is picked is optional content.
	 *  */

	register_field_group( array(
		'id'         => 'acf_painting-meta-optional',
		'title'      => 'Painting meta : optional',
		'fields'     => array(
			array(
				'key'           => 'field_53ee738cee16e',
				'label'         => 'Title',
				'name'          => 'title',
				'type'          => 'text',
				'instructions'  => 'Add the painting title',
				'default_value' => '',
				'placeholder'   => 'painting title',
				'prepend'       => '',
				'append'        => '',
				'formatting'    => 'html',
				'maxlength'     => '',
			),
			array(
				'key'           => 'field_53ee73bcee16f',
				'label'         => 'Date',
				'name'          => 'date',
				'type'          => 'text',
				'instructions'  => 'Add the painting date',
				'default_value' => '',
				'placeholder'   => 'date',
				'prepend'       => '',
				'append'        => '',
				'formatting'    => 'html',
				'maxlength'     => '',
			),
			array(
				'key'           => 'field_53ee73ddee170',
				'label'         => 'Medium',
				'name'          => 'medium',
				'type'          => 'text',
				'instructions'  => 'Add the paintings medium',
				'default_value' => '',
				'placeholder'   => 'medium',
				'prepend'       => '',
				'append'        => '',
				'formatting'    => 'html',
				'maxlength'     => '',
			),
			array(
				'key'           => 'field_53ee740fee171',
				'label'         => 'Dimensions',
				'name'          => 'dimensions',
				'type'          => 'text',
				'instructions'  => 'Add the paintings dimensions',
				'default_value' => '',
				'placeholder'   => 'dimensions: 0" X	0"',
				'prepend'       => '',
				'append'        => '',
				'formatting'    => 'html',
				'maxlength'     => '',
			),
			/*
			 * //price option not needed at this time may add if needed later
			array (
				'key' => 'field_53ee7496ee172',
				'label' => 'Price',
				'name' => 'price',
				'type' => 'text',
				'instructions' => 'Add a price',
				'default_value' => '',
				'placeholder' => '$0,000.00',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			 * 
			 */
		),
		'location'   => array(
			array(
				array(
					'param'    => 'post_format',
					'operator' => '==',
					'value'    => 'image',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options'    => array(
			'position'       => 'normal',
			'layout'         => 'default',
			'hide_on_screen' => array(
				0 => 'excerpt',
				1 => 'discussion',
				2 => 'comments',
				3 => 'send-trackbacks',
			),
		),
		'menu_order' => 3,
	) );
}

function register_my_dashboard_widget() {
	global $wp_meta_boxes;

	wp_add_dashboard_widget(
		'my_dashboard_widget',
		"HELP READ ME",
		'my_dashboard_widget_display'
	);

	$dashboard = $wp_meta_boxes['dashboard']['normal']['core'];

	$my_widget = array( 'my_dashboard_widget' => $dashboard['my_dashboard_widget'] );
	unset( $dashboard['my_dashboard_widget'] );

	$sorted_dashboard                             = array_merge( $my_widget, $dashboard );
	$wp_meta_boxes['dashboard']['normal']['core'] = $sorted_dashboard;
}

add_action( 'wp_dashboard_setup', 'register_my_dashboard_widget' );

//Widget Message
function my_dashboard_widget_display() {
	?>
	<h2 style="color:#e85005;">USE: CLICK FOR HELP IF YOU'RE LOST!</h2>
	<p style="color:#e85005;"><b>Notice the orange tab at the bottom right "Click for Help"<br> this is the SideKick
			plugin, it will walk you through most tasks you wish to accomplish in WordPress.</b></p>

	<?php
}
	
	
	

	