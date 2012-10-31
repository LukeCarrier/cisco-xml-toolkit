<?php

/**
 * Individual menu item.
 *
 * Cisco XML application toolkit.
 *
 * @author Luke Carrier <luke.carrier@tdm.info>
 * @copyright (c) The Development Manager Ltd
 * @license BSD (two clause)
 */

namespace ciscoxml;

use ciscoxml\common\TAttrUrl;

class MenuItem {
    use TAttrUrl;

    protected $name;

    public function __construct($name="", $url="") {
        $this->setName($name)
             ->setUrl($url);
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function __toString() {
        return '<MenuItem>'
             .     "<Name>{$this->name}</Name>"
             .     "<URL>{$this->url}</URL>"
             . '</MenuItem>';
    }
}
