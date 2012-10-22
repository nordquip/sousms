/* 
	Declares tables needed by sousms
	Pete Nordquist 121019
*/

/* Create feed table */

/* MODIFY: Incomplete -- db team will modify with correct fields */
create table feed (
	symbol varchar(8),
	price decimal(10,4),
	index (symbol) -- creates an index on symbol.  No PK in this table.
) engine=InnoDB;

