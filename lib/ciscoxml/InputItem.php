<?php

/**
 * Individual input field.
 *
 * Cisco XML application toolkit.
 *
 * @author Luke Carrier <luke.carrier@tdm.info>
 * @copyright (c) The Development Manager Ltd
 * @license BSD (two clause)
 */

namespace ciscoxml;

class InputItem {
    protected $display_name;
    protected $query_string_param;
    protected $default_value;
    protected $input_flags;

    public function __construct($display_name="", $query_string_param="",
            $default_value="", $input_flags=array()) {
        $this->setDisplayName($display_name)
             ->setQueryStringParam($query_string_param)
             ->setDefaultValue($default_value)
             ->setInputFlags($input_flags);
    }

    public function setDisplayName($display_name) {
        $this->display_name = $display_name;
        return $this;
    }

    public function setQueryStringParam($query_string_param) {
        $this->query_string_param = $query_string_param;
        return $this;
    }

    public function setDefaultValue($default_value) {
        $this->default_value = $default_value;
        return $this;
    }

    public function setInputFlags($input_flags) {
        $this->input_flags = $input_flags;
        return $this;
    }

    public function __toString() {
        $input_flags = implode('', $this->input_flags);

        return '<InputItem>'
             .     "<DisplayName>{$this->display_name}</DisplayName>"
             .     "<QueryStringParam>{$this->query_string_param}</QueryStringParam>"
             .     "<DefaultValue>{$this->default_value}</DefaultValue>"
             .     "<InputFlags>{$input_flags}</InputFlags>"
             . '</InputItem>';
    }
}
