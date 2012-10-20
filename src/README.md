## SOU Stock Market Simulator src directory

* Contains directories and files that implement the system.
* Basically one subdirectory for each major functional area of the system.

## Build Procedure:
* In the Git GUI | options, set your default shell to Git Bash
* Start a git Bash shell.  On Windows, this is  
Start | All Programs | Git Hub, Inc | Git Shell  

WARNING:  
* The build script will drop and recreate the mysql 'sousms' database
* The build script will remove all files from the web directory
you pass to the script  


* to run the script, at the git shell prompt, type:  
'''
build-team/buildSousms.sh <db-root-password> <path-to-web-directory>
'''
