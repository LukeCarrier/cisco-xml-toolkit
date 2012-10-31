<?php

/**
 * Directory/phone book.
 *
 * Cisco XML application toolkit.
 *
 * @author Luke Carrier <luke.carrier@tdm.info>
 * @copyright (c) The Development Manager Ltd
 * @license BSD (two clause)
 */

namespace ciscoxml;

use ciscoxml\common\TAttrTitle;
use ciscoxml\common\TAttrPrompt;
use ciscoxml\common\TAttrSoftKeyItems;

class CiscoIpPhoneDirectory {
    use TAttrTitle;
    use TAttrPrompt;
    use TAttrSoftKeyItems;

    protected $directory_entries = array();

    public function __construct($title, $prompt) {
        $this->setTitle($title)
             ->setPrompt($prompt);
    }

    public function addDirectoryEntry(DirectoryEntry $directory_entry) {
        $this->directory_entries[] = $directory_entry;
        return $this;
    }

    public function __toString() {
        $directory_entries = '';
        foreach ($this->directory_entries as $directory_entry) {
            $directory_entries .= (string) $directory_entry;
        }

        $soft_key_items = '';
        foreach ($this->soft_key_items as $soft_key_item) {
            $soft_key_items .= (string) $soft_key_item;
        }

        return '<CiscoIPPhoneDirectory>'
             .     "<Title>{$this->title}</Title>"
             .     "<Prompt>{$this->prompt}</Prompt>"
             .     $directory_entries
             .     $soft_key_items
             . '</CiscoIPPhoneDirectory>';
    }
}
