<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


/**
 * Defines the version of skype
 *
 * This code fragment is called by moodle_needs_upgrading() and
 * /admin/index.php
 *
 * @package   mod_skype
 * @copyright 2011 Amr Hourani a.hourani@gmail.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'mod_skype'; // Full name of the plugin (used for diagnostics).
$plugin->version  = 2014090700;  // The current module version (Date: YYYYMMDDXX)
$plugin->requires = 2010112400;  // Requires this Moodle version
$plugin->cron     = 0;           // Period for cron to check this module (secs)
$plugin->release = 'v2.7 (Build: 20140090700)';
