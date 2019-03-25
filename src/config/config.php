<?php
/**
 * Created by PhpStorm.
 * User: Musa
 * Date: 28.01.2019
 * Time: 18:19
 */

return [

    "enabled" => true, // Is cache enabled?

    "minutes" => 30, // Cache minutes.

    /**
     * If this event is triggered on this model,
     * the cache of that table is deleted.
     */
    "clear_events" => [
        "created",
        "updated",
        "deleted"
    ],

    /**
     * If debug mode is off, it does not show any error.
     */
    "debug" => true,

    /**
     * Cache store directory, store name, config name, etc. names
     */
    'cache-store' => 'perfectly-cache',

];
