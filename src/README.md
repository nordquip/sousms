## SOU Stock Market Simulator src directory

* Contains directories and files that implement the system.
* Basically one subdirectory for each major functional area of the system.

## Build Procedure:
I wanted to provide an example of how the build might work.  

This build procedure will install the latest build on your local system assuming you have an *AMP stack installed and running.

NOTE: You must add the directory containing your mysql program to your path.
See _Modifying your path_ section in the directions in <https://github.com/nordquip/sousms/wiki/Machine-Environment>.

* In the Git GUI | options, set your default shell to Git Bash
* Start a git Bash shell.  On Windows, this is  
Start | All Programs | Git Hub, Inc | Git Shell  

### WARNING:  
* The build script will drop and recreate the mysql 'sousms' database
* The build script will remove all files from the web directory
you pass to the script  


* to run the script, at the git shell prompt, type something like:  
```
build-team/buildSousms.sh '' /c/xampp/htdocs/sousms
```
If you are on linux or mac or on windows and installed xampp in a
directory other than C:, adjust accordingly.

last test