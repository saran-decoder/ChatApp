<?php

require_once 'libs/start.php';

$api = new API();
try {
    $api->processApi();
} catch (Exception $e) {
    $api->die($e);
}
