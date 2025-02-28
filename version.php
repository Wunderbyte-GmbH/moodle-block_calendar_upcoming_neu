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
 * Version details
 *
 * @package    block_calendar_upcoming_neu
 * @copyright  1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @author     20210210 harald.bamberger@donau-uni.ac.at
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Copy of the standard block 'block_calendar_upcoming'
// with minor modifications by G. Schwed
// to show all dates - not only those from the actual course
// 20200210 harald.bamberger@donau-uni.ac.at ported to Moodle 3.10

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2020110900;        // The current plugin version (Date: YYYYMMDDXX)
$plugin->requires  = 2020110300;        // Requires this Moodle version
$plugin->component = 'block_calendar_upcoming_neu'; // Full name of the plugin (used for diagnostics)
