#!/bin/bash
PACKAGE="wp-maintenance.sh"
WP_ABSPATH="ABSPATH";

print_usage() {
    echo "$PACKAGE - WP Maintenance"
    echo " "
    echo "./$PACKAGE [options]"
    echo " "
    echo "options:"
    echo "-h, --help              show brief help"
    echo "-a, --activate DURATION activate maintenance mode for a specified duration in hours"
    echo "-d, --deactivate        deactivate maintenance mode"
}

activate_maintenance() {
    CURRENT_TIME=$(date +%s)
    DURATION=$((CURRENT_TIME+$1*3600))
    echo "<?php \$upgrading = $DURATION ?>" > "$WP_ABSPATH/.maintenance"
    echo "WP maintenance activated"
}

deactivate_maintenance() {
    rm -f "$WP_ABSPATH/.maintenance"
    echo "WP maintenance deactivated"
}

while test $# -gt 0; do
  case "$1" in
    -h|--help)
        print_usage
        exit 0
        ;;
    -a|--activate)
        shift
        if test $# -gt 0; then
            re='^[1-9]+$'
            if ! [[ $1 =~ $re ]] ; then
                echo "error: Duration must be an integer greater than zero" >&2;
                exit 1
            fi
            activate_maintenance $1
            break
        else
            echo "no duration specified"
            exit 1
        fi
        shift
        ;;
    -d|deactivate)
        deactivate_maintenance
        break
        ;;
    *)
        print_usage
        break
        ;;
    esac
done
