#!/bin/bash

printf '1 - First start \n2 - Access manager \n3 - Access agent\n4 - Stop\n5 - Complete clear\n\n> '
read rep

if [ "$rep" = "1" ]
then
    # DOCKER_BUILDKIT=0 builds the services in the order specified in the docker-compose.yaml
    DOCKER_BUILDKIT=0 docker-compose build
    printf '\nSystem built.\n'
    docker-compose up -d
    printf '\nSystem up.\n'
    # Restart the snmpd service on the agent so that the new snmpd.conf parameters are applied
    docker exec -it snmp_agent_1 sudo /usr/sbin/service snmpd restart
    # "admin" account creation, needs to be done after the service restart
    docker exec -it snmp_manager_1 /usr/bin/snmpusm -u bootstrap -l authPriv -a SHA -x AES -A temp_password -X temp_password 192.168.92.21 create admin bootstrap && /usr/bin/snmpusm -u admin -l authPriv -a SHA -x AES -A temp_password -X temp_password 192.168.92.21 passwd temp_password Thalescom01@
    # Actual access to the container
    docker exec -it snmp_manager_1 /bin/bash

elif [ "$rep" = "2" ]
then
    # Checking if the systems are up, launching them if they aren't
    docker-compose up -d
    printf '\nSystem up.\n'
    # Access to the machine
    docker exec -it snmp_manager_1 /bin/bash

elif [ "$rep" = "3" ]
then
    # Checking if the systems are up, launching them if they aren't
    docker-compose up -d
    printf '\nSystem up.\n'
    # Access to the machine
    docker exec -it snmp_agent_1 /bin/bash

elif [ "$rep" = "4" ]
then
    # Disables the containers, the build is still there
    docker-compose down
    printf '\nSystem down.\n'

elif [ "$rep" = "5" ]
then
    # -s to force stop the running containers, then deleting them and the associated images. Build will need to be redone after this.
    docker-compose rm -s
    docker network rm snmp_snmp
    docker image rm snmp_agent
    docker image rm snmp_manager
    printf '\nSystem cleared.\n'

else
    printf 'Please enter a valid input (1, 2, 3, 4)'
fi