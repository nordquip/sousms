#! /bin/bash
# serverStartBuildScript.sh
# Ryan Dempsey 121024
# This bootstrap script pulls the latest repository from the internet, and updates the build script. It is step 1 in a 2 step process. After executing, it calls the 2nd script

# ATTENTION: This script is not for use on student LAMP stacks...

# For changes in this file to take effect, it must be moved by hand on the server.

# TODO verify that sousms-new does not exist

# Pull the latest repository from GitHub
git clone git://github.com/nordquip/sousms.git /var/git/sousms-new/

# TODO Check to see if the Git repository was pulled correctly.

<<<<<<< HEAD:src/build/serverBootScript.sh

cd /var/git/sousms-new
git log -1 >  /var/git/sousms-new/src/web/version.xml

# Generate last commit version.txt file to be called by version.php.
 cat /var/www/html/version.xml | grep "commit" | cut -c1-17 | sed s/"commit "/\<commit\>/g > /var/www/html/version.txt

# Copy the new build-script to the correct cronjob location
cp /var/git/sousms-new/src/build/serverBuildScript.sh /var/git/serverBuildScript.sh

# Execute the new serverBuildScript
sh /var/git/serverBuildScript.sh
=======
# Copy the new build-script to the correct cronjob location
cp /var/git/sousms-new/src/build/serverBuildScript.sh /var/git/serverBuildScript.sh

# Execute the newly downloaded serverBuildScript
sh /var/git/serverBuildScript.sh
>>>>>>> cbb82ff7e802eabc9c66e7ef436a457713e9de1e:src/build/serverStartBuildScript.sh
