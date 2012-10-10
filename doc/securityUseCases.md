## Metasploit
### Actors 
    Judy Weaver
###Description
Use of this program is to test the Stock Market Analyzer for possible security 
risks and help correct the weaknesses
###PreConditions
1.  Actor must learn how to use Metasploit
2.	Download a Metasploit book
3.	Watch Metasploit how to videos
4.	Practice metasploit attacks on virtual server Security Group has set up

####PostConditions
Creating a Metasploit attack on the server that is able to get in (success)

Creating a Metasploit attack on the server that is not able to get in (unsuccessful)
###Dialog
1. Actor is to watch videos and read through the "Metasploit Penetration Cookbook" to learn 
    how metasploit works and how to create attacks with Metasploit. 
2. Create an attack that will be used to test the security of
	the Stock Market Analyzer
3. If the attack works then work with the development team to create a patch 
	for that particular type of attack. If the attack is unsucessful go to step 5. 
4. Try the attack a second time to make sure that the patch has worked correctly.
5. Create another attack with Metasploit to look for other vulnerabilities in the
	Stock Market Analyzer
6. Continue with steps 2-5 until non of the attacks created are successful in penetrating
	the Stock Market Analyzer.

## AttackVulnerableSystem (ID of the use case)

### Actors
* Attacker (Hunter Blakely)

### Description
Attacker exploits vulnerabilities in a system using Metasploit

### Preconditions
* Attacker knows the IP of the vulnerable system.
* BackTrack5r3 virtual machine is configured and running.

### Postconditions
* Successful -- Attacker gains shell access on vulnerable system.
* Unsuccessful -- Attacker doesn't penetrate the system.

### Dialog
Unless otherwise specified, all actions executed by attacker:

1. Click Applications -> Accessories -> Terminal
2. In Terminal, type: armitage
3. In armitage GUI, click Hosts
        * Add host
        * Type victim system's IP address
4. Right click victim host's image,
        * scan
5. With victim system selected,
        * Click Attacks -> Find Attacks
6. Once attacks have been found
        * Click Attacks -> Hail Marry
                - This will run all of the attacks available.
7. Success if a shell has been gained:
        * Can run/upload code to manipulate the system.
8. Failure if no shell has been granted:
        * Search for alternative forms of attack.