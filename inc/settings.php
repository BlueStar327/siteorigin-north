<?php

function siteorigin_settings_localize( $loc ){
	return array(
		'section_title' => __('Theme Settings', 'siteorigin-north'),
		'section_description' => __('Change settings for your theme.', 'siteorigin-north'),
		'premium_only' => __('Premium Only', 'siteorigin-north'),
		'premium_url' => '#',

		// For the controls
		'variant' => __('Variant', 'siteorigin-north'),
		'subset' => __('Subset', 'siteorigin-north'),

		// For the settings metabox
		'meta_box' => __('Page settings', 'siteorigin-north'),
	);
}
add_filter('siteorigin_settings_localization', 'siteorigin_settings_localize');

/**
 * Initialize the settings
 */
function siteorigin_north_settings_init(){

	SiteOrigin_Settings::single()->configure( array(

		'branding' => array(
			'title' => __('Branding', 'siteorigin-north'),
			'fields' => array(
				'logo' => array(
					'type' => 'media',
					'label' => __('Logo', 'siteorigin-north'),
					'args' => array(
						'description' => __('Logo displayed in your masthead.', 'siteorigin-north')
					)
				),
				'site_description' => array(
					'type' => 'checkbox',
					'label' => __('Site Description', 'siteorigin-north'),
					array(
						'description' => __('Show your site description below your site title or logo.', 'siteorigin-north')
					)
				)
			)
		),

		'footer' => array(
			'title' => __('Footer', 'siteorigin-north'),
			'fields' => array(
				'text' => array(
					'type' => 'text',
					'label' => __('Footer Text', 'siteorigin-north'),
					'args' => array(
						'description' => __("{sitename} and {year} are your site's name and current year", 'siteorigin-north'),
						'sanitize_callback' => 'wp_kses_post',
					)
				)
			)
		),
		'responsive' => array(
			'title' => __('Responsive', 'siteorigin-north'),
			'fields' => array(
				'fitvids' => array(
					'type' => 'checkbox',
					'label' => __('Use Fitvids', 'siteorigin-north'),
				)
			)
		)
	) );

}
add_action('siteorigin_settings_init', 'siteorigin_north_settings_init');

/**
 * Add default settings.
 *
 * @param $defaults
 *
 * @return mixed
 */
function siteorigin_north_settings_defaults( $defaults ){
	$defaults['branding_logo'] = false;
	$defaults['branding_site_description'] = true;
	$defaults['footer_text'] = __('Copyright © {year} {sitename}', 'siteorigin-north');
	$defaults['responsive_fitvids'] = true;
	return $defaults;
}
add_filter('siteorigin_settings_defaults', 'siteorigin_north_settings_defaults');

function siteorigin_north_custom_css( $css ) {
	$css .= '';
	return $css;
}
add_filter('siteorigin_settings_custom_css', 'siteorigin_north_custom_css');

/**
 * Setup Page Settings for SiteOrigin Northd
 */
function siteorigin_north_setup_page_settings(){

	SiteOrigin_Settings_Page_Settings::single()->configure( array(
		'layout' => array(
			'type' => 'select',
			'label' => __( 'Page Layout', 'siteorigin-north' ),
			'options' => array(
				'default' => __( 'Default', 'siteorigin-north' ),
				'no-sidebar' => __( 'No Sidebar', 'siteorigin-north' ),
				'full-width' => __( 'Full Width', 'siteorigin-north' ),
			),
		),

		'menu' => array(
			'type' => 'select',
			'label' => __( 'Menu Position', 'siteorigin-north' ),
			'options' => array(
				'default' => __( 'Default', 'siteorigin-north' ),
				'overlap' => __( 'Overlaps Content', 'siteorigin-north' ),
			),
		),

		'page_title' => array(
			'type' => 'checkbox',
			'label' => __( 'Page Title', 'siteorigin-north' ),
			'checkbox_label' => __( 'display', 'siteorigin-north' ),
			'description' => __('Display the page title on this page.', 'siteorigin-north')
		),

		'masthead_margin' => array(
			'type' => 'checkbox',
			'label' => __( 'Masthead Bottom Margin', 'siteorigin-north' ),
			'checkbox_label' => __( 'enable', 'siteorigin-north' ),
			'default' => true,
			'description' => __('Include the margin below the masthead (top area) of your site.', 'siteorigin-north')
		),

		'footer_margin' => array(
			'type' => 'checkbox',
			'label' => __( 'Footer Top Margin', 'siteorigin-north' ),
			'checkbox_label' => __( 'enable', 'siteorigin-north' ),
			'default' => true,
			'description' => __('Include the margin above your footer.', 'siteorigin-north')
		),
	) );

}
add_action('siteorigin_page_settings_init', 'siteorigin_north_setup_page_settings');

/**
 * Add the default Page Settings
 */
function siteorigin_north_setup_page_setting_defaults( $defaults ){
	$defaults['layout'] = 'no-sidebar';
	$defaults['menu'] = 'default';
	$defaults['page_title'] = true;
	$defaults['masthead_margin'] = true;
	$defaults['footer_margin'] = true;
	return $defaults;
}
add_filter('siteorigin_page_settings_defaults', 'siteorigin_north_setup_page_setting_defaults');