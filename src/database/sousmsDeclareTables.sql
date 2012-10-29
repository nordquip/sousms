/* 
    Declares tables needed by sousms
    Pete Nordquist 121019
    Pete Nordquist 121026 - finalized feed table and added
    conditional procedure, which is probably not the best way to do it.
*/

/* Create feed table */

/* MODIFY: Incomplete -- db team will modify with correct fields */


drop procedure if exists conditionallyCreateFeedTable;
/* procedure conditionallyCreateFeedTable()

Does not drop existing feed table
1. If feed table doesn't exist, create it

*/
create procedure conditionallyCreateFeedTable()
deterministic
begin
    -- If feed table doesn't exist
    if (select 1
        from Information_schema.tables
        where table_schema = database() and
            table_name = "Feed"
    ) then
        select "Feed table already exists -- skipping";
        

    else
        -- create table
        create table Feed(
            symbol          char(8)         not null,
            bestAskPrice    decimal(10,4)   not null, 
                -- The format says: $$$$$$.dddd, which is 10,4 not 7,2
                -- copy the format and field names of the feed exactly
            bestAskQty      int             not null,
            bestBidPrice    decimal(10,4)   not null,
            bestBidQty      int             not null,
            close           decimal(10,4),     -- close can be null
            high            decimal(10,4)   not null,
            date            date            not null,
            time            time            not null,  
                -- (stores only down to the second,
                -- so store ms in the next field)
            ms              decimal(3,3)    not null,
            lastSale        decimal(10,4)   not null,
            low             decimal(10,4)   not null,
            netChg          decimal(10,4)   not null,
            open            decimal(10,4)   not null,
            pcl             decimal(10,4)   not null,
            vol             int             not null,
            pctChg          decimal(10,8)   not null,  
                -- pctChg was specified as numeric(11) by NASDAQ,
                -- which is the same precision
                -- as the others whose format was decimal(10,4), 
                -- so we can probably get away with decimal(10,8)
            CONSTRAINT FEED_PK PRIMARY KEY(date,time,ms),
                -- Keep the table in chronological order --
                -- these 3 fields are unique:
                -- every record from the feed has a different time stamp
            INDEX(symbol)
                -- need an index on symbol,
                -- so we can find group by symbol quickly
        ) ENGINE=INNODB;
    end if;
END;
//


delimiter ;

call conditionallyCreateFeedTable;
