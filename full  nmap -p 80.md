Starting Nmap 7.80 ( https://nmap.org ) at 2022-09-11 12:26 +03
--------------- Timing report ---------------
  hostgroups: min 1, max 100000
  rtt-timeouts: init 500, min 100, max 1250
  max-scan-delay: TCP 10, UDP 1000, SCTP 10
  parallelism: min 0, max 0
  max-retries: 6, host-timeout: 0
  min-rate: 0, max-rate: 0
---------------------------------------------
NSE: Using Lua 5.3.
NSE: Arguments from CLI: 
NSE: Loaded 151 scripts for scanning.
NSE: Script Pre-scanning.
NSE: Starting runlevel 1 (of 3) scan.
Initiating NSE at 12:26
Completed NSE at 12:26, 0.00s elapsed
NSE: Starting runlevel 2 (of 3) scan.
Initiating NSE at 12:26
Completed NSE at 12:26, 0.00s elapsed
NSE: Starting runlevel 3 (of 3) scan.
Initiating NSE at 12:26
Completed NSE at 12:26, 0.00s elapsed
mass_rdns: Using DNS server 127.0.0.53
Initiating Parallel DNS resolution of 1 host. at 12:26
mass_rdns: 0.00s 0/1 [#: 1, OK: 0, NX: 0, DR: 0, SF: 0, TR: 1]
Completed Parallel DNS resolution of 1 host. at 12:26, 0.00s elapsed
DNS resolution of 1 IPs took 0.00s. Mode: Async [#: 1, OK: 1, NX: 0, DR: 0, SF: 0, TR: 1, CN: 0]
Initiating SYN Stealth Scan at 12:26
Scanning ctf01.root-me.org (212.129.28.18) [1 port]
Packet capture filter (device wlp2s0): dst host 192.168.0.101 and (icmp or icmp6 or ((tcp or udp or sctp) and (src host 212.129.28.18)))
Discovered open port 80/tcp on 212.129.28.18
Completed SYN Stealth Scan at 12:26, 0.06s elapsed (1 total ports)
Overall sending rates: 16.78 packets / s, 738.42 bytes / s.
Initiating Service scan at 12:26
Scanning 1 service on ctf01.root-me.org (212.129.28.18)
Completed Service scan at 12:26, 6.09s elapsed (1 service on 1 host)
Packet capture filter (device wlp2s0): dst host 192.168.0.101 and (icmp or (tcp and (src host 212.129.28.18)))
Initiating OS detection (try #1) against ctf01.root-me.org (212.129.28.18)
OS detection timingRatio() == (1662888409.360 - 1662888408.860) * 1000 / 500 == 1.002
Retrying OS detection (try #2) against ctf01.root-me.org (212.129.28.18)
OS detection timingRatio() == (1662888411.930 - 1662888411.430) * 1000 / 500 == 1.000
NSE: Script scanning 212.129.28.18.
NSE: Starting runlevel 1 (of 3) scan.
Initiating NSE at 12:26
NSE: Starting http-webdav-scan against 212.129.28.18:80.
NSE: Starting http-svn-enum against 212.129.28.18:80.
NSE: Starting http-trane-info against 212.129.28.18:80.
NSE: Starting http-cookie-flags against 212.129.28.18:80.
NSE: [http-cookie-flags 212.129.28.18:80] start check of /
NSE: Starting https-redirect against 212.129.28.18:80.
NSE: Starting http-generator against 212.129.28.18:80.
NSE: Starting http-auth against 212.129.28.18:80.
NSE: Starting hnap-info against 212.129.28.18:80.
NSE: Starting http-svn-info against 212.129.28.18:80.
NSE: Starting http-favicon against 212.129.28.18:80.
NSE: Starting xmlrpc-methods against 212.129.28.18:80.
NSE: Starting vmware-version against 212.129.28.18:80.
NSE: Starting http-ls against 212.129.28.18:80.
NSE: Starting http-robots.txt against 212.129.28.18:80.
NSE: Starting http-cors against 212.129.28.18:80.
NSE: Starting http-git against 212.129.28.18:80.
NSE: Starting address-info against 212.129.28.18.
NSE: Finished address-info against 212.129.28.18.
NSE: Starting http-methods against 212.129.28.18:80.
NSE: Starting http-title against 212.129.28.18:80.
NSE: Starting http-ntlm-info against 212.129.28.18:80.
NSE: [http-webdav-scan 212.129.28.18:80] Target isn't reporting WebDAV
NSE: Finished https-redirect against 212.129.28.18:80.
NSE: Finished http-svn-info against 212.129.28.18:80.
NSE: Finished xmlrpc-methods against 212.129.28.18:80.
NSE: [vmware-version 212.129.28.18:80] Couldn't download file: /sdk
NSE: Finished vmware-version against 212.129.28.18:80.
NSE: Finished http-robots.txt against 212.129.28.18:80.
NSE: Finished http-svn-enum against 212.129.28.18:80.
NSE: [http-trane-info 212.129.28.18:80] HTTP: Host returns proper 404 result.
NSE: [http-cookie-flags 212.129.28.18:80] end check of / : 0 issues found
NSE: Finished http-cookie-flags against 212.129.28.18:80.
NSE: Finished http-git against 212.129.28.18:80.
NSE: [http-methods 212.129.28.18:80] HTTP Status for OPTIONS is 200
NSE: Finished http-generator against 212.129.28.18:80.
NSE: [hnap-info 212.129.28.18:80] HTTP: Host returns proper 404 result.
NSE: Finished http-webdav-scan against 212.129.28.18:80.
NSE: Finished http-trane-info against 212.129.28.18:80.
NSE: Finished hnap-info against 212.129.28.18:80.
NSE: [http-methods 212.129.28.18:80] Response Code to Random Method is 501
NSE: Finished http-methods against 212.129.28.18:80.
NSE: Finished http-auth against 212.129.28.18:80.
NSE: Finished http-ls against 212.129.28.18:80.
NSE: Finished http-title against 212.129.28.18:80.
NSE: Finished http-ntlm-info against 212.129.28.18:80.
NSE: [http-favicon 212.129.28.18:80] No favicon found.
NSE: Finished http-favicon against 212.129.28.18:80.
NSE: Finished http-cors against 212.129.28.18:80.
Completed NSE at 12:26, 0.96s elapsed
NSE: Starting runlevel 2 (of 3) scan.
Initiating NSE at 12:26
NSE: Starting http-server-header against 212.129.28.18:80.
NSE: Finished http-server-header against 212.129.28.18:80.
Completed NSE at 12:26, 0.15s elapsed
NSE: Starting runlevel 3 (of 3) scan.
Initiating NSE at 12:26
Completed NSE at 12:26, 0.00s elapsed
Nmap scan report for ctf01.root-me.org (212.129.28.18)
Host is up, received user-set (0.041s latency).
Scanned at 2022-09-11 12:26:42 +03 for 12s

PORT   STATE SERVICE REASON         VERSION
80/tcp open  http    syn-ack ttl 49 Apache httpd 2.4.38 ((Debian))
| http-methods: 
|_  Supported Methods: GET POST OPTIONS HEAD
|_http-server-header: Apache/2.4.38 (Debian)
|_http-title: Site en construction
Warning: OSScan results may be unreliable because we could not find at least 1 open and 1 closed port
OS fingerprint not ideal because: Missing a closed TCP port so results incomplete
No OS matches for host
TCP/IP fingerprint:
SCAN(V=7.80%E=4%D=9/11%OT=80%CT=%CU=%PV=N%G=N%TM=631DA9DE%P=x86_64-pc-linux-gnu)
SEQ(SP=107%GCD=1%ISR=10A%TI=Z%TS=A)
OPS(O1=M584ST11NW7%O2=M584ST11NW7%O3=M584NNT11NW7%O4=M584ST11NW7%O5=M584ST11NW7%O6=M584ST11)
WIN(W1=FE88%W2=FE88%W3=FE88%W4=FE88%W5=FE88%W6=FE88)
ECN(R=Y%DF=Y%TG=40%W=FAF0%O=M584NNSNW7%CC=Y%Q=)
T1(R=Y%DF=Y%TG=40%S=O%A=S+%F=AS%RD=0%Q=)
T2(R=N)
T3(R=N)
T4(R=N)
U1(R=N)
IE(R=N)

Uptime guess: 44.358 days (since Fri Jul 29 03:52:04 2022)
TCP Sequence Prediction: Difficulty=263 (Good luck!)
IP ID Sequence Generation: All zeros
Final times for host: srtt: 40628 rttvar: 4782  to: 100000

NSE: Script Post-scanning.
NSE: Starting runlevel 1 (of 3) scan.
Initiating NSE at 12:26
Completed NSE at 12:26, 0.00s elapsed
NSE: Starting runlevel 2 (of 3) scan.
Initiating NSE at 12:26
Completed NSE at 12:26, 0.00s elapsed
NSE: Starting runlevel 3 (of 3) scan.
Initiating NSE at 12:26
Completed NSE at 12:26, 0.00s elapsed
Read from /usr/bin/../share/nmap: nmap-os-db nmap-payloads nmap-service-probes nmap-services.
OS and Service detection performed. Please report any incorrect results at https://nmap.org/submit/ .
Nmap done: 1 IP address (1 host up) scanned in 13.03 seconds
           Raw packets sent: 87 (8.964KB) | Rcvd: 16 (912B)
