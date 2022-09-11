import hashlib
import time 
import requests

room = 'ctf03.root-me.org'
#Depers
namefile = u'index.phtml'
extension = u'phtml'
# startepox = 1662635580 #Переведи время в UNIX только
startepox = int(time.mktime(time.strptime('2022-09-10 19:50:42', '%Y-%m-%d %H:%M:%S')))
print(startepox)
s = namefile + str(startepox)
srtByte = bytes(s, 'utf-8')
hash = hashlib.sha256(srtByte).hexdigest()
print(f'http://{room}/e5d4cb92102d5a06/uploads/{str(hash)}.{extension}')