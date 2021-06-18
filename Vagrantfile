# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  
  config.vm.box = "ubuntu/xenial64"
  config.vm.provider "virtualbox" do |v|
    v.name = "EXAM"
  end

  config.vm.network "private_network", ip: "192.168.33.20"

  config.vm.synced_folder "./examen", "/var/www/html/"

end
