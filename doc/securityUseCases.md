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


## MEMORY C0RRUPTION
 
### Actors
* Hacker
* Server/Target system
 
### Description
Hacker injects code into the target server to manipulate memory so that it executes a payload.
 
### Preconditions
* Information gathering (Target fingerprinting, scanning for services, application fingerprinting)
* Hacker thinks a memory c0rruption vulnerability exists (through code auditing, penetration testing)
* 
 
### Postconditions
* Successful – inject shellcode payload and get target system to execute the code, get remote root/system shell, etc...
* Unsuccessful – unable to execute arbitrary code on remote system. Target may not be vulnerable.
 
### Dialog
Unless otherwise specified, all actions executed by Malicious Hacker:
 
1. Fuzzing the target system to trigger some sort of unknown crash, output, or other unintended behavior (NOT A DOS, however one may occur).
2. Is the error repeatable.
3. Manipulate data being sent to the target system to try and isolate where the unintended behavior occurs.
4. Once location of error is isolated, test if output can be manipulated (depending on unintended behavior this may not work)
5. If output can be manipulated
  1. Identify methods of controlling memory.
  2. Identify usable characters for attack string.
  3. Identify offsets and significant elements in attack string.
6. Identify amount of usable space for the payload.
7. Overwrite variables so they overflow into saved frame pointer and return address.
8. If the overwite is sucessfull:
  1. Hacker writes a memory address in the stack for return
  2. The subroutine returns into payload on stack.
  3. Payload is executed!
8. when payload is executed on the target system:
  1. Remote shell listening on port.
  2. Keylogger dropped onto system.
  3. Malware dropped.
  4. Backdoor for access at a later date.

9. Sucessfull exploitation leads to full compromise of the target system.  Remote root/system access!!!
10. Exfiltrate data from system, steal everything!


##SQL Injections

###Actors
*SQL Injector (Blake Lykins)
*Server

###Description
*SQL injector scanning the system to see where they can inject sql statements to receive any information they want from that systems database.

###Postconditions
*Successful - Inject sql and able to recieve all the records held in the database (Login usernames and passwords, accounts, etc.)
*Unsuccessful - Unable to successfully inject sql and receive the information.

###Dialog

1. First you must run a static test on the code either by reading it yourself or using a static code analysis tool.
2. If you have found vulnerabilites in the code you need to research and figure out what sql injection you can use to get into the system.
3. Next you can run a dynamic test to generate random input (fuzzing). 
4. If something is found, you can research the vulnerability again and see what injection you can use to get into the system.