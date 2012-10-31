##MetasploitResearch


Researching Vulnerabilities/Exploits

* Based on known info of server:
 - Uses Apache version: 2.2.15
  * http://httpd.apache.org/security/vulnerabilities_22.html
   - VULNERABILITY moderate: error responses can expose cookies CVE-2012-0053
   - VULNERABILITY moderate: mod_proxy reverse proxy exposure CVE-2011-4317
   - VULNERABILITY low: mod_setenvif .htaccess privilege escalation CVE-2011-3607
 - Uses SSH
  * http://www.metasploit.com/modules/auxiliary/scanner/ssh/ssh_login
   - SSH Login Check Scanner
  * http://eromang.zataz.com/2011/08/06/metasploit-ssh-auxiliary-modules/
   - SSH Auxiliary Module.


After scanning a server, you have learned the following: The server is running
Apachie version 2.2.15, and has the ssh service available. Checking the net for
vulnerabilities of known services hosted by the server is your next move. Once
you have pinpointed the vulnerabilities, you can begin to search for the 
corresponding exploits. After the exploits have been implemented successfully, 
you may perform a variety of tasks including: information gathering, tampering 
with sensative information or functions, or even cause a denial of service...etc.

You search Apache's web server for any helpful information. You see all of the
security flaws that were fixed in newer patches (of which there are many).
All of these vulnerabilities apply to the server running Apache 2.2.15. While 
perusing the list of vulnerabilities, a few in particular catch your eye. 
One vulnerability uses errors to expose cookies, another vulnerability of 
mod_proxy can allow reverse proxy exposure, and the last vulnerability of mod_setenvif
allows privilage escilation through an integer over-flow.

SSH must be examined as well. Metasploit has many modules designed to break
ssh. Two of those metasploit modules are the SSH Login Check Scanner, and 
the SSH Auxiliary Module. Each of these two modules can be used to brute force
an ssh login. Before attempting a brute force login, it is important to know
how many failed attempts can be performed before a lock-out will occur.
When you know this, you can properly configure your brute force attack. Both 
SSH Login Check Scanner, and SSH Auxiliary work by attempting a login to ssh 
with a text file of credentials. Additionally each module can use the ssh_login_pubkey
to "login across a range of devices".

So as it turns out both of the services rendered by the target server are
vulnerable to an attack. A couple metasploit modules were explained to
brute force a login. Another vulnerability in the Apache service allows for
privilage escalation which can increase your rights, and allow you to 
perform even more powerful malicious acts.
