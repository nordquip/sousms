/*
	sousms Stored Procedure interfaces with their implementations
	Pete Nordquist 121019
	
	Note: Be sure to drop procedures if they already exist -- we will be running this on a populated server. If you do not drop the procedure, errors will occur. --Ryan5732 
	
	Note: Do not delete or rename this file... it is being used by the build script. --Ryan5732
*/

source dataFeedStoredProcedures.sql;

source TradeEngineStoredProcedures.sql;

source userAccountsStoredProceduresForLogin.sql;

-- 121123 version of this file still has sql errors
-- source userAccountsStoredProcedures.sql;
