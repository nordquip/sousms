Drop Procedure if exists sell;
Delimiter //
Create Procedure sell(
	in uid int,
	in sym char,
	in num int,
	in prc float,
	out success Boolean
)
Begin
	Declare ownsStock int;
	Declare totalSell float;
	Declare symbol char;
	Declare sellSuccess Boolean;
	
	Select Symbol from Portfolio 
	Where UserID=Uid into symbol;
	
	Select Shares from Portfolio 
	Where UserID=Uid and Symbol=sym 
	Into ownsStock;
	
	If num=ownsStock then
		set sellSuccess='0';
	else
		set sellSuccess='1';
	end if;
	
	if symbol=sym then
		if ownsStock>=num then
			Set success='1';
			set totalSell=prc*num;
			insert into Stock (UserID, Symbol, SellBuy, Shares, Price)
				values (uid, sym, 0, num, totalSell);
			update Cash 
				set Balance=Balance+totalSell;
			if sellSuccess='0' then
				delete from Portfolio where UserID=uid and Symbol=sym;
			end if;
		end if;
	else
	
		Set success='0';
		
	end if;
End //
Delimiter ;