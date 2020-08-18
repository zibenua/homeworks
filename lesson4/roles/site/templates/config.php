<?php
// HTTP
define('HTTP_SERVER', 'http://{{ hostname }}/');

// HTTPS
define('HTTPS_SERVER', 'http://{{ hostname }}/');

// DIR
define('DIR_APPLICATION', '/home/www/{{ hostname }}/www/catalog/');
define('DIR_SYSTEM', '/home/www/{{ hostname }}/www/system/');
define('DIR_IMAGE', '/home/www/{{ hostname }}/www/image/');
define('DIR_LANGUAGE', '/home/www/{{ hostname }}/www/catalog/language/');
define('DIR_TEMPLATE', '/home/www/{{ hostname }}/www/catalog/view/theme/');
define('DIR_CONFIG', '/home/www/{{ hostname }}/www/system/config/');
define('DIR_CACHE', '/home/www/{{ hostname }}/www/system/storage/cache/');
define('DIR_DOWNLOAD', '/home/www/{{ hostname }}/www/system/storage/download/');
define('DIR_LOGS', '/home/www/{{ hostname }}/www/system/storage/logs/');
define('DIR_MODIFICATION', '/home/www/{{ hostname }}/www/system/storage/modification/');
define('DIR_UPLOAD', '/home/www/{{ hostname }}/www/system/storage/upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', '{{ db_user }}');
define('DB_PASSWORD', '{{ db_password }}');
define('DB_DATABASE', '{{ db_name }}');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');