<?php

/**
 * Soft key attribute trait.
 *
 * Cisco XML application toolkit.
 *
 * @author Luke Carrier <luke.carrier@tdm.info>
 * @copyright (c) The Development Manager Ltd
 * @license BSD (two clause)
 */

namespace ciscoxml\common;

use ciscoxml\SoftKeyItem;

trait TAttrSoftKeyItems {
    protected $soft_key_items = array();

    public function addSoftKeyItem(SoftKeyItem $soft_key_item) {
        $this->soft_key_items[] = $soft_key_item;
        return $this;
    }
}
