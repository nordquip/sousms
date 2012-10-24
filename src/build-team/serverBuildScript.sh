#! /bin/bash
# serverBuildScript.sh
# Ryan Dempsey 121024
# This script currently copies the git repository to the server, and moves the latest files into the appropriate directories.
# Attention: This script is not the one Nordquist has mentioned in class... this is for server usage only.

# Delete the old backup repository
rm -rf /var/git/sousms-old

# Pull the latest repository from GitHub
mkdir /var/git/sousms-new
cd /var/git/sousms-new
git clone git://github.com/nordquip/sousms.git

# TODO Check to see if the Git repository was pulled correctly, and generate version xml if so. Otherwise, log and exit.

# TODO Run smoke tests, log erros and exit if smoke tests failed

# Stop running services
service httpd stop
service mysqld stop

# TODO Backup MySQL database to another location

# Move current repository to backup directory & delete old repository files
mv /var/git/sousms /var/git/sousms-old
rm /var/www/html/* -r

# Move the new repository to the correct locations
mv /var/git/sousms-new/sousms /var/git/sousms
cp /var/git/sousms/src/web/html/* /var/www/html/

# Restart services
service httpd start
service mysqld start

# Remove the temporary repository download location
rm /var/git/sousms-new -r