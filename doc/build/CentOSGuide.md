CENTOS 6.3 INSTALL/CONFIGURATION INSTRUCTIONS

1. Download Minimal ISO appropriate for your computer's architecture (x86 or 64)  https://www.centos.org/modules/tinycontent/index.php?id=15

2. Download and install Oracle VirtualBox  https://www.virtualbox.org/

3. Create VirtualBox virtual machine
	a. for OS option, choose Linux/Other
	b. Assign VM 1GB RAM
	c. 32 MB Video RAM (if prompted)
	d. Choose 'Bridged Network' for ethernet port 
	e. Add ISO from above into CD/DVD drive of VM and boot
	
4. Choose top install option (no video driver) from CentOS installation prompt
	a. During setup, go to "Configure Network" button and set eth0 to start automatically

5. After install run command "yum update" to update all packages

6. Apache install and setup:
	a. Run "yum install httpd" to install Apache and dependencies
	b. Run "service httpd start" to start Apache service
	c. *Can also run "/sbin/chkconfig httpd on" to start service automatically on boot

7. CentOS Firewall Configuration:
	a. Run “yum install system-config-firewall-tui” then run “system-config-firewall-tui” to open the tui.
	b. Once tui is open, select "Customize" then enable WWW(http)traffic.

8. MYSQL Install/Setup:
	a. Run “yum install mysql-server” to install MYSQL
	b. Run “/etc/init.d/mysqld start” to start daemon on every boot
	c. Run “mysql_secure_installation” for simple SQL security setup
	d. Set MySQL root password: “(RootPassword)”
	e. remove anonymous SQL logins
	f. keep root login remotely
	g. delete test db and users
	h. MySQL configuration file located at: “/etc/my.cnf”
Open the config file, and confirm/add the following line exists in the [mysqld] section: 
bind-address=(IP ADDRESS HERE)
	i. Run “mysql -u root -p” to login to MySQL
	j. Run “create database cs469;” to create database
	k. Run “grant all on cs469.* to ‘administrator’ identified by ‘(UserPassword)’;” to create user administrator, password, and grants rights to database cs469.
	l. Run “quit” to leave mysql
	m. Run "/sbin/chkconfig --levels 235 mysqld on" to start MYSQL on boot.

9. PHP Install and Setup:
	a. Run “yum install php php-pear php-mysql” to install php, something else, and mysql php connector
	b. Can test php by creating testpage.php in web directory having: <?php  phpinfo(); ?>
	
10. Git Install and Setup:
	a. Run "yum install git" to install git
	b. create the direcotry "/var/git" and navigate to it (mkdir /var/git)
	c. while in this directory, run “git clone git://github.com/nordquip/sousms.git” to clone the repo 
	d. After cloning, go to /var/git/sousms, and setup remote with command “git remote add upstream git://github.com/nordquip/sousms.git”
	e. Whenever you wish to update server repository, run “git pull upstream master”

11. Cron job Install and Setup:
	a. Install cron daemon by running “yum install vixie-cron”
	b. Run "crontab -l" to view jobs -e to edit jobs
	c. To setup a script to run hourly, run “sudo crontab -e”, then add the job “0 */1 * * * bash <pathToScriptName>”

12. Java Install Instructions:
	a. Run command "yum search java" to get a list of all available OpenJava packages from the repository. It may be convenient to pipe this command to less for readability.
	b. Identify your desired java package (based on your hardware). Likely "java-1.7.0-openjdk.<architecture type>" or "java-1.6.0-openjdk.<architecture type>"
	c. Run command "sudo yum install <software package name>"
	d. Java is now installed!
