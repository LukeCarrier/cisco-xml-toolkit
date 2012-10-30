<?php

/**
 * Main menu container.
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

class CiscoIpPhoneMenu {
    use TAttrTitle;
    use TAttrPrompt;
    use TAttrSoftKeyItems;

    protected $menu_items = array();

    public function __construct($title="", $prompt="") {
        $this->setTitle($title)
             ->setPrompt($prompt);
    }

    public function addMenuItem(MenuItem $menu_item) {
        $this->menu_items[] = $menu_item;
        return $this;
    }

    public function __toString() {
        $menu_items = "";
        foreach ($this->menu_items as $menu_item) {
            $menu_items .= (string) $menu_item;
        }

        $soft_key_items = "";
        foreach ($this->soft_key_items as $soft_key_item) {
            $soft_key_items .= (string) $soft_key_item;
        }

        return '<CiscoIPPhoneMenu>'
             .     "<Title>{$this->title}</Title>"
             .     "<Prompt>{$this->prompt}</Prompt>"
             .     $menu_items
             .     $soft_key_items
             . '</CiscoIPPhoneMenu>';
    }
}
