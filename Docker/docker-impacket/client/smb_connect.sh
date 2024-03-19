#!/bin/bash

while true; do
    smbclient //smb_server/flag -U smbuser%NOTtheFlagYet -q
    
    sleep 20
    echo "quit"
done
