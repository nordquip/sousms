#! /bin/bash
# serverBootScript.sh
# Ryan Dempsey 121024
# This script pulls the latest repository from the internet, and updates the build script.
# ATTENTION: This script is not for use on student LAMP stacks...

# Conditions:
# /var/git/ contains both this script and the serverBuildScript
# sousms-new does NOT exist

# TODO verify that sousms-new does not exist

# Pull the latest repository from GitHub
git clone git://github.com/nordquip/sousms.git /var/git/sousms-new/

# TODO Check to see if the Git repository was pulled correctly.

# TODO Generate last commit XML file -- Needs formatting.
cd /var/git/sousms-new
git log -1 >  /var/git/sousms-new/version.xml

# Copy the new build-script to the correct cronjob location
cp /var/git/sousms-new/src/build/serverBuildScript.sh /var/git/serverBuildScript.sh

# Execute the new serverBuildScript
sh /var/git/serverBuildScript.sh