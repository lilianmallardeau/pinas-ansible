# PiNAS Ansible
This repo holds the Ansible playbooks and tasks for my Raspberry Pi NAS. It's a Raspberry Pi 4B enclosed in an Argon EON case, with a few hard drives in it.

<div align="center">
    <a href="https://argon40.com/products/argon-eon-pi-nas">
        <img width="65%" src="https://github.com/lilianmallardeau/pinas-ansible/assets/56023249/c4e87817-447d-4026-a4c6-d7d99d113a2f">
    </a>
</div>

I use Debian as the base OS, and on top of it I've setup:

- ZFS for storage (encrypted RAID1-like mirroring and snapshots)
- The Argon EON service to manage the fan speed according to the temperature
- A [WireGuard](https://www.wireguard.com) tunnel to access my NAS from my devices anywhere
- [DuckDNS](https://www.duckdns.org) for dynamic DNS
- [Syncthing](https://syncthing.net) to sync folders between my computer/phone and my NAS (documents, pictures...)
- [Vaultwarden](https://github.com/dani-garcia/vaultwarden) for my passwords
- [Nextcloud](https://nextcloud.com)
- [Apache](https://httpd.apache.org), for Nextcloud and as a reverse proxy for the other web-based services
- [Transmission](https://transmissionbt.com) daemon, to download torrents remotely
- [Let's Encrypt](https://letsencrypt.org) certificates with [certbot](https://certbot.eff.org)
- [playlist-sync](https://github.com/lilianmallardeau/playlist-sync/) to continously download my playlists (I then sync them to my phone using Syncthing)

All of this is managed with the Ansible playbooks in this repo. All the roles used are available in their own repository on my GitHub.
