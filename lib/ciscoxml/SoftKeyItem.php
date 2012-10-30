<?php

/**
 * Soft key action.
 *
 * Cisco XML application toolkit.
 *
 * @author Luke Carrier <luke.carrier@tdm.info>
 * @copyright (c) The Development Manager Ltd
 * @license BSD (two clause)
 */

namespace ciscoxml;

class SoftKeyItem {
    protected $name;
    protected $url;
    protected $position;

    public function __construct($name="", $url="", $position=0) {
        $this->setName($name);
        $this->setUrl($url);
        $this->setPosition($position);
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    public function setPosition($position) {
        $this->position = $position;
        return $this;
    }

    public function __toString() {
        return '<SoftKeyItem>'
             .     "<Name>{$this->name}</Name>"
             .     "<URL>{$this->url}</URL>"
             .     "<Position>{$this->position}</Position>"
             . '</SoftKeyItem>';
    }
}
