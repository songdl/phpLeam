<?php

/* 
 * songdl 2015-07-21 22:38
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$url = '';
$domain = $_ENV = array();
$_ENV['domain'] = $domain;
if (empty($_ENV['domain'])){
    $_ENV['curapp'] = 'forum';
}

if (!empty($url)){
    
} else {
    require './' .$_ENV['curapp'] . '.php';
}