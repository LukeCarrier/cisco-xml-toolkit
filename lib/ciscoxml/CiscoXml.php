<?php

/**
 * Library autoloader and utility functions.
 *
 * Cisco XML application toolkit.
 *
 * @author Luke Carrier <luke.carrier@tdm.info>
 * @copyright (c) The Development Manager Ltd
 * @license BSD (two clause)
 */

namespace ciscoxml;

spl_autoload_register(function ($class_name) {
    include dirname(__DIR__) . '/' . str_replace('\\', '/', $class_name) . '.php';
});

function logRequest() {
    $log = dirname(dirname(__DIR__)) . "/log/{$_SERVER['REQUEST_TIME']}.txt";
    if (!$f = fopen($log, 'wb')) {
        return false;
    }

    foreach (array($_GET, $_POST, $_SERVER) as $item) {
        fwrite($f, var_export($item, true) . "\n");
    }
    fclose($f);
}
