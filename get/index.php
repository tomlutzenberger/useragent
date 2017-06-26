<?php

    require_once '../vendor/autoload.php';
    use UAParser\Parser;

    $ua = $_SERVER['HTTP_USER_AGENT'];

    $parser = Parser::create();
    $result = $parser->parse($ua);

    $uaObj = new stdClass();

    $uaObj->info = new stdClass();
    $uaObj->info->name = 'useragent.codes';
    $uaObj->info->version = 'v0.1';

    $uaObj->browser = new stdClass();
    $uaObj->browser->fullName = $result->ua->toString();
    $uaObj->browser->name = $result->ua->family;
    $uaObj->browser->version = $result->ua->toVersion();
    $uaObj->browser->major = $result->ua->major;
    $uaObj->browser->minor = $result->ua->minor;
    $uaObj->browser->patch = $result->ua->patch;

    $uaObj->system = new stdClass();
    $uaObj->system->fullName = $result->os->toString();
    $uaObj->system->name = $result->os->family;
    $uaObj->system->version = $result->os->toVersion();
    $uaObj->system->major = $result->os->major;
    $uaObj->system->minor = $result->os->minor;
    $uaObj->system->patch = $result->os->patch;
    $uaObj->system->patchMinor = $result->os->patchMinor;

    $uaObj->device = $result->device;

    echo json_encode($uaObj);
