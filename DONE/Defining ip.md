 dig ctf01.root-me.org

; <<>> DiG 9.18.1-1ubuntu1.1-Ubuntu <<>> ctf01.root-me.org
;; global options: +cmd
;; Got answer:
;; ->>HEADER<<- opcode: QUERY, status: NOERROR, id: 27903
;; flags: qr rd ra; QUERY: 1, ANSWER: 1, AUTHORITY: 0, ADDITIONAL: 1

;; OPT PSEUDOSECTION:
; EDNS: version: 0, flags:; udp: 65494
;; QUESTION SECTION:
;ctf01.root-me.org.		IN	A

;; ANSWER SECTION:
ctf01.root-me.org.	4543	IN	A	212.129.28.18

;; Query time: 0 msec
;; SERVER: 127.0.0.53#53(127.0.0.53) (UDP)
;; WHEN: Sun Sep 11 11:25:49 +03 2022
;; MSG SIZE  rcvd: 62

[[Defining open ports]]:  nmap -Pn -sV -vv -T4 --open 212.129.28.18