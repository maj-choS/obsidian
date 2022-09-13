           `user@machine$ ffuf -w /usr/share/wordlists/SecLists/Discovery/Web-Content/common.txt -u http://10.10.134.247/FUZZ`
              `user@machine$ dirb http://10.10.134.247/ /usr/share/wordlists/SecLists/Discovery/Web-Content/common.txt`
                     `user@machine$ gobuster dir --url http://10.10.134.247/ -w /usr/share/wordlists/SecLists/Discovery/Web-Content/common.txt`