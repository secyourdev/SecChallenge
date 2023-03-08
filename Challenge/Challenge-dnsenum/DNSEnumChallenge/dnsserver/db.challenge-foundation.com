$TTL    604800
@       IN      SOA     ns1.challenge-foundation.com. root.challenge-foundation.com. (
                  3       ; Serial
             604800     ; Refresh
              86400     ; Retry
            2419200     ; Expire
             604800 )   ; Negative Cache TTL
;
; name servers - NS records
     IN      NS      ns1.challenge-foundation.com.

; name servers - A records
ns1.challenge-foundation.com.          IN      A      172.20.0.2

host1.challenge-foundation.com.        IN      A      172.20.0.3
host2.challenge-foundation.com.        IN      A      172.20.0.4
