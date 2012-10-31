<?php

/**
 * Execute action.
 *
 * Cisco XML application toolkit.
 *
 * @author Luke Carrier <luke.carrier@tdm.info>
 * @copyright (c) The Development Manager Ltd
 * @license BSD (two clause)
 */

namespace ciscoxml;

class CiscoIpPhoneExecute {
    protected $execute_items;

    public function addExecuteItem(ExecuteItem $execute_item) {
        $this->execute_items[] = $execute_item;
        return $this;
    }

    public function __toString() {
        $execute_items = '';
        foreach ($this->execute_items as $execute_item) {
            $execute_items .= (string) $execute_item;
        }

        return '<CiscoIPPhoneExecute>'
             .     $execute_items
             . '</CiscoIPPhoneExecute>';
    }
}
