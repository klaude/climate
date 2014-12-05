<?php

namespace League\CLImate\TerminalObject;

use League\CLImate\Decorator\ParserImporter;
use League\CLImate\Settings\SettingsImporter;
use League\CLImate\Util\UtilImporter;

abstract class BaseTerminalObject implements TerminalObjectInterface
{
    use SettingsImporter, ParserImporter, UtilImporter;

    /**
     * Set the property if there is a valid value
     *
     * @param string $key
     * @param string $value
     */

    protected function set($key, $value)
    {
        if (strlen($value)) {
            $this->$key = $value;
        }
    }

    /**
     * Get the parser for the current object
     *
     * @return \League\CLImate\Decorator\Parser
     */

    public function getParser()
    {
        return $this->parser;
    }

    /**
     * Check if this object requires a new line to be added after the output
     *
     * @return boolean
     */

    public function sameLine()
    {
        return false;
    }

}
