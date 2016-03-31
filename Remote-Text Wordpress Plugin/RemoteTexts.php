<?php

/*
Plugin Name: Remote-Texts
Plugin URI: http://ferrouscorp.de
Description: Load text-files from everywhere !
Version: 1.0.0
Author: Jens Fischer
Author URI: http://crafter629.de
License: All rights reserved
*/

require 'RemoteFile.php';

add_action('init',  'initPlugin');

function initPlugin()
{
    
    add_shortcode( 'RemoteFile', 'addRemote_shortcode' );
    
}

function addRemote_shortcode($atts) {
    
        $a = shortcode_atts( array (
        'url' => 'about:blank',
        ), $atts );

        $tmp = new RemoteFile( $a['url'] );
        
        return $tmp->getFileContent();
        
}



?>