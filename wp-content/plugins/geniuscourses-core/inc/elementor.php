<?php 
final class Elementor_Test_Extension {

    const VERSION = '1.0.0';
   const MINIMUM_ELEMENTOR_VERSION = '3.20.0';
    const MINIMUM_PHP_VERSION = '7.4';
    private static $_instance = null;

    public static function instance(): Elementor_Test_Extension {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct() {
        if ( $this->is_compatible() ) {
            add_action( 'elementor/init', [ $this, 'init' ] );
        }
    }

    public function is_compatible(): bool {
        // Проверка, установлен ли и активирован ли Elementor
        if ( ! did_action( 'elementor/loaded' ) ) {
            add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
            return false;
        }

        // Проверка требуемой версии Elementor
        if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
            add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
            return false;
        }

        // Проверка требуемой версии PHP
        if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
            add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
            return false;
        }

        return true;
    }

    public function admin_notice_missing_main_plugin() {
        if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

        $message = sprintf(
            esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'elementor-test-addon' ),
            '<strong>' . esc_html__( 'Elementor Test Addon', 'elementor-test-addon' ) . '</strong>',
            '<strong>' . esc_html__( 'Elementor', 'elementor-test-addon' ) . '</strong>'
        );

        printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
    }

    public function admin_notice_minimum_elementor_version() {
        if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

        $message = sprintf(
            esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'elementor-test-addon' ),
            '<strong>' . esc_html__( 'Elementor Test Addon', 'elementor-test-addon' ) . '</strong>',
            '<strong>' . esc_html__( 'Elementor', 'elementor-test-addon' ) . '</strong>',
            self::MINIMUM_ELEMENTOR_VERSION
        );

        printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
    }

    public function admin_notice_minimum_php_version() {
        if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

        $message = sprintf(
            esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'elementor-test-addon' ),
            '<strong>' . esc_html__( 'Elementor Test Addon', 'elementor-test-addon' ) . '</strong>',
            '<strong>' . esc_html__( 'PHP', 'elementor-test-addon' ) . '</strong>',
            self::MINIMUM_PHP_VERSION
        );

        printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
    }

    public function init(): void {
        add_action( 'elementor/widgets/register', [ $this, 'init_widgets' ] );
        add_action('elementor/elements/categories_registered', [ $this, 'add_widget_categories' ]);
    }

    public function add_widget_categories($elements_manager): void {
        $elements_manager->add_category(
            'custom_category',
            [
                'title' => __('Custom Widgets', 'textdomain'),
                'icon' => 'fa fa-plug',
            ]
        );
    }    
    
     public function init_widgets(){
      require_once(__DIR__ . '/widgets/about-widget.php');
      require_once(__DIR__ . '/widgets/ads-widget.php');
      require_once(__DIR__ . '/widgets/slider-widget.php');
      require_once(__DIR__ . '/widgets/team-widget.php');
      require_once(__DIR__ . '/widgets/servis-widget.php');
      require_once(__DIR__ . '/widgets/cars-widget.php');

    $widgets_manager = \Elementor\Plugin::instance()->widgets_manager;

    $widgets_manager->register(new \Elementor_About_Widget());
    $widgets_manager->register(new \Elementor_Ads_Widget());
    $widgets_manager->register(new \Elementor_Slider_Widget());
    $widgets_manager->register(new \Elementor_Team_Widget());
    $widgets_manager->register(new \Elementor_Servis_Widget());
    $widgets_manager->register(new \Elementor_Cars_Widget());
     }

}

Elementor_Test_Extension::instance();
