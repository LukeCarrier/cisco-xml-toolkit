<?php

/**
 * Front dispatcher.
 *
 * Cisco XML application toolkit.
 *
 * @author Luke Carrier <luke.carrier@tdm.info>
 * @copyright (c) The Development Manager Ltd
 * @license BSD (two clause)
 */

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 'on');
ini_set('html_errors', 'off');

// Use the Cisco XML API toolkit
require_once __DIR__ . '/lib/ciscoxml/CiscoXml.php';
use ciscoxml\CiscoIpPhoneDirectory;
use ciscoxml\CiscoIpPhoneMenu;
use ciscoxml\DirectoryEntry;
use ciscoxml\MenuItem;
use ciscoxml\SoftKeyItem;

// Log all incoming requests to simplify debugging
register_shutdown_function('ciscoxml\logRequest');

// Figure out where we are and what we're doing
$root_path = $_SERVER['REQUEST_URI'];
$root_url  = "http://{$_SERVER['SERVER_ADDR']}{$root_path}";
$path = (array_key_exists('PATH_INFO', $_SERVER)) ? $_SERVER['PATH_INFO'] : '';

switch ($path) {
    case "/directory":
        $menu = new CiscoIpPhoneDirectory('Phone book', 'Select a number and press dial');
        $menu->addDirectoryEntry(new DirectoryEntry('Reception', 100))
             ->addSoftKeyItem(new SoftKeyItem('dial', 'SoftKey:Dial', 1))
             ->addSoftKeyItem(new SoftKeyItem('edit', 'SoftKey:EditDial', 2))
             ->addSoftKeyItem(new SoftKeyItem('back', 'Init:Services', 4));
        break;

    default:
        $menu = new CiscoIpPhoneMenu('Your company', 'Select an application');
        $menu->addMenuItem(new MenuItem('Phone book', $root_url . '/directory'))
             ->addSoftKeyItem(new SoftKeyItem('select', 'SoftKey:Select', 1))
             ->addSoftKeyItem(new SoftKeyItem('back', 'Init:Services', 4));
        break;
}

echo (string) $menu;
