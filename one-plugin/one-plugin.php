<?php

/*
 * @package OnePlugin
 */

/*
Plugin Name: One Plugin
Plugin URL: www.Ibrahimwali.com
Description: This is my Plugin
Version:1.0.0
Author: Muhammad Ibrahim
Auther URL: www.ibrahimwali.com
License: GPLv2 or later
Text Domain: One-Plugin

 */

//if(! defined('ABSPATH')){
//    die;
//}

defined('ABSPATH') or die('Hey you can\t access this file, you silly homan!');

//if(! function_exists('add_action')){
//
//    echo 'Hey you can\t access this file, you silly homan!';
//    die();
//
//}

class OnePlugin
{
    function activate() {
        echo 'The plugin is activated';
    }

    function deactivate()   {

    }

    function uninstall()    {

    }

}

if(class_exists('OnePlugin')){
    $oneplugin = new OnePlugin();
}

//activate
register_activation_hook(__FILE__, array($oneplugin, 'activate'));


//deactivate

register_deactivation_hook(__FILE__, array($oneplugin, 'deactivate'));


//uninstall

