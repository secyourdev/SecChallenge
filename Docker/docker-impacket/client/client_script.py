from impacket.smbconnection import SMBConnection
from impacket import smb

conn = SMBConnection('*SMBSERVER', '127.0.0.1', sess_port=445)
try:
    conn.login('guest', '')
    print('SMB Connection successful')
except smb.SessionError as e:
    print('SMB Connection failed:', e)
