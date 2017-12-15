##############################################################
# This file helps with creating the environment on a linux machine
###############################################################

yum_filename="linux_setup/yum-pkgs.txt"
app_dir="/var/www/html"   #/var/www./html
app_user="project.svc"
app_group="project"
app_name="Wether+Login"  #Login
service_file="httpd"  #httpd

function service_install_enable {
	  systemctl enable $service_file
	  systemctl start $service_file
		chkconfig $service_file on

}

function create_group {
	 if [ $(getent group $app_group) ]; then
		 echo "$app_group already exists."
	 else
		 groupadd $app_group
		 echo "$app_group has been created."
	 fi
}

function create_svc_user {
    if [ $(getent passwd $app_user) ]; then
	    echo "$app_user already exists."
	  else
	     useradd -r $app_user
	    echo "$app_user has been created."
	    fi
}

function dirapp_setup {
	test -d $app_dir && echo "Directory exists" || (mkdir $app_dir; echo "Created Directory $app_dir")
	test -d ${app_name} && cp -r ${app_name}/* ${app_dir}/ || (echo "Application is not found"; exit 1)
	chown -R $app_user:$app_group $app_dir
}

function main {
    test -e $yum_filename && yum -y install $(cat $yum_filename) || (echo " $yum_filename is not found, can't continue"; exit 1)

    create_group && create_svc_user && usermod -a -G $app_group $app_user
    dirapp_setup
    service_install_enable
}

main
