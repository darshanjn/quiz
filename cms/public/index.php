<?php
chdir('..');
require_once'../vendor/autoload.php';
require_once'lib/CMS.php';

$api = new CMS('cms');
$api->main();
