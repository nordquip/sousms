/*
	sousms Stored Procedure interfaces with their implementations
	Pete Nordquist 121019
*/


/* storeTickForSymbol(symbol, ...)
	insert one 'tick' for one symbol into the database.
	returns an error if insert unsuccessful
*/

/* ADD OUT PARAM and select record inserted into THAT out param */

drop procedure if exists storeTickForSymbol;
delimiter //
create procedure storeTickForSymbol(
	IN symbol varchar(8), 
	IN price decimal(10,4))
begin
	insert into feed values (symbol, price);
	select * from feed;
end;
//

/* add other interfaces in the same format */

delimiter ;
