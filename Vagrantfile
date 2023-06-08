# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  config.vm.box = "debian/bullseye64"
  config.vm.hostname = "pinas.local"

  config.vm.network "private_network", ip: "192.168.50.10"

  config.vm.synced_folder ".", "/vagrant", disabled: true

  config.vm.provider "libvirt" do |libvirt|
    libvirt.memory = 2048
    libvirt.cpus = 2
  end

  config.vm.provision "ansible" do |ansible|
    ansible.playbook = "main.yml"
  end
end
