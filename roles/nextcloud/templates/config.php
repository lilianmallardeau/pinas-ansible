<?php
$CONFIG = array (
    'datadirectory' => '{{ nextcloud_data_directory }}/',
    'default_phone_region' => '{{ nextcloud_default_phone_region }}',
    'memcache.local' => '\OC\Memcache\APCu',
    'overwrite.cli.url' => 'https://{{ nextcloud_domain_name }}/',
    'htaccess.RewriteBase' => '/',
);
