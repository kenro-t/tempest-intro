<?php

use Tempest\Database\Config\MysqlConfig;
use function Tempest\env;

return new MysqlConfig(
    host: env('DATABASE_HOST', default: 'db'),
    port: env('DATABASE_PORT', default: '3306'),
    username: env('DATABASE_USERNAME', default: 'user'),
    password: env('DATABASE_PASSWORD', default: 'userpass'),
    database: env('DATABASE_DATABASE', default: 'sampledb'),
);