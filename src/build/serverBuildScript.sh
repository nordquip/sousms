#! /bin/bash
# serverBuildScript.sh
# Ryan Dempsey 121024
# This script stops services, moves the latest repository files into the correct locations, and starts the services again. It is the 2nd script in a 2 script process.
# ATTENTION: This script is not for use on student LAMP stacks... Server directories are hard-coded.

# DO NOT EDIT THIS FILE - If you need changes made, please contact either Ryan, Jeremy, or Nordquist.

# Delete the backup repository
rm -rf /var/git/sousms-backup

# Generate new repository version files
cd /var/git/sousms
git log -1 >  /var/git/sousms-new/src/web/version.txt


# TODO Run smoke tests, log results, and exit if smoke tests failed here

# Stop running services
# TODO figure out why stopping DataFeed is causing file or directory errors.
cd /var/www/html/DataFeed/
sh stopFeed.sh

cd /var/www/html/te/
bash startup.sh stop

sleep 2
service httpd stop
service mysqld stop

# TODO Backup MySQL database -- copy database, and run sql data preservation scripts

# Move outdated repository to backup directory
mv /var/git/sousms /var/git/sousms-backup

# Delete outdated web files from the server
rm /var/www/html/* -r

# Move downloaded repository to official server location
mv /var/git/sousms-new /var/git/sousms

# Copy web files to root apache folder
cp -R /var/git/sousms/src/web/* /var/www/html/

# Copy team src directories to the web folder
cp -R /var/git/sousms/src/build /var/www/html/
cp -R /var/git/sousms/src/database /var/www/html/
cp -R /var/git/sousms/src/DataFeed /var/www/html/
mkdir /var/www/html/mobile
cp -R /var/git/sousms/src/mobile/html/* /var/www/html/mobile
cp -R /var/git/sousms/src/shared /var/www/html/
cp -R /var/git/sousms/src/te /var/www/html/
cp -R /var/git/sousms/src/teTest /var/www/html/

# TEMP FIX - Copy config file to accessible directories
cp /var/git/sousmsConfig.xml.master /var/www/html/service/sousmsConfigLocal.xml
cp /var/git/sousmsConfig.xml.master /var/www/html/te/service/sousmsConfigLocal.xml
cp /var/git/sousmsConfig.xml.master /var/www/html/DataFeed/sousmsConfigLocal.xml

# run script to parse version info and write to /var/www/html/version.txt
sh /var/git/sousms/src/build/version.sh

# Copy version.php from build directory to apache directory
cp /var/git/sousms/src/build/version.php /var/www/html/version.php

# Run build/SQL scripts here
# Update Stored Procedures. File stored on server only for security.
sh /var/git/serverUpdateStoredProcedures.sh

# Start services
service mysqld start
service httpd start
# TODO figure out why below is throwing no such file or directory errors.
cd /var/www/html/DataFeed/
sh startFeed.sh &

cd /var/www/html/te/
make
bash startup.sh start