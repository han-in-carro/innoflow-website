<?php
$params = require __DIR__ . '/params.php';

return [
    'class' => 'yii\db\Connection',
    'dsn' => sprintf(
        '%s:host=%s;port=%s;dbname=%s',
        $params['db']['connection'],
        $params['db']['host'],
        $params['db']['port'],
        $params['db']['name']
    ),
    'username' => $params['db']['username'],
    'password' => $params['db']['password'],
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];

