# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
  config.vm.box = "bento/centos-6.7"
  config.vm.network "forwarded_port", guest: 80, host: 9090
  config.vm.synced_folder "./www", "/var/www"

  if  ARGV[0] != 'destroy'
      config.vm.provision "ansible_local" do |ansible|
        ansible.install = true
        ansible.playbook = "ansible/playbook.yml"
      end
  end
end
