# PiNAS Ansible
This repo holds the Ansible playbooks and tasks for my Raspberry Pi NAS. It's a Raspberry Pi 4B enclosed in an Argon EON case, with a few hard drives in it.

<div align="center">
    <a href="https://argon40.com/products/argon-eon-pi-nas">
        <img width="65%" src="https://github.com/yayuniversal/pinas-ansible/assets/56023249/c4e87817-447d-4026-a4c6-d7d99d113a2f">
    </a>
</div>

I use Debian as the base OS, and on top of it I've setup:

- ZFS for storage (RAID1-like mirroring and snapshots)
- The Argon EON service to manage the fan speed according to the temperature
- A [WireGuard](https://www.wireguard.com) tunnel to access my NAS from my devices anywhere
- ~~[DuckDNS](https://www.duckdns.org) for dynamic DNS~~ just switched to a real domain name!
- [Syncthing](https://syncthing.net) to sync folders between my computer/phone and my NAS (documents, pictures...)
- [Vaultwarden](https://github.com/dani-garcia/vaultwarden) for my passwords
- [Nextcloud](https://nextcloud.com)
- [Nginx](https://nginx.org/) as a reverse proxy for other web-based services
- [Transmission](https://transmissionbt.com) daemon, to download torrents remotely
- [Let's Encrypt](https://letsencrypt.org) certificates with [certbot](https://certbot.eff.org)
- [playlist-sync](https://github.com/yayuniversal/playlist-sync/) to continously download my playlists (I then sync them to my phone using Syncthing)
- [Navidrome](https://www.navidrome.org/) to stream my music from my phone / PC
- [ntfy](https://ntfy.sh/) to send me notifications when things go wrong (failing hard drive, unusual SSH login...)

All of this is managed with the Ansible playbooks in this repo. All the roles used are available in their own repository on my GitHub and are added as submodules (clone with `--recurse-submodules`).
