<?php

/**
 * Prompt attribute trait.
 *
 * Cisco XML application toolkit.
 *
 * @author Luke Carrier <luke.carrier@tdm.info>
 * @copyright (c) The Development Manager Ltd
 * @license BSD (two clause)
 */

namespace ciscoxml\common;

trait TAttrPrompt {
    protected $prompt;

    public function setPrompt($prompt) {
        $this->prompt = $prompt;
        return $this;
    }
}
