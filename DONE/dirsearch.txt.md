### found: 
.well-known/security.txt
http://212.129.28.18/.well-known/security.txt

### there we have:
#If you find security issues, contact us
/a56a_contact_us_a068/contacts.html

![[Pasted image 20220911131224.png]]

ffuf -u http://ctf02.root-me.org/a56a_contact_us_a068/FUZZ -w ~/SecLists/Discovery/Web-Content/dirsearch.txt 

in  [[folder a56a_contact_us_a068]]