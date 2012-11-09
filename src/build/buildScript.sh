#! /bin/bash
# builds sousms, so you can test it on your local xampp server
#
# start your local apache and mysql servers
# cd to the src directory in your local repository
# build/buildScript.sh
# Pete Nordquist 121019
# 121107 - added comment and copy files to the correct place.

#if [ $# -ne '2' ]
if [ $# -ne '1' ]
then
	#echo "usage: $0 <mysql-root-pword> <path-to-web-dir>"
	echo "usage: $0 <path-to-web-dir>"
	echo "	For example:"
	echo "		on windows: $0 /c/xampp/htdocs"
	echo "		on *nix: $0 /var/www"
#	echo "		both examples will start the database as root - no password"
	exit 1
fi

echo -e "Running in directory: `pwd` \n"
#echo "WARNING: this script will drop 'sousms' database!"
echo "WARNING: this script will execute:"
echo "rm -rf $1"
echo -n "Proceed (y/n)? "
read ans
if [ "$ans" != "y" -a "$ans" != "Y" ]
then
	echo "?build CANCELLED"
	exit 1
fi

echo "Building SOUSMS: `date`"
set -x
# show where we are working
pwd
# clear old web directory
rm -rf $1
cp -R . $1
# cd to web directory
cd web
cp -R . $1

# must do the database work from the database directory
#cd ../database

# drop then recreate the database
#mysql -u root --password="$1" <<EOF
#drop database if exists sousms;
#source sousmsInit.sql;
#EOF

#if [ $? -ne '0' ] # if the database remake failed
#then
#	echo "?database drop and remake failed"
#	exit 1
#fi

# success
exit 0
