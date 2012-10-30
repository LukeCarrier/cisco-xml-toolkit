<?php

/**
 * Title attribute trait.
 *
 * Cisco XML application toolkit.
 *
 * @author Luke Carrier <luke.carrier@tdm.info>
 * @copyright (c) The Development Manager Ltd
 * @license BSD (two clause)
 */

namespace ciscoxml\common;

trait TAttrTitle {
    protected $title;

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }
}
