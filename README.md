# WP-Maintenance

Collection of custom files related to WordPress maintenance mode.

## wp-maintenance.php

This PHP file is a drop-in in the wp-content directory that replaces the default maintenance message.

The PHP file sends two HTTP headers:
* `HTTP/1.1 503 Service Unavailable`
* `Retry-After: 600`

The content supports two languages: German and English (default). Using `navigator.language` displays the language corresponding to the browser.

There is also support for "dark" mode using `prefers-color-scheme`.

## wp-maintenance.sh

This is a bash script that enables and disables WordPress maintenance mode.

Usage:
```
./wp-maintenance.sh [options]
 
options:
-h, --help              show brief help
-a, --activate DURATION activate maintenance mode for a specified duration in hours
-d, --deactivate        deactivate maintenance mode
```
