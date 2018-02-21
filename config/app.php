<?php

return [
    'name' => 'Expedables CLI',

    'version' => '0.0.1',

    /*
     * Here goes the application default command. By default
     * the list of commands will appear. All commands
     * application commands will be auto-detected.
     *
     * 'default-command' => App\Commands\HelloCommand::class,
    */

    /*
     * If true, development commands won't be available as the app
     * will be in the production environment.
     */
    'production' => false,

    /*
     * If true, scheduler commands will be available.
     */
    'with-scheduler' => true,

    'providers' => [
        App\Providers\AppServiceProvider::class,
    ],
];
