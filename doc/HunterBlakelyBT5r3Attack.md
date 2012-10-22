Info gathering / Exploiting 140.211.89.15


*****************************************************************************************
October 19, 2012 3:22 PM

DNS FINGERPRINTING TARGET (host 140.211.89.15):

15.89.211.140.in-addr.arpa domain name pointer aenasdaq01v.sou.edu.



NMAP SYN SCAN TARGET:

nmap -sS 140.211.89.15 -sV -A -T4 > /Users/compute/Desktop/140.211.89.15_nmap.txt

Starting Nmap 5.61TEST4 ( http://nmap.org ) at 2012-10-19 15:07 PDT
Nmap scan report for aenasdaq01v.sou.edu (140.211.89.15)
Host is up (0.018s latency).
Not shown: 998 filtered ports
PORT   STATE SERVICE VERSION
22/tcp open  ssh     OpenSSH 5.3 (protocol 2.0)
| ssh-hostkey: 1024 34:8f:22:c0:b4:b9:55:76:a8:d6:1f:dc:85:80:05:03 (DSA)
|_2048 cb:b6:4c:4a:bd:8c:17:5d:d6:7e:58:a0:b1:a4:11:a8 (RSA)
80/tcp open  http    Apache httpd 2.2.15 ((CentOS))
| http-methods: Potentially risky methods: TRACE
|_See http://nmap.org/nsedoc/scripts/http-methods.html
|_http-title: Apache HTTP Server Test Page powered by CentOS
Warning: OSScan results may be unreliable because we could not find at least 1 open and 1 closed port
Device type: general purpose|specialized|WAP|media device
Running (JUST GUESSING): Linux 2.6.X (91%), Crestron 2-Series (87%), Netgear embedded (87%), Western Digital embedded (87%)
OS CPE: cpe:/o:linux:kernel:2.6 cpe:/o:crestron:2_series
Aggressive OS guesses: Linux 2.6.38 - 2.6.39 (91%), Linux 2.6.39 (89%), Crestron XPanel control system (87%), Netgear DG834G WAP or Western Digital WD TV media player (87%)
No exact OS matches for host (test conditions non-ideal).
Network Distance: 7 hops

TRACEROUTE (using port 80/tcp)
HOP RTT      ADDRESS
1   9.90 ms  192.168.1.1
2   18.91 ms 066-241-086-001.router.ashlandfiber.net (66.241.86.1)
3   22.55 ms 10.9.9.2
4   15.68 ms lsn-ds-531.coreds.net (216.115.1.117)
5   16.10 ms nerobgp (216.115.2.10)
6   27.00 ms sou-gw.nero.net (140.211.2.18)
7   24.76 ms aenasdaq01v.sou.edu (140.211.89.15)

OS and Service detection performed. Please report any incorrect results at http://nmap.org/submit/ .
Nmap done: 1 IP address (1 host up) scanned in 20.22 seconds




NMAP UDP SCAN OF TARGET:

nmap -sU 140.211.89.15 >> /Users/compute/Desktop/140.211.89.15_nmap.txt

Starting Nmap 5.61TEST4 ( http://nmap.org ) at 2012-10-19 15:13 PDT
Nmap scan report for aenasdaq01v.sou.edu (140.211.89.15)
Host is up (0.14s latency).
All 1000 scanned ports on aenasdaq01v.sou.edu (140.211.89.15) are open|filtered

Nmap done: 1 IP address (1 host up) scanned in 13.80 seconds






October 21, 2012, ~11:50 AM

SCANNING TARGET WITH METASPLOIT:

[*] Building list of scan ports and modules
[*] Launching TCP scan
msf > use auxiliary/scanner/portscan/tcp
msf  auxiliary(tcp) > set THREADS 24
THREADS => 24
msf  auxiliary(tcp) > set PORTS 50000, 21, 1720, 80, 443, 143, 3306, 110, 5432, 25, 22, 23, 1521, 50013, 161, 17185, 135, 8080, 4848, 1433, 5560, 512, 513, 514, 445, 5900, 5038, 111, 139, 49, 515, 7787, 2947, 7144, 9080, 8812, 2525, 2207, 3050, 5405, 1723, 1099, 5555, 921, 10001, 123, 3690, 548, 617, 6112, 6667, 3632, 783, 10050, 38292, 12174, 2967, 5168, 3628, 7777, 6101, 10000, 6504, 41523, 41524, 2000, 1900, 10202, 6503, 6070, 6502, 6050, 2103, 41025, 44334, 2100, 5554, 12203, 26000, 4000, 1000, 8014, 5250, 34443, 8028, 8008, 7510, 9495, 1581, 8000, 18881, 57772, 9090, 9999, 81, 3000, 8300, 8800, 8090, 389, 10203, 5093, 1533, 13500, 705, 623, 4659, 20031, 16102, 6080, 6660, 11000, 19810, 3057, 6905, 1100, 10616, 10628, 5051, 1582, 65535, 105, 22222, 30000, 113, 1755, 407, 1434, 2049, 689, 3128, 20222, 20034, 7580, 7579, 38080, 12401, 910, 912, 11234, 46823, 5061, 5060, 2380, 69, 5800, 62514, 42, 5631, 902, 5985
PORTS => 50000, 21, 1720, 80, 443, 143, 3306, 110, 5432, 25, 22, 23, 1521, 50013, 161, 17185, 135, 8080, 4848, 1433, 5560, 512, 513, 514, 445, 5900, 5038, 111, 139, 49, 515, 7787, 2947, 7144, 9080, 8812, 2525, 2207, 3050, 5405, 1723, 1099, 5555, 921, 10001, 123, 3690, 548, 617, 6112, 6667, 3632, 783, 10050, 38292, 12174, 2967, 5168, 3628, 7777, 6101, 10000, 6504, 41523, 41524, 2000, 1900, 10202, 6503, 6070, 6502, 6050, 2103, 41025, 44334, 2100, 5554, 12203, 26000, 4000, 1000, 8014, 5250, 34443, 8028, 8008, 7510, 9495, 1581, 8000, 18881, 57772, 9090, 9999, 81, 3000, 8300, 8800, 8090, 389, 10203, 5093, 1533, 13500, 705, 623, 4659, 20031, 16102, 6080, 6660, 11000, 19810, 3057, 6905, 1100, 10616, 10628, 5051, 1582, 65535, 105, 22222, 30000, 113, 1755, 407, 1434, 2049, 689, 3128, 20222, 20034, 7580, 7579, 38080, 12401, 910, 912, 11234, 46823, 5061, 5060, 2380, 69, 5800, 62514, 42, 5631, 902, 5985
msf  auxiliary(tcp) > set RHOSTS 140.211.89.15
RHOSTS => 140.211.89.15
msf  auxiliary(tcp) > run -j
[*] Auxiliary module running as background job
[*] 140.211.89.15:22 - TCP OPEN
[*] 140.211.89.15:80 - TCP OPEN
[*] Scanned 1 of 1 hosts (100% complete)

[*] Starting host discovery scans

[*] 2 scans to go...
msf  auxiliary(tcp) > use scanner/ssh/ssh_version
msf  auxiliary(ssh_version) > set THREADS 24
THREADS => 24
msf  auxiliary(ssh_version) > set RPORT 22
RPORT => 22
msf  auxiliary(ssh_version) > set RHOSTS 140.211.89.15
RHOSTS => 140.211.89.15
msf  auxiliary(ssh_version) > run -j
[*] Auxiliary module running as background job
[*] 140.211.89.15:22, SSH server version: SSH-2.0-OpenSSH_5.3
[*] Scanned 1 of 1 hosts (100% complete)

[*] 1 scan to go...
msf  auxiliary(ssh_version) > use scanner/http/http_version
msf  auxiliary(http_version) > set THREADS 24
THREADS => 24
msf  auxiliary(http_version) > set RPORT 80
RPORT => 80
msf  auxiliary(http_version) > set RHOSTS 140.211.89.15
RHOSTS => 140.211.89.15
msf  auxiliary(http_version) > run -j
[*] Auxiliary module running as background job
[*] 140.211.89.15:80 Apache/2.2.15 (CentOS) ( 403-Forbidden )
[*] Scanned 1 of 1 hosts (100% complete)

[*] Scan complete in 25.33s



LAUNCH HAIL MARRY ATTACK:

1) Finding exploits (via local magic)

    [140.211.89.15] Found 139 exploits

2) Sorting Exploits
3) Launching Exploits
4) Listing sessions
msf > sessions -v
Active sessions
===============
No active sessions.



RESULTS OF ATTACK:

SUCCESSFUL, no Shell was granted, the server remains protected. 

*****************************************************************************************
