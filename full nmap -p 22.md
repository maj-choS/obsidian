sudo nmap -Pn -d -sC -sV -O -vv -T4 --open 212.129.28.18 -p 22
[sudo] password for qwerty: 
Starting Nmap 7.80 ( https://nmap.org ) at 2022-09-11 14:25 +03
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
Initiating NSE at 14:25
Completed NSE at 14:25, 0.00s elapsed
NSE: Starting runlevel 2 (of 3) scan.
Initiating NSE at 14:25
Completed NSE at 14:25, 0.00s elapsed
NSE: Starting runlevel 3 (of 3) scan.
Initiating NSE at 14:25
Completed NSE at 14:25, 0.00s elapsed
mass_rdns: Using DNS server 127.0.0.53
Initiating Parallel DNS resolution of 1 host. at 14:25
mass_rdns: 0.00s 0/1 [#: 1, OK: 0, NX: 0, DR: 0, SF: 0, TR: 1]
Completed Parallel DNS resolution of 1 host. at 14:25, 0.00s elapsed
DNS resolution of 1 IPs took 0.00s. Mode: Async [#: 1, OK: 1, NX: 0, DR: 0, SF: 0, TR: 1, CN: 0]
Initiating SYN Stealth Scan at 14:25
Scanning ctf01.root-me.org (212.129.28.18) [1 port]
Packet capture filter (device wlp2s0): dst host 192.168.0.101 and (icmp or icmp6 or ((tcp or udp or sctp) and (src host 212.129.28.18)))
Discovered open port 22/tcp on 212.129.28.18
Completed SYN Stealth Scan at 14:25, 0.08s elapsed (1 total ports)
Overall sending rates: 11.95 packets / s, 525.58 bytes / s.
Initiating Service scan at 14:25
Scanning 1 service on ctf01.root-me.org (212.129.28.18)
Completed Service scan at 14:25, 0.09s elapsed (1 service on 1 host)
Packet capture filter (device wlp2s0): dst host 192.168.0.101 and (icmp or (tcp and (src host 212.129.28.18)))
Initiating OS detection (try #1) against ctf01.root-me.org (212.129.28.18)
OS detection timingRatio() == (1662895534.206 - 1662895533.705) * 1000 / 500 == 1.002
Retrying OS detection (try #2) against ctf01.root-me.org (212.129.28.18)
OS detection timingRatio() == (1662895536.787 - 1662895536.287) * 1000 / 500 == 1.000
NSE: Script scanning 212.129.28.18.
NSE: Starting runlevel 1 (of 3) scan.
Initiating NSE at 14:25
NSE: Starting ssh-hostkey against 212.129.28.18:22.
NSE: Starting address-info against 212.129.28.18.
NSE: Finished address-info against 212.129.28.18.
NSE: Starting sshv1 against 212.129.28.18:22.
NSE: Finished sshv1 against 212.129.28.18:22.
NSE: Finished ssh-hostkey against 212.129.28.18:22.
Completed NSE at 14:25, 1.54s elapsed
NSE: Starting runlevel 2 (of 3) scan.
Initiating NSE at 14:25
Completed NSE at 14:25, 0.00s elapsed
NSE: Starting runlevel 3 (of 3) scan.
Initiating NSE at 14:25
Completed NSE at 14:25, 0.00s elapsed
Nmap scan report for ctf01.root-me.org (212.129.28.18)
Host is up, received user-set (0.053s latency).
Scanned at 2022-09-11 14:25:33 +03 for 6s

PORT   STATE SERVICE REASON         VERSION
22/tcp open  ssh     syn-ack ttl 50 OpenSSH 7.9p1 Debian 10+deb10u2 (protocol 2.0)
| ssh-hostkey: 
|   2048 cb:4b:c7:5a:f9:da:e8:4f:0e:40:49:81:ac:4d:95:6e (RSA)
| ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQCyL0jZUjTz+gMd/IfIQT8n5y7qFISYv1Datt6ZPUK0Ocs2fjg/1S/njcxeILPuoeR5vU0P4wq0nmZEQTt5CGO4532gatn+sud3Cwfx3vHGeAo6Q7O4nFhqxkRGGM8MJ27pBo3HTpnuOoQ2AldNaw7As4QgojXqtwZf4NpTx+0XuXZaw87OmGPHGmhWzIPTA8+hnVLlyf1zpwGPniiJcd+ijsrNvVV62epACAUYTIaDydCBwpxXhWJaS6FSj58oPyq19OdfvGn1YFZtIMr2F2HYaoFCeHYM3SJA28TjJGDaiBfDht7/XGdKQdXDsFxsr+cvpAMl8r6LcUZJSM4GyPFf
|   256 35:e3:f9:f9:63:2d:5c:c6:3f:d7:27:44:6a:2a:63:f5 (ECDSA)
| ecdsa-sha2-nistp256 AAAAE2VjZHNhLXNoYTItbmlzdHAyNTYAAAAIbmlzdHAyNTYAAABBBMrjqOjOmpZrVWmsv+ftTfNMURtYJ/9+9Zd8TMhlcnbjAvZIAYOhFwFNuC6zH3mfCDnEdvPPtnweF9LtjgkRFwU=
|   256 a6:dd:d7:d5:82:9e:16:79:c7:93:5e:54:2d:38:1e:79 (ED25519)
|_ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAIH7p6JO/faeuriTqTHIllIT/yMEHmEeHPxCS0kDSTCms
Warning: OSScan results may be unreliable because we could not find at least 1 open and 1 closed port
OS fingerprint not ideal because: Missing a closed TCP port so results incomplete
No OS matches for host
TCP/IP fingerprint:
SCAN(V=7.80%E=4%D=9/11%OT=22%CT=%CU=%PV=N%G=N%TM=631DC5B3%P=x86_64-pc-linux-gnu)
SEQ(SP=106%GCD=1%ISR=108%TI=Z%TS=A)
OPS(O1=M584ST11NW7%O2=M584ST11NW7%O3=M584NNT11NW7%O4=M584ST11NW7%O5=M584ST11NW7%O6=M584ST11)
WIN(W1=FE88%W2=FE88%W3=FE88%W4=FE88%W5=FE88%W6=FE88)
ECN(R=Y%DF=Y%TG=40%W=FAF0%O=M584NNSNW7%CC=Y%Q=)
T1(R=Y%DF=Y%TG=40%S=O%A=S+%F=AS%RD=0%Q=)
T2(R=N)
T3(R=N)
T4(R=N)
U1(R=N)
IE(R=N)

Uptime guess: 44.440 days (since Fri Jul 29 03:52:04 2022)
TCP Sequence Prediction: Difficulty=262 (Good luck!)
IP ID Sequence Generation: All zeros
Service Info: OS: Linux; CPE: cpe:/o:linux:linux_kernel
Final times for host: srtt: 52681 rttvar: 3290  to: 100000

NSE: Script Post-scanning.
NSE: Starting runlevel 1 (of 3) scan.
Initiating NSE at 14:25
NSE: Starting ssh-hostkey.
NSE: Finished ssh-hostkey.
Completed NSE at 14:25, 0.00s elapsed
NSE: Starting runlevel 2 (of 3) scan.
Initiating NSE at 14:25
Completed NSE at 14:25, 0.00s elapsed
NSE: Starting runlevel 3 (of 3) scan.
Initiating NSE at 14:25
Completed NSE at 14:25, 0.00s elapsed
Read from /usr/bin/../share/nmap: nmap-os-db nmap-payloads nmap-service-probes nmap-services.
OS and Service detection performed. Please report any incorrect results at https://nmap.org/submit/ .
Nmap done: 1 IP address (1 host up) scanned in 7.71 seconds
           Raw packets sent: 87 (8.964KB) | Rcvd: 16 (912B)
