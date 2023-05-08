Argon EON Ansible role
======================

An Ansible role to install Argon EON integration services to a Raspberry Pi

Role Variables
--------------

- `argoneon_enable_rtc_service`: boolean, default: `yes`  
Whether to enable or disable Argon EON service for RTC

- `argoneon_enable_lcd_and_fan_service`: boolean, default: `yes`  
Whether to enable or disable Argon EON service for LCD and fan

Example Playbook
----------------

To enable both services (default):
```yaml
- hosts: servers
  roles:
    - argon-eon
```

To disable one service:
```yaml
- hosts: servers
  roles:
    - role: argon-eon
      vars:
        argoneon_enable_rtc_service: no
        argoneon_enable_lcd_and_fan_service: yes
```

License
-------

MIT
