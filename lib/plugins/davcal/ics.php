<?php

/**
 * DoukWiki DAVCal PlugIn - ICS support server
 */

if(!defined('DOKU_INC')) define('DOKU_INC', dirname(__FILE__).'/../../../');
if (!defined('DOKU_DISABLE_GZIP_OUTPUT')) define('DOKU_DISABLE_GZIP_OUTPUT', 1);
require_once(DOKU_INC.'inc/init.php');
session_write_close(); //close session

global $conf;
if($conf['allowdebug'])
    dbglog('---- DAVCAL ics.php init');

$path = explode('/', $_SERVER['REQUEST_URI']);
$icsFile = end($path);

// Load the helper plugin
$hlp = null;
$hlp =& plugin_load('helper', 'davcal');

if(is_null($hlp))
{
    if($conf['allowdebug'])
        dbglog('Error loading helper plugin');
    die('Error loading helper plugin');
}

if($hlp->getConfig('disable_ics') === 1)
{
    if($conf['allowdebug'])
        dbglog('ICS synchronisation is disabled');
    die("ICS synchronisation is disabled");
}

// Retrieve calendar ID based on private URI
$calid = $hlp->getCalendarForPrivateURL($icsFile);

if($calid === false)
{
    if($conf['allowdebug'])
        dbglog('No calendar with this name known: '.$icsFile);
    die("No calendar with this name known.");
}

// Retrieve calendar contents and serve
$stream = $hlp->getCalendarAsICSFeed($calid);
header("Content-Type: text/calendar");
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"calendar.ics\"");
echo $stream;