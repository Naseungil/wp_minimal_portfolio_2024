<?php
// THEMEROOT 및 IMAGES 변수 정의
define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT . '/images');

if (!function_exists('minimal_script')) {
    function minimal_script() {
        // 스크립트 등록
        wp_register_script('bootstrap-js', THEMEROOT . '/js/bootstrap.min.js', true, false, true);

        // 스크립트 로드
        wp_enqueue_script('bootstrap-js');

        // CSS 로드
        wp_enqueue_style('common-css', THEMEROOT . '/css/common.css');
        wp_enqueue_style('bootstrap-grid', THEMEROOT . '/css/bootstrap-grid.min.css');
        wp_enqueue_style('default', THEMEROOT . '/css/default.css');
        wp_enqueue_style('responsive', THEMEROOT . '/css/responsive.css');
    }
  }
  
  // 액션에 연결하여 함수 실행
  add_action('wp_enqueue_scripts', 'minimal_script');
