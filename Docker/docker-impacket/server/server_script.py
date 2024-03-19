from impacket.smbserver import *
from impacket import smb
from threading import Thread

import time

class SMBCustomServer(Thread):
    def __init__(self):
        Thread.__init__(self)

    def run(self):
        server = SMBServer()
        server.addShare('shared', 'Shared folder')
        server.setSMB2Support(False)
        server.serve()

server = SMBCustomServer()
server.daemon = True
server.start()

while True:
    try:
        conn = SMBConnection('*SMBSERVER', '127.0.0.1', sess_port=445)
        conn.login('guest', '')
        print('SMB Connection successful')
        time.sleep(120)
    except Exception as e:
        print('SMB Connection failed:', e)
        time.sleep(10)
