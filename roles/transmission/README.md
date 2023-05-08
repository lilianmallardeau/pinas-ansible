Transmission
============

An Ansible role to install and configure transmission-daemon

Role Variables
--------------

Any variable in the transmission-daemon config file (`/etc/transmission-daemon/settings.json`) can be used, prefixed with `transmission_` and with dashes (`-`) converted to underscores (`_`). For example, the `rpc-enabled` parameter in `settings.json` becomes `transmission_rpc_enabled`.

See https://help.ubuntu.com/community/TransmissionHowTo for a list of available configuration variables.

Example Playbook
----------------

```yaml
- hosts: servers
  roles:
    - role: transmission
      vars:
        transmission_rpc_username: "username"
        transmission_rpc_password: "password"
        ...
```

License
-------

MIT
