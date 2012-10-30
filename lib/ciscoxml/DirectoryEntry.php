<?php

/**
 * Individual directory entry.
 *
 * Cisco XML application toolkit.
 *
 * @author Luke Carrier <luke.carrier@tdm.info>
 * @copyright (c) The Development Manager Ltd
 * @license BSD (two clause)
 */


namespace ciscoxml;

use ciscoxml\common\TAttrName;
use ciscoxml\common\TAttrSoftKeyItem;

class DirectoryEntry {
    use TAttrName;

    protected $telephone;

    public function __construct($name, $telephone) {
        $this->setName($name)
             ->setTelephone($telephone);
    }

    public function setTelephone($telephone) {
        $this->telephone = $telephone;
        return $this;
    }

    public function __toString() {
        return '<DirectoryEntry>'
             .     "<Name>{$this->name}</Name>"
             .     "<Telephone>{$this->telephone}</Telephone>"
             . '</DirectoryEntry>';
    }
}
