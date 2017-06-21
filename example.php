<?php


require __DIR__ . '/vendor/autoload.php';

use Loojas\Helpers\GuidProvider;

$guid = new GuidProvider();
echo $guid->getGUID();