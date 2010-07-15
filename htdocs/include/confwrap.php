<?php
// version-indepenent configuration variables
require_once("config.php");
require_once("funcs.php");

// variables
if(!isset($defLocale)) $defLocale = "en_US";
if(!isset($cfgVersion)) $cfgVersion = "0.4";
if(!isset($phpExt)) $phpExt = ".php";
if(!isset($maxSize)) $maxSize = ini_get('upload_max_filesize');
if(!isset($authReal)) $authRealm = "Restricted Area";
if(!isset($sessionName)) $sessionName = "DL" . md5($masterPath);
if(!isset($dsn)) $dsn = "sqlite:$spoolDir/data.sdb";
if(!isset($gcProbability)) $gcProbability = 1.0;
if(!isset($gcInternal)) $gcInternal = true;
if(!isset($gcLimit)) $gcLimit = 0;

// derived data
$useSysLog = (!empty($logFile) && strstr($logFile, "/") === FALSE);
$iMaxSize = returnBytes($maxSize);
$dataDir = $spoolDir . "/data";
$adminPath = $masterPath . "admin$phpExt";
$helpRoot = "static/guide";
$dPath = $masterPath . "d$phpExt";

// constants
$banner = 'Generated by <a href="http://www.thregr.org/~wavexx/software/dl/">dl ticket service</a>';
$cookieLifetime = 1000 * 60 * 60 * 24 * 90;
