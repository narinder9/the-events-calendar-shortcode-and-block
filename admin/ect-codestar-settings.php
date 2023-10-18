<?php
/**
 *
 * This file is responsible for creating all admin settings in Timeline Builder (post)
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Can not load script outside of WordPress Enviornment!' );
}

if ( ! class_exists( 'ECTSettings' ) ) {
	class ECTSettings {


		/**
		 * The unique instance of the plugin.
		 */
		private static $instance;

		/**
		 * Gets an instance of our plugin.
		 */
		public static function get_instance() {
			if ( null === self::$instance ) {
				self::$instance = new self();
			}

			return self::$instance;
		}


		/**
		 * The Constructor
		 */
		public function __construct() {
			// register actions
			$this->create_settings_panel();

		}


		public function create_settings_panel() {
			//
			// Metabox of the PAGE
			// Set a unique slug-like ID
			//
			$prefix_page_opts = 'ects';

			//
			// Create a metabox
			//
			// Set a unique slug-like ID
			$prefix = 'ects_options';
			if ( class_exists( 'CSF' ) ) {
				// Create options
				CSF::createOptions(
					$prefix,
					array(
						'framework_title'    => 'Events Shortcodes For The Events Calendar Settings',
						'menu_title'         => 'Shortcodes Settings',
						'menu_slug'          => 'tribe_events-events-template-settings',
						'menu_type'          => 'submenu',
						'menu_parent'        => 'cool-plugins-events-addon',
						'menu_icon'          => ECT_PLUGIN_URL . 'assets/css/ect-icons.svg',
						'nav'                => 'inline',
						'show_reset_section' => false,
						'show_sub_menu'      => false,
						'show_bar_menu'      => false,
					)
				);

				//
				// Create a section
				CSF::createSection(
					$prefix,
					array(
						'title'  => 'General Settings',

						'fields' => array(

							array(
								'title'   => 'Main Skin Color',
								'id'      => 'main_skin_color',
								'type'    => 'color',
								'desc'    => 'It is a main color scheme for all designs',
								'default' => '#dbf5ff',

							),
							array(
								'title'   => 'Featured Event Skin Color',
								'id'      => 'featured_event_skin_color',
								'type'    => 'color',
								'desc'    => 'This skin color applies on featured events',
								'default' => '#f19e59',

							),
							array(
								'title'   => 'Featured Event Font Color',
								'id'      => 'featured_event_font_color',
								'type'    => 'color',
								'desc'    => 'This color applies on some fonts of featured events',
								'default' => '#3a2201',
							),
							array(
								'title'   => 'Event Background Color',
								'id'      => 'event_desc_bg_color',
								'type'    => 'color',
								'desc'    => 'This skin color applies on background of event description area.',
								'default' => '#f4fcff',
							),
							array(
								'title'            => 'Event Title Styles',
								'id'               => 'ect_title_styles',
								'type'             => 'typography',
								'font_weight'      => 'bold',
								'font_style'       => 'normal',
								'desc'             => 'Select a style',
								'default'          => array(
									'color'            => '#00445e',
									'font-family'      => 'Monda',
									'font-size'        => '18',
									'line-height'      => '1.5',
									'font-weight'      => '700',
									// 'font-style'=>'normal',
									'line_height_unit' => 'em',
								),
								'line_height_unit' => 'em',
							),
							array(
								'title'            => 'Events Description Styles',
								'id'               => 'ect_desc_styles',
								'type'             => 'typography',
								'desc'             => 'Select Styles',
								'default'          => array(
									'color'       => '#515d64',
									'font-family' => 'Open Sans',
									'font-size'   => '15',
									'line-height' => '1.5',
								),
								'line_height_unit' => 'em',
							),
							array(
								'title'            => 'Event Venue Styles',
								'id'               => 'ect_desc_venue',
								'type'             => 'typography',
								'desc'             => 'Select a style',
								'default'          => array(
									'color'       => '#00445e',
									'font-family' => 'Open Sans',
									'font-size'   => '15',
									'font-style'  => 'italic',
									'line-height' => '1.5',
								),
								'line_height_unit' => 'em',
							),

							array(
								'title'            => 'Event Dates Styles',
								'id'               => 'ect_dates_styles',
								'type'             => 'typography',
								'desc'             => 'Select a style',

								'default'          => array(
									'color'       => '#00445e',
									'font-family' => 'Monda',

									'font-size'   => '36',
									'font-weight' => '700',

									'line-height' => '1',
								),
								'line_height_unit' => 'em',
							),
						),
					)
				);

				//
				// Create a section

				CSF::createSection(
					$prefix,
					array(
						'title'  => 'Extra Settings',
						'fields' => array(

							// A textarea field
							array(
								'title' => 'Custom CSS',
								'id'    => 'custom_css',
								'type'  => 'code_editor',
								'desc'  => 'Put your custom CSS rules here',
								'mode'  => 'css',
							),
							array(
								'title'   => 'No Event Text (Message to show if no event will available)',
								'id'      => 'events_not_found',
								'default' => 'There are no upcoming events at this time',
								'type'    => 'text',
								'desc'    => '',
							),
							array(
								'title'   => 'Update Find Out More label',
								'id'      => 'events_more_info',
								'default' =>  esc_html__( 'Find out more' , 'ect' ),
								'type'    => 'text',
								'desc'    => '',
							),
							array(
								'id'    => 'ect_no_featured_img',
								'type'  => 'media',
								'title' => 'Default Image (select a default image, if no featured image for the event)',
							),
              array(
                'id'          => 'ect_load_google_font',
                'type'        => 'select',
                'title'       => 'Load Google Font',
                'options'     => array(
                  'yes'  => 'Yes',
                  'no'  => 'No',
                ),
                'default'     => 'yes'
              ),
							

						),
					)
				);

				CSF::createSection(
					$prefix,
					array(
						'title'  => 'Shortcode Attributes',
						'fields' => array(

							array(
								'title'   => 'Default Shortcode',
								'type'    => 'heading',
								'content' => '<code>[events-calendar-templates category="all" template="default" style="style-1" date_format="default" start_date="" end_date="" limit="10" order="ASC" hide-venue="no" socialshare="no" time="future"]</code>',
							),
							array(
								'type'     => 'callback',
								'function' => 'ect_shortcode_attr',
							// 'style' =>'solid ',
							),

						),
					)
				);
				CSF::createSection(
					$prefix,
					array(
						'title'  => 'Buy PRO',
						'fields' => array(

							array(
								// 'title'=>'Free v/s Pro Features Comparison',
								'title'   => '',
								'type'    => 'heading',
								'content' => 'Why should you upgrade to PRO?',
							),

							array(
								'title'    => '',
								'type'     => 'callback',
								'function' => 'ect_buy_pro',
							// 'style' =>'solid ',
							),

						),
					)
				);
			}
		}




	}

}
function ect_buy_pro() {
	echo '
  <style>
  ul.p_feature-list li{
    font-size:18px;
    margin:5px;
    padding:5px;
  }
  </style>
  <table><tr>
		<td style="border: 1px solid #ddd;"><ul class="p_feature-list">
		<li>✅ <a href="https://eventscalendaraddons.com/demos/events-shortcodes-pro/events-grid/?utm_source=ect_plugin&utm_medium=inside&utm_campaign=demo&utm_content=buy_pro_tab" target="_blank">Grid Layout</a> (<b>PRO</b>)</li>
		<li>✅ <a href="https://eventscalendaraddons.com/demos/events-shortcodes-pro/events-masonry/?utm_source=ect_plugin&utm_medium=inside&utm_campaign=demo&utm_content=buy_pro_tab" target="_blank">Masonry Layout</a> (<b>PRO</b>)</li>
		<li>✅ <a href="https://eventscalendaraddons.com/demos/events-shortcodes-pro/events-carousel/?utm_source=ect_plugin&utm_medium=inside&utm_campaign=demo&utm_content=buy_pro_tab" target="_blank">Carousel Layout</a> (<b>PRO</b>)</li>
		<li>✅ <a href="https://eventscalendaraddons.com/demos/events-shortcodes-pro/events-slider/?utm_source=ect_plugin&utm_medium=inside&utm_campaign=demo&utm_content=buy_pro_tab" target="_blank">Slider Layout</a> (<b>PRO</b>)</li>
		<li>✅ <a href="https://eventscalendaraddons.com/demos/events-shortcodes-pro/events-accordion/?utm_source=ect_plugin&utm_medium=inside&utm_campaign=demo&utm_content=buy_pro_tab" target="_blank">Accordion Layout</a> (<b>PRO</b>)</li>
		<li>✅ <a href="https://eventscalendaraddons.com/demos/events-shortcodes-pro/events-calendar/?utm_source=ect_plugin&utm_medium=inside&utm_campaign=demo&utm_content=buy_pro_tab" target="_blank">Calendar Layout</a> (<b>PRO</b>)</li>
		<li>✅ <a href="https://eventscalendaraddons.com/demos/events-shortcodes-pro/events-by-organizer/?utm_source=ect_plugin&utm_medium=inside&utm_campaign=demo&utm_content=buy_pro_tab" target="_blank">Events by Organizer</a> (<b>PRO</b>)</li>
		<li>✅ <a href="https://eventscalendaraddons.com/demos/events-shortcodes-pro/events-by-venue/?utm_source=ect_plugin&utm_medium=inside&utm_campaign=demo&utm_content=buy_pro_tab" target="_blank">Events by Venue</a> (<b>PRO</b>)</li>
		<li>✅ Events Category Filters Inside Masonry (<b>PRO</b>)</li>
		<li>✅ Show Only Featured Events (<b>PRO</b>)</li>
		<li>✅ Events Schema SEO Support (<b>PRO</b>)</li>
		<li>✅ Premium Design & Settings (<b>PRO</b>)</li>
		<li>✅ Quick Premium Support (<b>PRO</b>)</li>
		</ul></td>
		</tr></table>';
}
function ect_shortcode_attr() {
	   echo '
      <style>
        table.ect-shortcodes-tbl {
          width: 70%:;
          margin: auto;
          width: 50%;
        }   
        table.ect-shortcodes-tbl tr td{
          padding:15px;
        }
      </style>

      <h3>Shortcode Attributes</h3>
      <table class="ect-shortcodes-tbl" style="border:1px solid #ddd;">
      <tr style="border:1px solid #ddd"><th style="border:1px solid #ddd">Attribute</th><th style="border:1px solid #ddd">Value</th></tr>
      <tr style="border:1px solid #ddd"><td style="border:1px solid #ddd">template</td>
      <td style="border:1px solid #ddd"><ul>
      <li><strong>default</strong></li>
      <li><strong>timeline-view</strong></li>
      <li><strong>minimal-list</strong></li>
      <li><strong>grid-view</strong> (<a href="' . esc_attr( 'https://eventscalendaraddons.com/demos/events-shortcodes-pro/events-grid/?utm_source=ect_plugin&utm_medium=inside&utm_campaign=demo&utm_content=shortcode_attributes' ) . '" target="_blank">Pro Version</a>)</li>
      <li><strong>carousel-view</strong> (<a href="' . esc_attr( 'https://eventscalendaraddons.com/demos/events-shortcodes-pro/events-carousel/?utm_source=ect_plugin&utm_medium=inside&utm_campaign=demo&utm_content=shortcode_attributes' ) . '" target="_blank">Pro Version</a>)</li>
      <li><strong>slider-view</strong> (<a href="' . esc_attr( 'https://eventscalendaraddons.com/demos/events-shortcodes-pro/events-slider/?utm_source=ect_plugin&utm_medium=inside&utm_campaign=demo&utm_content=shortcode_attributes' ) . '" target="_blank">Pro Version</a>)</li>
      <li><strong>accordion-view</strong> (<a href="' . esc_attr( 'https://eventscalendaraddons.com/demos/events-shortcodes-pro/events-accordion/?utm_source=ect_plugin&utm_medium=inside&utm_campaign=demo&utm_content=shortcode_attributes' ) . '" target="_blank">Pro Version</a>)</li>
      </ul></td></tr>

      <tr style="border:1px solid #ddd"><td  style="border:1px solid #ddd">style</td>
      <td style="border:1px solid #ddd"><ul>
      <li><strong>style-1</strong></li>
      <li><strong>style-2</strong></li>
      <li><strong>style-3</strong></li>
      </ul></td></tr>

      <tr style="border:1px solid #ddd"><td style="border:1px solid #ddd">category</td>
      <td style="border:1px solid #ddd"><ul>
      <li><strong>all</strong></li>
      <li><strong>custom-slug</strong> (events category slug)</li>
      </ul></td></tr>

      <tr style="border:1px solid #ddd"><td style="border:1px solid #ddd">date_format</td>
      <td style="border:1px solid #ddd"><ul>
      <li><strong>default</strong> (01 January 2019)</li>
      <li><strong>MD,Y</strong> (Jan 01, 2019)</li>
      <li><strong>MD,Y</strong> (January 01, 2019)</li>
      <li><strong>DM</strong> (01 Jan)</li>
      <li><strong>DML</strong> (01 Jan Monday)</li>
      <li><strong>DF</strong> (01 January)</li>
      <li><strong>MD</strong> (Jan 01)</li>
      <li><strong>FD</strong> (January 01)</li>
      <li><strong>MD,YT</strong> (Jan 01, 2019 8:00am-5:00pm)</li>
      <li><strong>full</strong> (01 January 2019 8:00am-5:00pm)</li>
      </ul></td></tr>

      <tr style="border:1px solid #ddd"><td style="border:1px solid #ddd">start_date<br/>end_date</td>
      <td style="border:1px solid #ddd"><ul>
      <li><strong>YY-MM-DD</strong> (show events in between a date interval)</li>
      </ul></td></tr>

      <tr style="border:1px solid #ddd"><td style="border:1px solid #ddd">limit</td>
      <td style="border:1px solid #ddd"><ul>
      <li><strong>10</strong> (number of events to show)</li>
      </ul></td></tr>

      <tr style="border:1px solid #ddd"><td style="border:1px solid #ddd">order</td>
      <td style="border:1px solid #ddd"><ul>
      <li><strong>ASC</strong></li>
      <li><strong>DESC</strong></li>
      </ul></td></tr>

      <tr style="border:1px solid #ddd"><td style="border:1px solid #ddd">hide_venue</td>
      <td style="border:1px solid #ddd"><ul>
      <li><strong>yes</strong></li>
      <li><strong>no</strong></li>
      </ul></td></tr>
      <tr style="border:1px solid #ddd"><td style="border:1px solid #ddd">socialshare</td>
      <td style="border:1px solid #ddd"><ul>
      <li><strong>yes</strong></li>
      <li><strong>no</strong></li>
      </ul></td></tr>
      <tr style="border:1px solid #ddd"><td style="border:1px solid #ddd">time</td>
      <td style="border:1px solid #ddd"><ul>
      <li><strong>future</strong> (show future events)</li>
      <li><strong>past</strong> (show past events)</li>
      <li><strong>all</strong> (show all events)</li>
      </ul></td></tr>

      </table>';
}
