<?php
// process a ticket

// try to fetch the ticket
$DATA = dba_fetch($_REQUEST["t"], $tDb);
if($DATA === false)
{
  include("failed.php");
  exit();
}
$DATA = unserialize($DATA);

// fix IE total crap by moving to a new location
header("Location: " . $masterPath. "d$phpExt/" . $_REQUEST["t"] . "/" . $DATA["name"]);
?>