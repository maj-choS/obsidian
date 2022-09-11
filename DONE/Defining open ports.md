nmap -Pn -sV --open ctf01.root-me.org

Starting Nmap 7.80 ( https://nmap.org ) at 2022-09-11 11:32 +03
Nmap scan report for ctf01.root-me.org (212.129.28.18)
Host is up (0.041s latency).
Not shown: 998 filtered ports
Some closed ports may be reported as filtered due to --defeat-rst-ratelimit
PORT   STATE SERVICE VERSION
22/tcp open  [[ssh]]     OpenSSH 7.9p1 Debian 10+deb10u2 (protocol 2.0)
80/tcp open  [[http]]    Apache httpd 2.4.38 ((Debian))
Service Info: OS: Linux; CPE: cpe:/o:linux:linux_kernel

Service detection performed. Please report any incorrect results at https://nmap.org/submit/ .
Nmap done: 1 IP address (1 host up) scanned in 16.51 seconds
