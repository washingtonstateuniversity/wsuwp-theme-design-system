<?php namespace WSUWP\Theme\WDS;


class Customizer_Section_Site_Nav_Vertical {

	protected static $section_id = 'wds_site_nav_vertical';


	public static function get( $property ) {

		switch ( $property ) {
			case 'section_id':
				return self::$section_id;
			default:
				return '';
		}
	} 


	public function init() {

		add_action( 'customize_register', array( __CLASS__, 'add_customizer_options' ) );

	}


	public static function add_customizer_options( $wp_customize ) {

		$wp_customize->add_section(
			self::get( 'section_id' ),
			array(
				'title'      => 'Site Nav Vertical',
				'priority'   => 30,
				'panel'      => Customizer::get( 'panel_id' ),
			)
		);

		$wp_customize->add_setting(
			'wsu_wds_site_nav_vertical_is_active',
			array(
				'default'     => true,
				'transport'   => 'refresh',
			)
		);

		$wp_customize->add_setting(
			'wsu_wds_site_nav_vertical_is_split_button',
			array(
				'default'     => false,
				'transport'   => 'refresh',
			)
		);

		$wp_customize->add_setting(
			'wsu_wds_site_nav_vertical_start_open',
			array(
				'default'     => true,
				'transport'   => 'refresh',
			)
		);

		$wp_customize->add_control(
			'wsu_wds_site_nav_vertical_is_active_control',
			array(
				'settings' => 'wsu_wds_site_nav_vertical_is_active',
				'label'    => 'Show Vertical Navigation',
				'section'  => self::get( 'section_id' ),
				'type'     => 'checkbox',
			)
		);

		$wp_customize->add_control(
			'wsu_wds_site_nav_vertical_is_split_button_control',
			array(
				'settings' => 'wsu_wds_site_nav_vertical_is_split_button',
				'label'    => 'Use Split Button',
				'section'  => self::get( 'section_id' ),
				'type'     => 'checkbox',
			)
		);

		$wp_customize->add_control(
			'wsu_wds_site_nav_vertical_start_open_control',
			array(
				'settings' => 'wsu_wds_site_nav_vertical_start_open',
				'label'    => 'Start Open',
				'section'  => self::get( 'section_id' ),
				'type'     => 'checkbox',
			)
		);

	}

}

( new Customizer_Section_Site_Nav_Vertical() )->init();
