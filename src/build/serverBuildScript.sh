#! /bin/bash
# serverBuildScript.sh
# Ryan Dempsey 121024
# This script stops services, moves the latest repository files into the correct locations, and starts the services again.
# ATTENTION: This script is not for use on student LAMP stacks...

# Conditions:
# sousms-new exists, with the latest repository within.
# sousms-old exists, with the last outdated repository within.

# Delete the backup repository
rm -rf /var/git/sousms-backup

# TODO Run smoke tests, log results, and exit if smoke tests failed


# Stop running services
service httpd stop
service mysqld stop

# TODO Backup MySQL database -- copy database, and run sql data preservation scripts

# Remove current repository -- change to backup directory
mv /var/git/sousms /var/git/sousms-old

# Delete outdated files
rm /var/www/html/* -r

# Move downloaded repository to official location
mv /var/git/sousms-new /var/git/sousms

# Move files to correct server locations
cp /var/git/sousms/src/web/html/* /var/www/html/

# TODO Run build/SQL scripts

# Restart services
service httpd start
service mysqld start