<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
    // ...
    'mailwizz_api' => array(
        'apiUrl'        => 'http://192.168.1.72:8844/mailwizz/api/index.php',
        'publicKey'     => '17a6bb0358101882218a23225c6f6bd17c19d72b',
        'privateKey'    => '5c9b5d51451e3861b966e9e6f594afbab933c407',
    ),
    'db' => array(
        'driver'         => 'Pdo',
        'dsn'            => 'mysql:dbname=email_marketing_hub;host=192.168.1.72',
        'username'       => 'ms_hub',
        'password'       => '@ms_hub',
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
);
