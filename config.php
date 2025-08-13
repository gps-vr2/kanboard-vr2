<?php
// Kanboard Database Configuration for VR2

define('DB_DRIVER', 'mysql');
define('DB_USERNAME', 'avnadmin');       // Replace with your Aiven DB username
define('DB_PASSWORD', 'AVNS_U-DvqBQ28vhpZYICrvS');       // Replace with your Aiven DB password
define('DB_HOSTNAME', 'kanboard-vr2-log-ffd8.g.aivencloud.com');       // Replace with your Aiven DB hostname
define('DB_NAME', 'defaultdb');                  // This is your database name
define('DB_PORT', 15626);                            // Default MySQL port

// Optional Security Settings
define('LDAP_AUTH', false);
define('REMEMBER_ME_AUTH', true);