Nextcloud Ansible role
======================

An Ansible role to install and configure Nextcloud

Role Variables
--------------

- `nextcloud_db_name`: default `nextcloud`  
Database name for Nextcloud
- `nextcloud_db_username`: default `nextcloud`  
Database username
- `nextcloud_db_password`: default `nextcloud`  
Database password
- `nextcloud_download_url`: default `https://download.nextcloud.com/server/releases/latest.tar.bz2`  
Nextcloud download URL
- `nextcloud_checksum_url`: default `sha256:https://download.nextcloud.com/server/releases/latest.tar.bz2.sha256`  
Nextcloud checksum URL
- `nextcloud_download_path`: default `/tmp/nextcloud.tar.bz2`  
Temporary download path
- `nextcloud_www_folder`: default `/var/www`  
Webserver document root
- `nextcloud_data_directory`: default `/srv/nextcloud`  
Data directory for Nextcloud
- `nextcloud_php_memory_limit`: default `2G`  
PHP memory limit for Nextcloud
- `nextcloud_domain_name`: default `nextcloud.local`  
Domain name
- `nextcloud_default_phone_region`: default `FR`  
Default phone region for Nextcloud

Example Playbook
----------------

```yaml
- hosts: servers
  roles:
    - role: nextcloud
      vars:
        nextcloud_db_name: <database_name>
        nextcloud_db_username: <database_username>
        nextcloud_db_password: <database_password>
        nextcloud_data_directory: /data/nextcloud
        nextcloud_php_memory_limit: 2G
        nextcloud_domain_name: "mynextcloud.example.com"
        nextcloud_default_phone_region: FR
```

License
-------

MIT
