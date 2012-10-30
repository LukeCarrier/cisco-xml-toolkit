<?php

/**
 * Name attribute trait.
 *
 * Cisco XML application toolkit.
 *
 * @author Luke Carrier <luke.carrier@tdm.info>
 * @copyright (c) The Development Manager Ltd
 * @license BSD (two clause)
 */

namespace ciscoxml\common;

trait TAttrName {
    protected $name;

    public function setName($name) {
        $this->name = $name;
        return $this;
    }
}
