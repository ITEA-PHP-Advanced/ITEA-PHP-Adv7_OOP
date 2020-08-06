#!/usr/bin/env php
<?php

require_once __DIR__ . '/../src/SoftwareDevelopmentCompany/TeamLead.php';
require_once __DIR__ . '/../src/SoftwareDevelopmentCompany/BackEndDeveloper.php';
require_once __DIR__ . '/../src/SoftwareDevelopmentCompany/FrontEndDeveloper.php';

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
