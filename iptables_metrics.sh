#!/bin/sh
# Version corrigée pour Telegraf
iptables -L -n -v -x | awk '
BEGIN {
    print "iptables_packets,chain=INPUT value=0"
    print "iptables_bytes,chain=INPUT value=0"
    print "iptables_packets,chain=FORWARD value=0"
    print "iptables_bytes,chain=FORWARD value=0"
    print "iptables_packets,chain=OUTPUT value=0"
    print "iptables_bytes,chain=OUTPUT value=0"
}
NR>2 {
    print "iptables_packets,chain="$1" value="$2
    print "iptables_bytes,chain="$1" value="$3
}'