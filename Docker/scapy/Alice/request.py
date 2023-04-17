import socket
import random
host = socket.gethostbyname(socket.gethostname())

from scapy.all import *

def find_broadcast(host):
    ip = host.split(".")
    ip = ip[:2]
    ip.append("255.255")
    return ".".join(ip)

def rand_ip():
    return "172.0" + "." + str(random.randint(0, 255)) + "." + str(random.randint(1, 254))



broadcast = find_broadcast(host)
print(broadcast)

reference = IP(src="0.0.0.0",dst=host)/ICMP()/"HIII"

while(1):
    
    try:
        p = sniff(count=1)
        #print(p[0][IP])
        #print(reference[IP])
        if p[0][IP].src == reference[IP].src and p[0][IP].dst == reference[IP].dst:
            
            if p[0][ICMP].type == 8:
                print("Received ICMP request")
            
                

                if p[0][ICMP].payload == reference[ICMP].payload:
                    print("Received correct payload")
                    break
                else:
                    print("Wrong payload received")
            else:
                print("Wrong ICMP type received")
        else:
            print("Wrong IP packet received")
    except IndexError:
        print ('Wrong packet received')
        pass
    





while(1):
    send(IP(src=rand_ip(),dst=broadcast)/UDP(dport=55)/ "1472ac1b19")
    send(IP(src=rand_ip(),dst=broadcast)/TCP(dport=80, flags="S")/"Hint udp port 55")
    send(IP(src=rand_ip(),dst=broadcast)/UDP(dport=53)/DNS(rd=1,qd=DNSQR(qname="www.google.com"))/"27fe0ae54ec885ae44252880f475ffc2")
    send(IP(src=rand_ip(),dst=broadcast)/ICMP()/"here is a hint for the flag : https://www.youtube.com/watch?v=dQw4w9WgXcQ")


    




