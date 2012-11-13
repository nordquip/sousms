## UCcontributetoNordquipSousmsUsingGitShell
### Actors
* sousms developer

### Description
developer reads and writes nordquip/sousms (the main git repository)

### Preconditions
* Git shell installed on developer's computer
* developer added to nordquip/sousms collaborators list

### Postconditions
* Successful - developers changes successfully added to repostitory
* Unsuccessful - developers changes not in the repository

### Dialog:
1. start git shell
2. cd to directory in which you would like to store your local copy of the repository
3. git clone git@github.com:nordquip/sousms.git  # create new local repo  
System responds with clone statistics
4. cd sousms  # cd to the new local repository  
Here are some testing commands:
5. git pull  # pull any new changes  
System will probably report 'Already up to date'
6. git push  # push any new changes (none) up to nordquip/sousms on github.com
7. create a new file
8. git add --dry-run .   
Add any new files in this directory and any subdirs to the index.  Shows what would be added, but does not do the add.  
The index is the list of files in your local directory that are (or will be)
also present in the github.com repository.
9. git pull  # pull any new changes  
System reports any changes pulled into local repo
10. git commit -a -m 'message describing your file addition'  
System reports your file added to the index
11. git push  
System reports changes made to the nordquip/sousms repo


#### Alternate path
Starting after step 6 above:  
1. Edit or delete or rename an existing file
2. git pull
3. git commit -a -m 'description of changes'
4. git push



