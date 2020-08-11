#!/usr/bin/env php
<?php

require_once __DIR__ . '/autoloader.php';

use App\SoftwareDevelopmentCompany\BackEndDeveloper;
use App\SoftwareDevelopmentCompany\FrontEndDeveloper;
use App\SoftwareDevelopmentCompany\TeamLead;

$vasya = new BackEndDeveloper();
$petya = new BackEndDeveloper();
$alina = new FrontEndDeveloper();
$ivan = new FrontEndDeveloper();
$dima = new BackEndDeveloper();

$valera = new TeamLead();
$valera->addTeamMember($alina);
$valera->addTeamMember($vasya);
$valera->addTeamMember($petya);
$valera->addTeamMember($ivan);
$valera->addTeamMember($dima);
$valera->startWork();
