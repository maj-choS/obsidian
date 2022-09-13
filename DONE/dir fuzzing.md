An excellent [[resource for wordlists]]:  https://github.com/danielmiessler/SecListsn 
[[toos for dir fuzzing]]


ffuf -u http://ctf01.root-me.org/FUZZ -w ~/SecLists/Discovery/Web-Content/[[directory-list-2.3-medium.txt ]]

ffuf -u http://ctf01.root-me.org/FUZZ -w ~/SecLists/Discovery/Web-Content/[[raft-medium-files.txt ]]

ffuf -u http://ctf01.root-me.org/FUZZ -w ~/SecLists/Discovery/Web-Content/dirsearch.tx[[dirsearch.txt]]
 
