<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$ip = $_SERVER['REMOTE_ADDR'];
echo "REMOTE_ADDR: ".$ip ."<br>";
echo "HTTP_ACCEPT_LANGUAGE: ".$_SERVER['HTTP_ACCEPT_LANGUAGE'] ."<br>";
echo "HTTP_USER_AGENT: ".$_SERVER['HTTP_USER_AGENT'] ."<br>";
echo "HTTP_HOST: ".$_SERVER['HTTP_HOST'] ."<br>";
echo "HTTP_VIA: ".$_SERVER['HTTP_VIA'] ."<br>";
echo "HTTP_X_FORWARDED_FOR: ".$_SERVER['HTTP_X_FORWARDED_FOR'] ."<br>";
echo "HTTP_X_COMING_FROM: ".$_SERVER['HTTP_X_COMING_FROM'] ."<br>";
echo "HTTP_X_FORWARDED_SERVER: ".$_SERVER['HTTP_X_FORWARDED_SERVER'] ."<br>";
echo "HTTP_CLIENT_IP: ".$_SERVER['HTTP_CLIENT_IP'] ."<br>";
echo "HTTP_X_FORWARDED: ".$_SERVER['HTTP_X_FORWARDED'] ."<br>";
echo "HTTP_ACCEPT_ENCODING: ".$_SERVER['HTTP_ACCEPT_ENCODING'] ."<br>";
echo "HTTP_CONNECTION: ".$_SERVER['HTTP_CONNECTION'] ."<br>";
echo "HTTP_CASHE_CONTROL: ".$_SERVER['HTTP_CACHE_CONTROL'] ."<br>";
echo "SERVER_PROTOCOL: ".$_SERVER['SERVER_PROTOCOL'] ."<br> ";
echo "SERVER_NAME: ".gethostbyaddr($_SERVER['REMOTE_ADDR'])."<BR>";
echo "SERVER_IP: ".gethostbyname($_SERVER['REMOTE_NAME'])."<BR>";

?>
