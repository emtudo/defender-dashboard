<?php

return [
    /*
     * Default prefix to the dashboard.
     */
    'route_prefix' => 'dashboard',

    /*
     * Default permission user should have to access the dashboard.
     */
    'security' => [
        'protected'          => true,
        'middleware'         => ['auth','needsPermission'],
        'permission_name'    => 'dashboard.manage',
    ],

    /*
     * Default url used to redirect user to front/admin of your the system.
     */
    'system_url' => '/',
];
