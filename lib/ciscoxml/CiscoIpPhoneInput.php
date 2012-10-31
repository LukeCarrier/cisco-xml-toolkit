<?php

/**
 * User input prompt/form.
 *
 * Cisco XML application toolkit.
 *
 * @author Luke Carrier <luke.carrier@tdm.info>
 * @copyright (c) The Development Manager Ltd
 * @license BSD (two clause)
 */

namespace ciscoxml;

use ciscoxml\common\TAttrPrompt;
use ciscoxml\common\TAttrTitle;
use ciscoxml\common\TAttrUrl;

class CiscoIpPhoneInput {
    use TAttrPrompt;
    use TAttrTitle;
    use TAttrUrl;

    protected $input_items = array();

    public function __construct($title='', $prompt='', $url='') {
        $this->setTitle($title)
             ->setPrompt($prompt)
             ->setUrl($url);
    }

    public function addInputItem(InputItem $input_item) {
        $this->input_items[] = $input_item;
        return $this;
    }

    public function __toString() {
        $input_items = '';
        foreach ($this->input_items as $input_item) {
            $input_items .= (string) $input_item;
        }

        return '<CiscoIPPhoneInput>'
             .     "<Title>{$this->title}</Title>"
             .     "<Prompt>{$this->prompt}</Prompt>"
             .     "<URL>{$this->url}</URL>"
             .     $input_items
             . '</CiscoIPPhoneInput>';
    }
}
