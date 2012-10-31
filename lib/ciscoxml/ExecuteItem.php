<?php

/**
 * Individual execute item.
 *
 * Cisco XML application toolkit.
 *
 * @author Luke Carrier <luke.carrier@tdm.info>
 * @copyright (c) The Development Manager Ltd
 * @license BSD (two clause)
 */

namespace ciscoxml;

use ciscoxml\common\TAttrUrl;

class ExecuteItem {
    use TAttrUrl;

    public function __construct($url) {
        $this->setUrl($url);
    }

    public function __toString() {
        return '<ExecuteItem '
             .     "URL=\"{$this->url}\""
             . '/>';
    }
}
