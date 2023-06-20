## SCRIPT

Commande pour lancer le script : sudo ./snmp.sh

Option 1 : Build et lancement
    ATTENTION : Ne pas faire deux fois sans avoir clean entre-temps, sinon collision

Option 2 et 3 : Activation des conteneurs et accès respectivement au manager et à l'agent
    ATTENTION : Ne lancer qu'une fois le build réalisé

Option 4 : Désactivation des conteneurs

Option 5 : Désactivation et suppression des conteneurs


## RESEAU

Nom du réseau : snmp_snmp
Plage IP du réseau : 192.168.92.0/24

Manager :
Nom de la machine : snmp_manager_1
Adresse IPv4 : 192.168.92.20/24
Fichiers importants : /etc/snmp/snmp.conf

Agent :
Nom de la machine : snmp_agent_1
Adresse IPv4 : 192.168.92.21/24
Fichiers importants : /etc/snmp/snmpd.conf

Pour plus de détails : sudo docker inspect snmp_snmp

## USERS

Les utilisateurs par défaut de chaque machine sont manager et agent. Les deux ont les droits sudo sans mot de passe.


## COMMANDES

Les commandes doivent être entrées depuis la machine snmp_manager_1, l'accès à l'autre n'ayant d'utilité qu'en cas de modification de configuration.
Grâce au contenu du fichier /etc/snmp/snmp.conf (qui doit rester confidentiel), il n'est pas nécessaire de se connecter à chaque commande :

snmpget <agent_ip> <oid>            exemple : snmpget 192.168.92.21 sysUpTime.0

Permet d'obtenir l'oid souhaité. Les principales commandes possibles sont :
snmpget, snmpset, snmpgetnext, snmpwalk

Pour plus de commandes, voir : https://net-snmp.sourceforge.io/wiki/index.php/TUT:Using_and_loading_MIBS#Net-SNMP_Command_Line_Applications