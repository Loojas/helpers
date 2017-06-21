<?php


require __DIR__ . '/vendor/autoload.php';

use Loojas\Helpers\GuidProvider;
use Loojas\Helpers\CredentialsTenant;

$guid = new GuidProvider();
echo $guid->getGUID();

echo "<hr>";

$cred = new CredentialsTenant();
echo $cred->getUser();
echo "<br />";
echo $cred->getDatabase();

echo "<hr>";