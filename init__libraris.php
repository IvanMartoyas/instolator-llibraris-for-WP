<?
/*
 * Plugin Name: Inti Libraris
 * Description: Плагин позволяет выборочно подлючать библиотеки такие как Vue js и Bootstrap, в будующем и другие. для активации вставить шорткод в functions.php do_shortcode( '[init__libraris bootstrap="true" vue="true"]') 
 * Author: IOAN MARTOYAS
 * 
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Version:     1
 * Network:     not
 */
    add_shortcode( 'init__libraris', 'init__libraris_func' ); 

    function init__libraris_func( $atts ){ 
        ob_start(); // уберает от ошибкe когда вставляемый шорткод выводиться с начала всего контента
    
        static $already_run = false;
        if ( $already_run == true ) {
            return;
        }
        $already_run = true;
        
        
        // проверяю указанны ли в шорткоде поля, а также преобразую их из string в bool тип
        $vue = isset($atts['vue'])? ($atts['vue'] == 'true')? true: false : false;
        $bootstrap = isset($atts['bootstrap'])? ($atts['bootstrap'] == 'true')? true: false : false;

     
        if($vue) 
        {
            require_once('include__vue.php'); // подключаю  vue
        }
        if($bootstrap) {
           require_once('include_bootstrap.php'); // подключаю добавление слайдов в админке
        }

        return ob_get_clean();
    
    }  
