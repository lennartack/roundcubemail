<?php

/**
 +-----------------------------------------------------------------------+
 | This file is part of the Roundcube Webmail client                     |
 |                                                                       |
 | Copyright (C) The Roundcube Dev Team                                  |
 |                                                                       |
 | Licensed under the GNU General Public License version 3 or            |
 | any later version with exceptions for skins & plugins.                |
 | See the README file for a full license statement.                     |
 |                                                                       |
 | CONTENTS:                                                             |
 |   Abstract class for output generation                                |
 +-----------------------------------------------------------------------+
 | Author: Thomas Bruederli <roundcube@gmail.com>                        |
 +-----------------------------------------------------------------------+
*/

/**
 * Class for output generation
 *
 * @package    Webmail
 * @subpackage View
 */
class rcmail_output_cli extends rcmail_output
{
    public $type = 'cli';

    /**
     * Object constructor
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Call a client method
     *
     * @see rcube_output::command()
     */
    function command()
    {
        // NOP
    }

    /**
     * Add a localized label to the client environment
     */
    function add_label()
    {
        // NOP
    }

    /**
     * Invoke display_message command
     *
     * @see rcube_output::show_message()
     */
    function show_message($message, $type = 'notice', $vars = null, $override = true, $timeout = 0, $update = false)
    {
        if ($this->app->text_exists($message)) {
            $message = $this->app->gettext(['name' => $message, 'vars' => $vars]);
        }

        printf("[%s] %s\n", strtoupper($type), $message);
    }

    /**
     * Redirect to a certain url.
     *
     * @see rcube_output::redirect()
     */
    function redirect($p = [], $delay = 1)
    {
        // NOP
    }

    /**
     * Send output to the client.
     */
    function send()
    {
        // NOP
    }
}
