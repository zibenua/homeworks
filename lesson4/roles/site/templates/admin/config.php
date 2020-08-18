<?php
// HTTP
define('HTTP_SERVER', 'https://{{ hostname }}/admin/');
define('HTTP_CATALOG', 'https://{{ hostname }}/');

// HTTPS
define('HTTPS_SERVER', 'https://{{ hostname }}/admin/');
define('HTTPS_CATALOG', 'https://{{ hostname }}/');

// DIR
define('DIR_APPLICATION', '/home/www/{{ hostname }}/www/admin/');
define('DIR_SYSTEM', '/home/www/{{ hostname }}/www/system/');
define('DIR_IMAGE', '/home/www/{{ hostname }}/www/image/');
define('DIR_LANGUAGE', '/home/www/{{ hostname }}/www/admin/language/');
define('DIR_TEMPLATE', '/home/www/{{ hostname }}/www/admin/view/template/');
define('DIR_CONFIG', '/home/www/{{ hostname }}/www/system/config/');
define('DIR_CACHE', '/home/www/{{ hostname }}/www/system/storage/cache/');
define('DIR_DOWNLOAD', '/home/www/{{ hostname }}/www/system/storage/download/');
define('DIR_LOGS', '/home/www/{{ hostname }}/www/system/storage/logs/');
define('DIR_MODIFICATION', '/home/www/{{ hostname }}/www/system/storage/modification/');
define('DIR_UPLOAD', '/home/www/{{ hostname }}/www/system/storage/upload/');
define('DIR_CATALOG', '/home/www/{{ hostname }}/www/catalog/');


// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', '{{ db_user }}');
define('DB_PASSWORD', '{{ db_password }}');
define('DB_DATABASE', '{{ db_name }}');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

