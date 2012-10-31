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

trait TAttrUrl {
    protected $url;

    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }
}
