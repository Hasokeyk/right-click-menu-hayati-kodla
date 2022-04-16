<?php

    /**
     * The public-facing functionality of the plugin.
     *
     * @link       https://hayatikodla.net/hasan-yuksektepe-kimdir/
     * @since      1.0.0
     *
     * @package    Right_Click_Menu_Hayatikodla
     * @subpackage Right_Click_Menu_Hayatikodla/public
     */

    /**
     * The public-facing functionality of the plugin.
     *
     * Defines the plugin name, version, and two examples hooks for how to
     * enqueue the public-facing stylesheet and JavaScript.
     *
     * @package    Right_Click_Menu_Hayatikodla
     * @subpackage Right_Click_Menu_Hayatikodla/public
     * @author     Hasan Yüksektepe <hasanhasokeyk@hotmail.com>
     */
    class Right_Click_Menu_Hayatikodla_Public{

        /**
         * The ID of this plugin.
         *
         * @since    1.0.0
         * @access   private
         * @var      string $plugin_name The ID of this plugin.
         */
        private $plugin_name;

        /**
         * The version of this plugin.
         *
         * @since    1.0.0
         * @access   private
         * @var      string $version The current version of this plugin.
         */
        private $version;

        /**
         * Initialize the class and set its properties.
         *
         * @param string $plugin_name The name of the plugin.
         * @param string $version The version of this plugin.
         * @since    1.0.0
         */
        public function __construct($plugin_name, $version){

            $this->plugin_name = $plugin_name;
            $this->version     = $version;

            //ADD MENU
            $locations = [
                'right_click_menu' => __('Right Click Menu', 'right-click-menu'),
            ];
            register_nav_menus($locations);
            //ADD MENU

            //ADD HTML BODY
            add_action('wp_footer', [
                $this,
                'add_right_click_html_to_body',
            ]);
            //ADD HTML BODY

        }

        //ADD HTML BODY
        function add_right_click_html_to_body(){
            echo '<div id="context-menu">';
            wp_nav_menu([
                'theme_location' => 'right_click_menu',
                'container'      => false,
                'id'             => 'context-menu',
            ]);
            echo '</div>';
        }
        //ADD HTML BODY

        /**
         * Register the stylesheets for the public-facing side of the site.
         *
         * @since    1.0.0
         */
        public function enqueue_styles(){

            /**
             * This function is provided for demonstration purposes only.
             *
             * An instance of this class should be passed to the run() function
             * defined in Right_Click_Menu_Hayatikodla_Loader as all of the hooks are defined
             * in that particular class.
             *
             * The Right_Click_Menu_Hayatikodla_Loader will then create the relationship
             * between the defined hooks and the functions defined in this
             * class.
             */

            wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__).'css/right-click-menu-hayatikodla-public.css', [], $this->version, 'all');

        }

        /**
         * Register the JavaScript for the public-facing side of the site.
         *
         * @since    1.0.0
         */
        public function enqueue_scripts(){

            /**
             * This function is provided for demonstration purposes only.
             *
             * An instance of this class should be passed to the run() function
             * defined in Right_Click_Menu_Hayatikodla_Loader as all of the hooks are defined
             * in that particular class.
             *
             * The Right_Click_Menu_Hayatikodla_Loader will then create the relationship
             * between the defined hooks and the functions defined in this
             * class.
             */

            wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__).'js/right-click-menu-hayatikodla-public.js', ['jquery'], $this->version, false);

        }

    }
