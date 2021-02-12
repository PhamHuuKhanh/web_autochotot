#!/bin/bash

# syslog to stdout for docker logs
NAMED_PIPED="/var/log/syslog"
rm -rf "$NAMED_PIPED" || true
mkfifo --mode 600 "${NAMED_PIPED}" || true
chown "www-data:www-data" "${NAMED_PIPED}"
echo  "Named pipe: ($NAMED_PIPED) creation OK"

sed -ri \
	-e 's!^(\s*destination d_syslog)\s+(.*)!\1 { pipe("/var/log/syslog" template("${ISODATE} | ${PRIORITY} | ${MSGHDR} | ${MESSAGE}\\n") ); };!g' \
	"/etc/syslog-ng/syslog-ng.conf"

service syslog-ng start

(tail -q -f ${NAMED_PIPED} >> /proc/self/fd/1) & apache2-foreground &
trap "pkill -WINCH apache2" TERM

wait
