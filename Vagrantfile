
Vagrant.configure("2") do |config|
  config.vm.box = "centos/7"
  config.vm.provision "file", source: "deploy.tar.gz", destination: "/tmp/deploy.tar.gz
"
  config.vm.provision "shell" do |s|
    s.inline = "tar -xvzf /tmp/deploy.tar.gz -C /tmp && cd /tmp/deploy && ./provisioner.sh"
  end
 config.vm.provider "virtualbox" do |v|
    v.name = "login"
 end
end
