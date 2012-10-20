#! /bin/bash
# builds sousms
# Pete Nordquist 121019

if [ $# -ne '2' ]
then
	echo "usage: $0 <mysql-root-pword> <path-to-web-dir>"
	echo "	For example:"
	echo "		on windows: $0 '' /c/xampp/htdocs"
	echo "		on *nix: $0 '' /var/www"
	echo "		both examples will start the database as root - no password"
	exit 1
fi

echo -e "Running in directory: `pwd` \n"
echo "WARNING: this script will drop 'sousms' database!"
echo "WARNING: this script will execute:"
echo "rm -rf $2"
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
# copy files to web directory
rm -rf $2
cp -R . $2

# drop then recreate the database
mysql -u root --password="$1" <<EOF
drop database if exists sousms;
source db/sousmsInit.sql;
EOF

if [ $? -ne '0' ] # if the database remake failed
then
	echo "?database drop and remake failed"
	exit 1
fi

# success
exit 0
