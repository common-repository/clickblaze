<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $eliio = "eliio";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $eliio,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => 'Click Blaze',
        // Name that appears at the top of your panel
        'display_version'      => 'Version 1.0' ,
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Click Blaze', 'clickblaze' ),
        'page_title'           => __( 'Click Blaze', 'clickblaze' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_clickblaze',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => false,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
         'footer_credit'     => 'Click Blaze a WordPress Marketing Tool. <a href="https://clickblaze.io" target="_blank">GO PRO</a> and get more features.',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
        'show_options_object' => false,
        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'clickblaze' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'clickblaze' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'clickblaze' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    //$args['share_icons'][] = array(
      //  'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
    //    'title' => 'Visit us on GitHub',
    //    'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
  //  );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pg/StevenSoehlOnline/posts/',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'https://twitter.com/stevensoehl',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    //$args['share_icons'][] = array(
      //  'url'   => 'http://www.linkedin.com/company/redux-framework',
      //  'title' => 'Find us on LinkedIn',
      //  'icon'  => 'el el-linkedin'
  //  );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
      //  $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'eliio' ), $v );
    } else {
      //  $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'eliio' );
    }

    // Add content after the form.
  //  $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'eliio' );

    Redux::setArgs( $eliio, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'clickblaze' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'clickblaze' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'eliio' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'clickblaze' )
        )
    );
    Redux::setHelpTab( $eliio, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'clickblaze' );
    Redux::setHelpSidebar( $eliio, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
    Redux::setSection( $eliio, array(
    		'title'      => __( 'Click Blaze Header Notification', 'clickblaze' ),
    		'id'         => 'eliio-header-notification',
    		'desc'       => __( 'Tool to add website notification to the header section of your website', 'clickblaze' ),
        'customizer_width' => '400px',
    		'icon'             => 'el el-home',
    		'fields'     => array(

    								array(
    						'id'       => 'eliio-header-notification-active',
    						'type'     => 'checkbox',
    						'title'    => __( 'Activate Header Notification for Entire Website', 'clickblaze' ),
    						//'subtitle' => __( 'A B Test', 'eliio' ),
    						'subtitle'     => __( 'Check to activiate header notification for the entire website allowing the header notification bar to display on every page.', 'clickblaze' ),
    						'default'  => '0'// 1 = on | 0 = off
    				),

            array(
                'id'       => 'eliio-header-notification_frontpage',
                'type'     => 'checkbox',
                'title'    => __( 'Select to Display Header Notification on Front Page', 'clickblaze' ),
                'subtitle' => __( 'Check if you would like to limit the header notification to the front page (home page).', 'clickblaze' ),
               'default'  => '0'// 1 = on | 0 = off
              ),

            array(
                'id'       => 'eliio-header-notification_single',
                'type'     => 'checkbox',
                'title'    => __( 'Select to Display Header Notification on Posts', 'clickblaze' ),
                'subtitle' => __( 'Check if you would like to limit the header notification to post type', 'clickblaze' ),
               'default'  => '0'// 1 = on | 0 = off
              ),
              //array(
                //  'id'       => 'eliio-header-notification_single-post-limit',
                //  'type'     => 'checkbox',
                //  'title'    => __( 'Select to Limit Notification to Selected Posts', 'eliio' ),
                //  'subtitle' => __( 'Check if you would like to limit the header notification to selected post. You must also select to display notification on posts (above).', 'eliio' ),
                // 'default'  => '0'// 1 = on | 0 = off
              //  ),

              //  array(
              //  'id'       => 'eliio-header-notification-single-number',
              //  'type'     => 'multi_text',
              //  'title'    => __( 'Header Notification Post Number', 'eliio' ),
              //  'validate' => 'numeric',
              //  'show_empty' => false,
                //'subtitle' => __( 'Subtitle', 'eliio' ),
              //  'desc'     => __( 'Enter the post ID number for the individual posts you want to display the header notification ', 'eliio' ),
                //'default'  => '1',
            // ),

              array(
                  'id'       => 'eliio-header-notification_page',
                  'type'     => 'checkbox',
                  'title'    => __( 'Select to Display Header Notification on Pages', 'clickblaze' ),
                  'subtitle' => __( 'Check if you would like to limit the header notification to page type.', 'clickblaze' ),
                 'default'  => '0'// 1 = on | 0 = off
                ),

              //  array(
                //    'id'       => 'eliio-header-notification_single-page-limit',
                //    'type'     => 'checkbox',
                //    'title'    => __( 'Select to Limit Notification to Selected Pages', 'eliio' ),
                //    'subtitle' => __( 'Check if you would like to limit the header notification to selected pages. You must also select to display notification on pages (above).', 'eliio' ),
              //     'default'  => '0'// 1 = on | 0 = off
              //    ),
              //    array(
              //    'id'       => 'eliio-header-notification-page-number',
              //    'type'     => 'multi_text',
              //    'title'    => __( 'Header Notification Page Number', 'eliio' ),
              //    'validate' => 'numeric',
              //    'show_empty' => false,
                  //'subtitle' => __( 'Subtitle', 'eliio' ),
              //    'desc'     => __( 'Enter the page ID number for the individual pages you want to display the header notification ', 'eliio' ),
                  //'default'  => '1',
            //   ),
    				  array(
    			 		'id'       => 'eliio-header-notification-copy',
    			 		'type'     => 'text',
    			 		'title'    => __( 'Header Notification Copy', 'clickblaze' ),
    			 		//'subtitle' => __( 'Subtitle', 'eliio' ),
    			 		'desc'     => __( 'Enter copy for header notification -KEEP IT BRIEF', 'clickblaze' ),
    			 		//'default'  => 'Default Text',
    			 ),


           array(
                'id'       => 'eliio-header-notification_bck',
                'type'     => 'color',
                'output'   => array( '.site-title' ),
                'title'    => __( 'Notification bar background color', 'clickblaze' ),
                'subtitle' => __( 'Pick a background color for the notification bar(default: #D13511).', 'clickblaze' ),
                'default'  => '#D13511',
                'validate' => 'color',
            ),
            array(
                'id'       => 'eliio-header-notification_font',
                'type'     => 'color',
                'title'    => __( 'Notification font color', 'clickblaze' ),
                'subtitle' => __( 'Pick a font color for the notification bar(default: #FFFFFF).', 'clickblaze' ),
                'default'  => '#FFFFFF',
                'validate' => 'color',
            ),
            array(
            'id'       => 'eliio-header-notification-cta',
            'type'     => 'text',
            'title'    => __( 'Header Notification CTA Copy', 'clickblaze' ),
            //'subtitle' => __( 'Subtitle', 'eliio' ),
            'desc'     => __( 'Enter copy for header notification CTA -ex. CLICK HERE', 'clickblaze' ),
            //'default'  => 'Default Text',
         ),
         array(
         'id'       => 'eliio-header-notification-cta-link',
         'type'     => 'text',
         'title'    => __( 'Header Notification CTA Click Thru link', 'clickblaze' ),
         //'subtitle' => __( 'Subtitle', 'eliio' ),
         'desc'     => __( 'Enter URL for header notification CTA -ex. http://example.com', 'eliio' ),
         //'default'  => 'Default Text',
      ),
      array(
      'id'       => 'eliio-header-notification-tracking',
      'type'     => 'text',
      'title'    => __( 'Header Notification Google Analytics Event Tracking tag', 'clickblaze' ),
      //'subtitle' => __( 'Subtitle', 'eliio' ),
      'desc'     => __( 'Enter name to identify clicks in Google Analytics', 'clickblaze' ),
      //'default'  => 'Default Text',
   ),
            array(
                 'id'       => 'eliio-header-notification_cta_bck',
                 'type'     => 'color',
                 //'output'   => array( '.site-title' ),
                 'title'    => __( 'Notification bar CTA Button background color', 'clickblaze' ),
                 'subtitle' => __( 'Pick a background color for the notification bar CTA Button(default: #D13511).', 'clickblaze' ),
                 'default'  => '#D13511',
                 'validate' => 'color',
             ),
             array(
                  'id'       => 'eliio-header-notification_cta_border',
                  'type'     => 'color',
                  //'output'   => array( '.site-title' ),
                  'title'    => __( 'Notification bar CTA Button border color', 'clickblaze' ),
                  'subtitle' => __( 'Pick a border color for the notification bar CTA Button(default: #FFFFFF).', 'clickblaze' ),
                  'default'  => '#FFFFFF',
                  'validate' => 'color',
              ),
             array(
                 'id'       => 'eliio-header-notification_cta_font',
                 'type'     => 'color',
                 'title'    => __( 'Notification CTA button font color', 'clickblaze' ),
                 'subtitle' => __( 'Pick a font color for the notification bar CTA Button(default: #FFFFFF).', 'clickblaze' ),
                 'default'  => '#FFFFFF',
                 'validate' => 'color',
             ),
             array(
                  'id'       => 'eliio-header-notification_cta_bck_hover',
                  'type'     => 'color',
                  //'output'   => array( '.site-title' ),
                  'title'    => __( 'Notification bar CTA Button background color on hover', 'clickblaze' ),
                  'subtitle' => __( 'Pick a background color for the notification bar CTA Button on hover(default: #FFFFFF).', 'clickblaze' ),
                  'default'  => '#FFFFFF',
                  'validate' => 'color',
              ),
              array(
                   'id'       => 'eliio-header-notification_cta_border_hover',
                   'type'     => 'color',
                   //'output'   => array( '.site-title' ),
                   'title'    => __( 'Notification bar CTA Button border color on hover', 'clickblaze' ),
                   'subtitle' => __( 'Pick a border color for the notification bar CTA Button on hover(default: #FFFFFF).', 'clickblaze' ),
                   'default'  => '#FFFFFF',
                   'validate' => 'color',
               ),
              array(
                  'id'       => 'eliio-header-notification_cta_bck_font_hover',
                  'type'     => 'color',
                  'title'    => __( 'Notification CTA button font color on hover', 'clickblaze' ),
                  'subtitle' => __( 'Pick a font color for the notification bar CTA Button on hover(default: #D13511).', 'clickblaze' ),
                  'default'  => '#D13511',
                  'validate' => 'color',
              ),


    ),
    				) );

  Redux::setSection( $eliio, array(
  		'title'            => __( 'Click Blaze Opt-In', 'clickblaze' ),
  		'id'               => 'basic-optin',
  		'subsection'       => true,
  		'customizer_width' => '450px',
  		'desc'             => __( 'Configure Click Blaze Opt-In', 'clickblaze' ),
  		'fields'           => array(


         array(
              'id'       => 'eliio-popup-bck-color',
              'type'     => 'color',
              'title'    => __('Click Blaze Opt-In Background Color', 'clickblaze'),
              'subtitle' => __('Select the background color for your Popup (default: #fff).', 'clickblaze'),
              'default'  => '#FFFFFF',
              'validate' => 'color',
          ),

          array(
               'id'       => 'eliio-popup-font-color',
               'type'     => 'color',
               'title'    => __('Click Blaze Opt-In Font Color', 'clickblaze'),
               'subtitle' => __('Select the font color for your Popup (default: #000).', 'clickblaze'),
               'default'  => '#000000',
               'validate' => 'color',
           ),

           array(
                'id'       => 'eliio-popup2-bck-color',
                'type'     => 'color',
                'title'    => __('Click Blaze Opt-In Reminder Background Color', 'clickblaze'),
                'subtitle' => __('Select the background color for your Popup Reminder bar (default: #000000).', 'clickblaze'),
                'default'  => '#000000',
                'validate' => 'color',
            ),

            array(
                 'id'       => 'eliio-popup2-font-color',
                 'type'     => 'color',
                 'title'    => __('Click Blaze Opt-In Reminder Font Color', 'clickblaze'),
                 'subtitle' => __('Select the font color for your Popup Reminder bar (default: #ffffff).', 'clickblaze'),
                 'default'  => '#FFFFFF',
                 'validate' => 'color',
             ),
             array(
              'id'       => 'eliio-popup-width',
              'type'     => 'text',
              'title'    => __( 'Popup Window Width', 'clickblaze' ),
              //'subtitle' => __( 'Subtitle', 'eliio' ),
              'desc'     => __( 'Change the width of the popup window to make it wider. Enter either in % or px (400px or 20%). Min-width set to 310px.', 'clickblaze' ),
              //'default'  => '1',
           ),
        array(
            'id'       => 'eliio-popup-cookie-setter',
            'type'     => 'checkbox',
            'title'    => __( 'Click Blaze Opt-In Cookie', 'clickblaze' ),
            //'subtitle' => __( 'A B Test', 'eliio' ),
            'desc'     => __( 'Check if you want to set a cookie limiting views.', 'clickblaze' ),
            'default'  => '0'// 1 = on | 0 = off
        ),
        array(
            'id'       => 'eliio-popup-icon',
            'type'     => 'checkbox',
            'title'    => __( 'Click Blaze Opt-In Envelope Icon', 'clickblaze' ),
            //'subtitle' => __( 'A B Test', 'eliio' ),
            'desc'     => __( 'Check if you prefer using envelope icon .', 'clickblaze' ),
            'default'  => '0'// 1 = on | 0 = off
        ),
        array(
         'id'       => 'eliio-popup-cookie-days',
         'type'     => 'text',
         'title'    => __( 'Cookie Duration', 'clickblaze' ),
         //'subtitle' => __( 'Subtitle', 'eliio' ),
         'desc'     => __( 'Enter the number of days the cookie should be set. Example: 1 day', 'clickblaze' ),
         'default'  => '1',
      ),

  		)
  ) );

  Redux::setSection( $eliio, array(
  		'title'            => __( 'Click Blaze NoBounce', 'clickblaze' ),
  		'id'               => 'basic-nobounce',
  		'subsection'       => true,
  		'customizer_width' => '450px',
  		'desc'             => __( 'Configure Click Blaze NoBounce', 'clickblaze' ),
  		'fields'           => array(

        array(
            'id'       => 'eliio-nobounce-cookie-setter',
            'type'     => 'checkbox',
            'title'    => __( 'Click Blaze NoBounce Cookie', 'clickblaze' ),
            //'subtitle' => __( 'A B Test', 'eliio' ),
            'desc'     => __( 'Check if you want to set a cookie limiting views.', 'clickblaze' ),
            'default'  => '0'// 1 = on | 0 = off
        ),

  		)
  ) );






  /*
   * <--- END SECTIONS
   */
