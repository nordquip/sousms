/*
	Initialization script for SOUSMS database
	Pete Nordquist	121019
*/


/* Create DB */
/* notice no drop here -- first must figure out how to back up the existing db */
create database if not exists sousms;
use sousms;

/* 
the source command is a handy command that
textually includes of the contents of the file you name

NOTE:
All sql source command references are relative to 
just inside the src/ directory in the repository
because these commands are executed by the build script, which executes
from this directory.

execute the file to 'source in' the tables
*/
source db/sousmsDeclareTables.sql;

/* execute the file to 'source in' the interfaces */
source shared/sousmsDeclareStoredProcs.sql;
