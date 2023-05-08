Duck DNS Ansible role
=====================

An Ansible role to add a cron job to update a Duck DNS record

Role Variables
--------------

- `duckdns_domain`: mandatory  
Duck DNS subdomain to update. Can be a comma separated (no spaces) list of domains.

- `duckdns_token`: mandatory  
Duck DNS token

- `duckdns_log_file`: default `/var/log/duckdns.log`  
Log file to write curl request output to

- `duckdns_cronjob_user`: default `root`  
User to add cron job to

Example Playbook
----------------

```yaml
- hosts: servers
  roles:
    - role: duckdns
      vars:
        duckdns_domain: "<domain>"
        duckdns_token: "<token>"
```

License
-------

MIT
