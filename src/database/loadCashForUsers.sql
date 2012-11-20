/*
	Gives each user an initial cash amount
	Pete Nordquist 121115
*/



insert Cash
	select UserID, 100000, now()
	from User;

