CREATE TABLE Members
(
M_ID int PRIMARY KEY IDENTITY,
UserName varchar (50) NOT NULL,
Password varchar (50) DEFAULT 'pass' NOT NULL,
LastName varchar (50) NOT NULL,
FirstName varchar (50) NOT NULL, 
Email varchar (75) NOT NULL,
Phone varchar (12) NOT NULL
)

CREATE TABLE Bank
(
AcctNum int PRIMARY KEY IDENTITY(100,1),
Balance numeric(10,2) DEFAULT '0.00' NOT NULL,
M_Id int,
FOREIGN KEY (M_Id) REFERENCES Members (M_Id)
)

CREATE TABLE Transactions
(
TransNum int PRIMARY KEY IDENTITY(1000,1),
TransDate date NOT NULL,
TransTime time NOT NULL,
TransType bit,
TransAmount numeric(10,2) NOT NULL,
NumShares int NOT NULL,
FOREIGN KEY (AcctNum) REFERENCES Bank (AcctNum)
)
 