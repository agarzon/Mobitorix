MOBITORIX
===========

Description
---------------

Is just a simple (but nice) mobile interface for Monitorix (http://www.monitorix.org/).

Requirements
-------------------

 * Monitorix
 * Apache
 * PHP

Configuration
--------------
Just rename config.dev.php to config.php and set the hostname where Monitorix is running.

Prepare a CRON task to reegnerate reports every 5 minutes:
0,5,10,15,20,25,30,35,40,45,50,55 * * * * /usr/share/monitorix/cgi-bin/monitorix.cgi mode=localhost graph=all when=day color=black >/dev/null 2>&1 #Regenerate monitorix report

TODO
-------

* Refresh button
* Fix cache issue
* Add more graphics
* Enable/Disable graphics by config

License
-------

MOBITORIX is licensed under the MIT License.

Author
-------

Alexander Garzon <agarzon@php.net>
@alexandergarzon
