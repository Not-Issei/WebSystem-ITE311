<?php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$db['default'] = [
    'DSN'      => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'lms_talino',
    'DBDriver' => 'MySQLi',
    'DBPrefix' => '',
    'pConnect' => FALSE,
    'DBDebug'  => (ENVIRONMENT !== 'production'),
    'cacheOn'  => FALSE,
    'cachedir' => '',
    'charset'  => 'utf8',
    'DBCollat' => 'utf8_general_ci',
    'swapPre'  => '',
    'encrypt'  => FALSE,
    'compress' => FALSE,
    'strictOn' => FALSE,
    'failover' => [],
    'port'     => 3306,
];