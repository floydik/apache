<?php
/* Description:
   Errors are in /var/log/syslog 
   prefix: php-fpm
   find wrong config file and delete or move them
   log action
   restart php-fpm
*/

// $re = '/php-fpm(\d\.\d).*ERROR.*pool\s(site\d+)/m';
//preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);
//var_dump($matches);

// settings
$logfile = "/home/vyboh/fpm_missing_user.log";
$fpmpath = "/etc/php/";
$fpmpool = "fpm/pool.d/";
$syslog = "/var/log/syslog";

// log utility
// format: date time: event 
$line = "";
$fl = fopen($logfile,"a+"); //write at end of file
fwrite($fl, $line);
fclose($fl);


?>
