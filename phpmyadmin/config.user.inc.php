<?php
$i=0;
$i++;
$cfg['Servers'][$i]['user']          = getenv("MYSQL_USER");
$cfg['Servers'][$i]['password']      = getenv("MYSQL_PASSWORD");
$cfg['Servers'][$i]['auth_type']     = 'config';
